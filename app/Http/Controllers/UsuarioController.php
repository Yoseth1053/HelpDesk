<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        $usuario = new User();
        return view('usuarios.crear', compact('usuario', 'cargos'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->documento = $request->documento;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->idCargo = $request->idCargo;
        $usuario->estado = 1;
        if($request->password == $request->passwordConfirm)
        {
          $usuario->password = bcrypt($request->password);
        }
        else
        {
            alert()->error('Alerta','Las contraseñas no coinciden');
            return back();///
        }
        $usuario->save();
        alert()->success('Exito','Usuario Creado Satisfactoriamente');
        return Redirect::route("usuarios.index");////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        $cargo = Cargo::where('id',$usuario->idCargo)->pluck('nombre')->first();
        return view('usuarios.ver', compact('usuario','cargo'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        $cargos = Cargo::all();

        return view('usuarios.editar', compact('usuario','cargos'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        if($request->hasFile('adjunto')){
            $adjuntos = $request->adjunto;

            foreach($adjuntos as $adjunto)
            {
                
                
                $path = Storage::disk('usuarios')->putFileAs('',$adjunto,$usuario->id.'-'.$usuario->nombres.'.jpg');
                $usuario->profile_photo_path = $usuario->id.'-'.$usuario->nombres.'.jpg';
            } 
        }
        
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->documento = $request->documento;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->idCargo = $request->idCargo;
        if($request->password != null || $request->passwordConfirm != null)
        {
            if($request->password == $request->passwordConfirm)
            {
              $usuario->password = bcrypt($request->password);
            }
            else
            {
                $usuario->save();
                alert()->error('Alerta','Las contraseñas no coinciden');
                return back();///
            }
        }
        $usuario->save();
        alert()->success('Exito','Usuario Actualizado Satisfactoriamente');
        return back();///
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        //
    }
    public function cambiarEst(User $user)
    {
        if($user->estado == 1)
        {
            $us = User::where('id',$user->id)->first();
            $us->update(array('estado' => 0));
            alert()->success('Exito','Usuario Desactivado Satisfactoriamente');

        }
        elseif($user->estado == 0)
        {
            $us = User::where('id',$user->id)->first();
            $us->update(array('estado' => 1));
            alert()->success('Exito','Usuario Activado Satisfactoriamente');
        }
        return back();
}
}
