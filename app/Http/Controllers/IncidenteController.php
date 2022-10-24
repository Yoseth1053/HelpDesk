<?php

namespace App\Http\Controllers;

use App\Mail\Incidentes;
use App\Models\Ambiente;
use App\Models\Cargo;
use App\Models\Incidente;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        // $data = [];
        // $emailPara = 'ywmateus@misena.edu.co';
        // $emailde = 'ywmateus@misena.edu.co';
        // $emailNombre = 'Ejemeplo';


        // Mail::to('yoseth.m97@gmail.com')->send(new Incidentes());
        // Mail::send('mail.incidentes',$data,function($message) use ($emailPara,$emailNombre,$emailde){

        //     $message->subject($emailNombre); 
        //     $message->from($emailde); 
        //     $message->to($emailPara); 
        // });

        // dd('exito');
        $incidente = new Incidente();
        $incidente->fecha = $request->fecha;
        $incidente->hora = $request->hora;
        $incidente->idUsuario = Auth::user()->id;
        $incidente->ambiente_id = $request->ambiente;
        $incidente->descripcion = $request->descripcion;
        $incidente->estado_id = 1;
        // $input = $request->all();
        // $incidente->fill($input);
        $incidente->save();
        alert()->success('Exito','Su Numero de ticket para consulta es: '.$incidente->id);


        if(Auth::user()->idCargo == 1){
            return Redirect::route("incidentes.index");//
        }
        else{
            return view('dashboard');
        }

    }

    public function solucion(Incidente $incidente)
    {
        $fecha = Carbon::now()->format('d-m-Y');
        $fecha = date('Y-m-d', strtotime($fecha));
        $hora = Carbon::now()->format('H:i:s');
        $usuario = User::where('id',$incidente->idUsuario)->pluck('nombres')->first();
        $idCargo = User::where('id',$incidente->idUsuario)->pluck('idCargo')->first();
        $cargo = Cargo::where('id',$idCargo)->pluck('nombre')->first();
        // $hora = Carbon::now()->format('H:i:s');
        return view('incidentes.solucion', compact('incidente','fecha','hora','usuario','cargo'));//
    }

    public function solucionStore(Request $request, Incidente $incidente)
    {
            $incidente->fechaSolucion = $request->fechaSol; 
            $incidente->horaSolucion = $request->horaSol;
            $incidente->solucionImplementada = $request->solucionImplementada;
            $incidente->estado_id = 3;
            $incidente->save();   

            alert()->success('Exito','Incidencia N°: '.$incidente->id.' Solucionada !');
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
        $usuario = User::where('id',$incidente->idUsuario)->pluck('nombres')->first();
        $idCargo = User::where('id',$incidente->idUsuario)->pluck('idCargo')->first();
        $cargo = Cargo::where('id',$idCargo)->pluck('nombre')->first();
        return view('incidentes.ver', compact('incidente','usuario','cargo'));//
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
        $usuario = User::where('id',$incidente->idUsuario)->pluck('nombres')->first();
        $idCargo = User::where('id',$incidente->idUsuario)->pluck('idCargo')->first();
        $cargo = Cargo::where('id',$idCargo)->pluck('nombre')->first();
        return view('incidentes.agenda', compact('incidente','fecha','hora','usuario','cargo'));//
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
        
            $incidente->fechaRespuesta = $request->fechaRespuesta; 
            $incidente->horaRespuesta = $request->horaRespuesta;
            $incidente->fechaProg = $request->fechaProg;
            $incidente->horaProg = $request->horaProg;
            $incidente->observacion = $request->observacion;
            $incidente->estado_id = 2;
            $incidente->save();        
            alert()->success('Exito','Incidencia N°: '.$incidente->id.' Agendada !');

        return Redirect::route("incidentes.index");//
    }

    public function consulta()
    {
        
        return view('consulta');//
    }

    public function procesar(Request $request)
    {
        $incidente = Incidente::where('id',$request->num)->first();
        // dd($incidente);
        if($incidente == null)
        {
            alert()->error('Error','Ingrese un N° Ticket Valido!');
            return Redirect::route("consulta");
        }
        $usuario = User::where('id',$incidente->idUsuario)->pluck('nombres')->first();
        $idCargo = User::where('id',$incidente->idUsuario)->pluck('idCargo')->first();
        $cargo = Cargo::where('id',$idCargo)->pluck('nombre')->first();
        return view('consultaVer', compact('incidente','usuario','cargo'));

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
