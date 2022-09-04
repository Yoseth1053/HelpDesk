<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambientes = Ambiente::all();
        return view('ambientes.index', compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ambiente = new Ambiente();
        return view('ambientes.crear', compact('ambiente'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambiente = new Ambiente();
        $ambiente->nombre=$request->nombre;
        $ambiente->ubicacion = $request->ubicacion;
        $ambiente->estado = 1;
        $ambiente->save();
        session()->flash("flash.banner","Ambiente creado satisfactoriamente");
        return Redirect::route("ambientes.index");////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function show(Ambiente $ambiente)
    {
        return view('ambientes.ver', compact('ambiente'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambiente $ambiente)
    {
        return view('ambientes.editar', compact('ambiente'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambiente $ambiente)
    {
        
        $ambiente->nombre=$request->nombre;
        $ambiente->ubicacion = $request->ubicacion;
        $ambiente->save();
        session()->flash("flash.banner","Ambiente creado satisfactoriamente");
        return Redirect::route("ambientes.index");///
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambiente $ambiente)
    {
        //
    }
}
