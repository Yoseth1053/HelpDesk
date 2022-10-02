<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use App\Models\Incidente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidentes = Incidente::all();
        return view('incidentes.index', compact('incidentes'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now()->format('d-m-Y');
        $fecha = date('Y-m-d', strtotime($fecha));
        $hora = Carbon::now()->format('H:i:s');
        
        $ambientes = Ambiente::all();
        $incidente = new Incidente();
        return view('incidentes.crear', compact('incidente','ambientes','fecha','hora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidente = new Incidente();
        $incidente->fecha = $request->fecha;
        $incidente->hora = $request->hora;
        $incidente->ambiente_id = $request->ambiente;
        $incidente->descripcion = $request->descripcion;
        $incidente->estado_id = 1;
        // $input = $request->all();
        // $incidente->fill($input);
        $incidente->save();
        session()->flash("flash.banner","Incidente creado satisfactoriamente");
        return Redirect::route("incidentes.index");
    }

    public function solucion(Incidente $incidente)
    {
        $fecha =  $incidente->fechaProg ;
        $hora =  $incidente->horaProg ;
        $observacion =  $incidente->observacion;
        // $hora = Carbon::now()->format('H:i:s');
        return view('incidentes.solucion', compact('incidente','fecha','hora','observacion'));//
    }

    public function solucionStore(Request $request, Incidente $incidente)
    {
            $incidente->fechaSolucion = $request->fechaSol; 
            $incidente->horaSolucion = $request->horaSol;
            $incidente->solucionImplementada = $request->solucionImplementada;
            $incidente->estado_id = 3;
            $incidente->save();   

            session()->flash("flash.banner","Incidente Solucionado satisfactoriamente");
            return Redirect::route("incidentes.index");//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidentes  $incidentes
     * @return \Illuminate\Http\Response
     */
    public function show(Incidente $incidente)
    {
        return view('incidentes.ver', compact('incidente'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidentes  $incidentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidente $incidente)
    {
        $fecha = Carbon::now()->format('d-m-Y');
        $fecha = date('Y-m-d', strtotime($fecha));
        $hora = Carbon::now()->format('H:i:s');
        return view('incidentes.agenda', compact('incidente','fecha','hora'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidentes  $incidentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidente $incidente)
    {
        if($request->fechaRespuesta != null)
        {
            $incidente->fechaRespuesta = $request->fechaRespuesta; 
            $incidente->horaRespuesta = $request->horaRespuesta;
            $incidente->fechaProg = $request->fechaProg;
            $incidente->horaProg = $request->horaProg;
            $incidente->observacion = $request->observacion;
            $incidente->estado_id = 2;
            $incidente->save();        
            session()->flash("flash.banner","Incidente Agendado satisfactoriamente");
        }

        return Redirect::route("incidentes.index");//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidentes  $incidentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidente $incidente)
    {
        //
    }
}
