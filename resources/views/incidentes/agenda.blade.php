@include('layouts.app')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('incidentes.update',$incidente) }}" method="post">
                @method('PUT') {{-- Se utiliza para cargar el metodo update --}}
                @csrf
                <br>
                <div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
                    <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b>
                            <font face="nirvana">Agendar Incidente</font>
                        </b> </h1>
                </div>
                <br>

                <div class="card-body" style="background-color: #CCCCCC;">

                    <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
                        <h4 style="text-align: center;"><b>
                                <font face="nirvana">Informacion
                                    <a id="OcultarInfo" class="btn btn-sm" style="display: none;"><i class="btn btn-sm fas fa-caret-up" style="background-color: #343a40; color: white;"></i></a>
                                    <a id="MostrarInfo" class="btn btn-sm"><i class="btn btn-sm  fas fa-caret-down" style="background-color: #343a40; color: white;"></i></a>
                                </font>
                            </b> </h4>
                    </div>
                    <br>
                    <!-- informacion -->
                    <div id="informacion" style="display: none;">
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
                        <table class="table table-striped table-light" cellspacing="0" width="100%">
                            <thead class="thead-dark">
                                <tr style="background-color: aqua;">
                                    <th class="text-center">Fecha Reporte</th>
                                    <th class="text-center">Hora Reporte</th>
                                    <th class="text-center">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <td><b>{{$incidente->fecha}}</b></td>
                                <td><b>{{$incidente->hora}}</b></td>
                                @if($incidente->estado->nombre == 'Solicitado')
                                <td style="color: #BC2B2B;"><b>{{$incidente->estado->nombre}}</b> </td>
                                @elseif($incidente->estado->nombre == 'Agendado')
                                <td style="color: #0A8BAE;"><b>{{$incidente->estado->nombre}}</b> </td>
                                @elseif($incidente->estado->nombre == 'Solucionado')
                                <td style="color: green;"><b>{{$incidente->estado->nombre}}</b> </td>
                                @endif
                            </tbody>
                            <thead class="thead-dark">
                                <tr style="background-color: aqua;">
                                    <th colspan="3" class="text-center">Descripcion</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <td colspan="3"><b>{{$incidente->descripcion}}</b></td>
                            </tbody>
                        </table>
                    </div>
                    <!-- informacion -->

                    <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
                        <h4 style="text-align: center;"><b>
                                <font face="nirvana">Registrar Agenda
                                </font>
                            </b> </h4>
                    </div>

                    <div class="row" style="justify-content: center;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <input type="date" value="<?php echo $fecha ?>" class="form-control" name="fechaRespuesta" readonly>
                                <!-- <input type="date" value="<?php echo date('Y-m-d', strtotime($fecha)) ?>" class="form-control" name="fecha"> -->
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Hora</label>
                                <input type="time" value="<?php echo $hora ?>" class="form-control" name="horaRespuesta" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="justify-content: center;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Fecha Agenda </label>
                                <input type="date" class="form-control" name="fechaProg" required>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Hora Agenda</label>
                                <input type="time" class="form-control" name="horaProg" required>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="justify-content: center;">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Observacion</label>
                                <input type="text" class="form-control" name="observacion" required>
                            </div>
                        </div>

                    </div>


                    <hr>
                    <br>
                    <div class="row" style="justify-content: center;">
                        <div class="col-3" style="text-align: center;">
                            <a href="{{ route('incidentes.index') }}" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                        </div>

                        <div class="col-3" style="text-align: center;">
                            <a><button style="background-color:#33A2C5; color : white;" type="submit" class="btn btn"> Agendar</button></a>
                        </div>
                    </div>

                </div>
        </div>

        </form>

    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $('#MostrarInfo').click(function() {
        $('#informacion').show(300);
        $('#OcultarInfo').show();
        $('#MostrarInfo').hide();
    });
    $('#OcultarInfo').click(function() {
        $('#informacion').hide(300);
        $('#MostrarInfo').show();
        $('#OcultarInfo').hide();
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
@include('layouts.footer')