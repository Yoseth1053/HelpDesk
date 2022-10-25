@component('mail::message')

<h2 style="text-align: center; color:black;">Nueva Novedad Registrada</h3>


@component('mail::panel')
    <h3 style="text-align: center;">Informacion General</h3>
    <span style="text-align: center;"> <strong> Reporta:</strong> {{$data['reporta']}}</span><br>
    <span style="text-align: center;"> <strong> Fecha: </strong> {{$data['fecha']}}</span><br>
    <span style="text-align: center;"> <strong> Hora: </strong>  {{$data['hora']}}</span><br>
    <span style="text-align: center;"> <strong> Ambiente: </strong>  {{$data['ambiente']}}</span><br>
    <span style="text-align: center;"> <strong> N° Ticket: </strong>  {{$data['ticket']}}</span><br>
    <br>
    <span style="text-align: center;">
        <strong> Descripcion de la novedad: </strong>  {{$data['descripcion']}}
    </span>
@endcomponent

@component('mail::button', ['url' => 'http://127.0.0.1:8000/dashboard'])
Ir A HelpDesk
@endcomponent

Gracias, Administrador<br>
{{ config('app.name').'.'}}

<br>
@endcomponent
