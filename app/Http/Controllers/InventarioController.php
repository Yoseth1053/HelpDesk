<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Ambiente;
use App\Models\Elemento;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Termwind\Components\Dd;
use PDF;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::all();
        $ambientes = Ambiente::all();
        $ambientesInv = [];
        foreach($ambientes as $ambiente)
        {
            $verificar = Inventario::where('ambiente_id',$ambiente->id)->first();
            if($verificar != null)
            {
                $ambientesInv[] = $ambiente;
            }
        }
        return view('inventarios.index', compact('inventarios','ambientes','ambientesInv'));//
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventario = new Inventario();
        $ambNoDisponible = Inventario::all()->pluck('ambiente_id');
        $ambientes = Ambiente::all()->whereNotIn('id',$ambNoDisponible);//ambientes que ya tienen inventario
        $elementos = Elemento::all();
        return view('inventarios.crear', compact('inventario','ambientes','elementos'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
       
            for($i = 0; $i < count($request->cantidad); $i++)
            {
                $elemento = 'elemento-'.$i;
                if($request->$elemento != null)
                { 
                    $inventario = new Inventario();
                    $inventario->cantidad = $request->cantidad[$i];
                    $inventario->elemento_id = $request->$elemento;
                    $inventario->ambiente_id = $request->ambiente_id;
                    $inventario->save();
                    // dd($request->$elemento,$request->cantidad[$i]);
                }
                    
            }
            
            alert()->success('Exito','Inventario Creado Satisfactoriamente');
            return Redirect::route("inventarios.index");//
        } 
        catch (Exception $e) 
        {
            alert()->error('Error','Porfavor Seleccionar Cantidad');
            return back();//
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show($amb)
    {
        $ambiente = Ambiente::where('id',$amb)->first();
        $inventarios = Inventario::where('ambiente_id',$amb)->get();
        return view('inventarios.ver', compact('inventarios','ambiente'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($amb)
    {
        $ambiente = Ambiente::where('id',$amb)->first();
        $elementos = Elemento::all();
        return view('inventarios.editar', compact('ambiente','elementos'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $amb)
    {
        try{
            for($i = 0; $i < count($request->cantidad); $i++)
            {
                $elemento = 'elemento-'.$i;
                //si el check esta seleccionado entra a la siguiente condicional
                if($request->$elemento != null)
                { 
                    //consulltamos si existe el registro
                    $verificar =  Inventario::where('ambiente_id', $amb)->where('elemento_id', $request->$elemento)->first();
                    if($verificar != null)
                    {
                        //si existe el registro lo modificamos
                        $verificar->update(array('cantidad'=>$request->cantidad[$i]));
                    }
                    else
                    {
                        //si no existe el registro lo creamos
                        $inventario = new Inventario();
                        $inventario->cantidad = $request->cantidad[$i];
                        $inventario->elemento_id = $request->$elemento;
                        $inventario->ambiente_id = $amb;
                        $inventario->save();
                    }
                   
                }
                //si el check no esta seleccionado 
                else
                {
                   // consultamos si hay un registro con el id de ese elemento 
                   $verificar2 =  Inventario::where('ambiente_id', $amb)->where('elemento_id', $request->idElemento[$i])->first();
                   if($verificar2 != null)
                   {
                       //si existe el registro lo borramos
                       $verificar2->delete();
                   }
                }
                    
            }
            alert()->success('Exito','Inventario Actualizado Satisfactoriamente');
            return back();//
        } 
        catch (Exception $e) 
        {
            alert()->error('Error','Porfavor Seleccionar Cantidad');
            return back();//
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        //$inventario->delete();
    }

    public function destroy2($amb)
    {
        // dd($inventario);
        Inventario::where('ambiente_id',$amb)->delete();
        alert()->success('Exito','Registro Eliminado Satisfactoriamente');
        return Redirect::route("inventarios.index");//

    }

    public function exportarPdf(Request $request)
    {
        $ambiente = Ambiente::find($request->ambiente);
        $inventarios = Inventario::where('ambiente_id',$ambiente->id)->get();
        $fecha =Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');

        view()->share('inventarios',$inventarios);
        $pdf = PDF::LoadView('pdf.ReporteInventario',['inventarios' => $inventarios
        ,'ambiente' => $ambiente, 'fecha' => $fecha, 'hora' => $hora,]);
        return $pdf->stream('Reporte Inventario.pdf');
    }
}
