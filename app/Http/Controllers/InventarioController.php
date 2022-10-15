<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Ambiente;
use App\Models\Elemento;
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
        return view('inventarios.index', compact('inventarios','ambientes'));//
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventario = new Inventario();
        $ambientes = Ambiente::all();
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
        $inventario = new Inventario();
        $inventario->cantidad=$request->cantidad;
        $inventario->elemento_id = $request->elemento_id;
        $inventario->ambiente_id = $request->ambiente_id;
        // $inventario->estado_id = 1;
        // $input = $request->all();
        // $inventario->fill($input);
        $inventario->save();
        
        return Redirect::route("inventarios.index");//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        return view('inventarios.ver', compact('inventario'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        $ambientes = Ambiente::all();
        $elementos = Elemento::all();
        return view('inventarios.editar', compact('inventario','ambientes','elementos'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        $inventario->cantidad = $request->cantidad;
        $inventario->elemento_id = $request->elemento_id;
        $inventario->ambiente_id = $request->ambiente_id;
        $inventario->save();
        session()->flash("flash.banner","Inventario creado satisfactoriamente");
        return Redirect::route("inventarios.index");//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        //
    }

    public function exportarPdf(Request $request)
    {
        $ambiente = Ambiente::find($request->ambiente);

        view()->share('ambiente',$ambiente);
        $pdf = PDF::LoadView('');
        dd($ambiente);//
    }
}
