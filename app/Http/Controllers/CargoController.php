<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargo = new Cargo();
        return view('cargos.crear', compact('cargo'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = new Cargo();
        $cargo->nombre=$request->nombre;
        $cargo->descripcion = $request->descripcion;
        $cargo->estado = 1;
        $cargo->save();
        alert()->success('Exito','Cargo actualizado satisfactoriamente');
        return Redirect::route("cargos.index");////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        return view('cargos.ver', compact('cargo'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos.editar', compact('cargo'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        
        $cargo->descripcion = $request->descripcion;
        $cargo->nombre=$request->nombre;
        $cargo->save();
        alert()->success('Exito','Cargo actualizado satisfactoriamente');
        return Redirect::route("cargos.index");///
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        dd($cargo);//
    }

    public function cambiarEst(Cargo $cargo)
    {
        // dd($cargo->estado,$cargo->id);


        if($cargo->estado == 1)
        {
            $car = Cargo::where('id',$cargo->id)->first();
            $car->update(array('estado' => 0));
            alert()->success('Exito','Cargo desactivado');

        }
        elseif($cargo->estado == 0)
        {
            $car = Cargo::where('id',$cargo->id)->first();
            $car->update(array('estado' => 1));
            alert()->success('Exito','Cargo desactivado');
        }
        return back();
    }
}
