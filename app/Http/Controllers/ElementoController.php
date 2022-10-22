<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elementos = Elemento::all();
        return view('elementos.index', compact('elementos'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elemento = new Elemento();
        return view('elementos.crear', compact('elemento'));////
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $elemento = new Elemento();
        $elemento -> nombre = $request->nombre;
        $elemento -> estado = 1;
        $elemento->save();
        session()->flash("flash.banner","Elemento creado satisfactoriamente");
        return Redirect::route("elementos.index");//////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function show(Elemento $elemento)
    {
        return view('elementos.ver', compact('elemento'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function edit(Elemento $elemento)
    {
        return view('elementos.editar', compact('elemento'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Elemento $elemento)
    {
        $elemento->nombre=$request->nombre;
        $elemento->save();
        session()->flash("flash.banner","Elemento creado satisfactoriamente");
        return Redirect::route("elementos.index");//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elemento $elemento)
    {
        //
    }

    public function cambiarEst(Elemento $elemento)
    {
        if($elemento->estado == 1)
        {
            $elm = Elemento::where('id',$elemento->id)->first();
            $elm->update(array('estado' => 0));
            alert()->success('Exito','Elemento desactivado');

        }
        elseif($elemento->estado == 0)
        {
            $elm = Elemento::where('id',$elemento->id)->first();
            $elm->update(array('estado' => 1));
            alert()->success('Exito','Elemento desactivado');
        }
        return back();
    }
}
