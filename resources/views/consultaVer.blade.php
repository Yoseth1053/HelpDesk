<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Consulta</title>
    <link rel="icon" type="image/png" href="{{ asset('img/LogoSenaBlanco.png') }}">

    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <!-- <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" /> -->


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styleMenu.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <div class="card-body">
        <br>
        <div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
            <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b>
                    <font face="nirvana">Informacion Del Incidente</font>
                </b> </h1>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-2">

                </div>
            </div>

            <div class="card-body" style="background-color: #CCCCCC;">

                <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
                    <h4 style="text-align: center;"><b>
                            <font face="nirvana">Informacion General</font>
                        </b> </h4>
                </div>

                <br>
                <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                    <thead class="thead-dark">
                        <tr style="background-color: aqua;">
                            <th class="text-center">Reporta</th>
                            <th class="text-center">Cargo</th>

                            <!-- <th class="text-center">Estado</th> -->
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <td><b>{{$usuario}}</b></td>
                        <td><b>{{$cargo}}</b></td>

                    </tbody>
                </table>
                <br>
                <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                    <thead class="thead-dark">
                        <tr style="background-color: aqua;">
                            <th class="text-center">Ticket</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Hora</th>
                            <th class="text-center">Ambiente</th>
                            <th class="text-center">Estado</th>
                            <!-- <th class="text-center">Estado</th> -->
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <td><b>{{$incidente->id}}</b></td>
                        <td><b>{{$incidente->fecha}}</b></td>
                        <td><b>{{$incidente->hora}}</b></td>
                        <td><b>{{$incidente->ambiente->nombre}}</b></td>
                        @if($incidente->estado->nombre == 'Solicitado')
                        <td style="color: #BC2B2B;"><b>{{$incidente->estado->nombre}}</b> </td>
                        @elseif($incidente->estado->nombre == 'Agendado')
                        <td style="color: #0A8BAE;"><b>{{$incidente->estado->nombre}}</b> </td>
                        @elseif($incidente->estado->nombre == 'Solucionado')
                        <td style="color: green;"><b>{{$incidente->estado->nombre}}</b> </td>
                        @endif

                    </tbody>
                </table>
                <br>

                <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                    <thead class="thead-dark">
                        <tr style="background-color: aqua;">
                            <th class="text-center">Descripcion</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <td><b>{{$incidente->descripcion}}</b></td>
                    </tbody>
                </table>
                <br>
                @if($incidente->fechaRespuesta != null)

                <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
                    <h4 style="text-align: center;"><b>
                            <font face="nirvana">Agenda
                                <button id="OcultarAgenda" class="btn btn-sm" style="display: none;"><i class="btn btn-sm fas fa-caret-up" style="background-color: #343a40; color: white;"></i></button>
                                <button id="MostrarAgenda" class="btn btn-sm"><i class="btn btn-sm  fas fa-caret-down" style="background-color: #343a40; color: white;"></i></button>
                            </font>
                        </b> </h4>
                </div>
                <br>

                <div id="agenda" style="display: none;">
                    <table class="table table-striped table-light" cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr style="background-color: aqua;">


                                <th class="text-center">Fecha</th>
                                <th class="text-center">Hora</th>
                                <th class="text-center">Fecha Programada</th>
                                <th class="text-center">Hora Programada</th>
                                <!-- <th class="text-center">Estado</th> -->
                            </tr>
                        </thead>
                        <tbody class="text-center">

                            <td><b>{{$incidente->fechaRespuesta}}</b></td>
                            <td><b>{{$incidente->fechaProg}}</b></td>
                            <td><b>{{$incidente->horaProg}}</b></td>
                            <td><b>{{$incidente->horaRespuesta}}</b></td>

                        </tbody>
                    </table>
                    <table class="table table-striped table-light" cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr style="background-color: aqua;">
                                <th class="text-center">Observación</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <td><b>{{$incidente->observacion}}</b></td>
                        </tbody>
                    </table>

                </div>

                @endif

                @if($incidente->fechaSolucion != null)

                <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
                    <h4 style="text-align: center;"><b>
                            <font face="nirvana">Solucion
                                <button id="OcultarSol" class="btn btn-sm" style="display: none;"><i class="btn btn-sm fas fa-caret-up" style="background-color: #343a40; color: white;"></i></button>
                                <button id="MostrarSol" class="btn btn-sm"><i class="btn btn-sm  fas fa-caret-down" style="background-color: #343a40; color: white;"></i></button>
                            </font>
                        </b> </h4>
                </div>
                <br>

                <div id="solucion" style="display: none;">
                    <table class="table table-striped table-light" cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr style="background-color: aqua;">
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Hora</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <td><b>{{$incidente->fechaSolucion}}</b></td>
                            <td><b>{{$incidente->horaSolucion}}</b></td>
                        </tbody>
                    </table>
                    <table class="table table-striped table-light" cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr style="background-color: aqua;">
                                <th class="text-center">Solucion Implementada</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <td><b>{{$incidente->solucionImplementada}}</b></td>
                        </tbody>
                    </table>
                </div>
                @endif

                <div class="row" style="justify-content: center;">
                    <div class="col-3" style="text-align: center;">
                        <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                    </div>

                </div>

            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $('#MostrarAgenda').click(function() {
            $('#agenda').show(300);
            $('#OcultarAgenda').show();
            $('#MostrarAgenda').hide();
        });
        $('#OcultarAgenda').click(function() {
            $('#agenda').hide(300);
            $('#MostrarAgenda').show();
            $('#OcultarAgenda').hide();
        });
    </script>

    <script type="text/javascript">
        $('#MostrarSol').click(function() {
            $('#solucion').show(300);
            $('#OcultarSol').show();
            $('#MostrarSol').hide();
        });
        $('#OcultarSol').click(function() {
            $('#solucion').hide(300);
            $('#MostrarSol').show();
            $('#OcultarSol').hide();
        });
    </script>
    </body>
    </html>