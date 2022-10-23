<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = new Estado();
        return view('estados.crear', compact('estado'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado = new Estado();
        $estado->nombre=$request->nombre;
        $estado->estado = 1;
        $estado->save();
        alert()->success('Exito','Estado Creado Satisfactoriamente');
        return Redirect::route("estados.index");////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('estados.ver', compact('estado'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estados.editar', compact('estado'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        
        $estado->nombre=$request->nombre;
        $estado->save();
        alert()->success('Exito','Estado Actualiado Satisfactoriamente');
        return Redirect::route("estados.index");///
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //
    }

    public function cambiarEst(Estado $estado)
    {
        if($estado->estado == 1)
        {
            $est = Estado::where('id',$estado->id)->first();
            $est->update(array('estado' => 0));
            alert()->success('Exito','Estado desactivado');

        }
        elseif($estado->estado == 0)
        {
            $est = Estado::where('id',$estado->id)->first();
            $est->update(array('estado' => 1));
            alert()->success('Exito','Estado desactivado');
        }
        return back();
}
}
