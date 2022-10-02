@include('layouts.app')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('SolucionStore',$incidente) }}" method="post">
                @method('PUT') {{-- Se utiliza para cargar el metodo update --}}
                @csrf
                <br>
                <div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
                    <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b>
                            <font face="nirvana">Solucionar Incidente</font>
                        </b> </h1>
                </div>
                <br>

                <div class="card-body" style="background-color: #CCCCCC;">

                @if($incidente->fechaProg != null)
                    <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
                        <h4 style="text-align: center;"><b>
                                <font face="nirvana">Agenda
                                    <a id="OcultarAgenda" class="btn btn-sm" style="display: none;"><i class="btn btn-sm fas fa-caret-up" style="background-color: #343a40; color: white;"></i></a>
                                    <a id="MostrarAgenda" class="btn btn-sm"><i class="btn btn-sm  fas fa-caret-down" style="background-color: #343a40; color: white;"></i></a>
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
                                    <th class="text-center">Fecha Solucion</th>
                                    <th class="text-center">Hora Solucion</th>
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
                       <br>
                    </div>
                    @endif

                    <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
                        <h4 style="text-align: center;"><b>
                                <font face="nirvana">Registrar Solucion
                                </font>
                            </b> </h4>
                    </div>
                    <br>

                    <div class="row" style="justify-content: center; text-align:center;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for=""><b>Fecha</b></label>
                                <input type="date" class="form-control" name="fechaSol" required>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for=""><b>Hora</b></label>
                                <input type="time" class="form-control" name="horaSol" required>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="justify-content: center; text-align:center;">
                        <div class="col-6">
                            <div class="form-group">
                                <label for=""><b>Solucion Implementada</b> </label>
                                <textarea rows="4" name="solucionImplementada" class="form-control" required></textarea>
                            </div>
                        </div>

                    </div>


                    <hr>
                    
                    <div class="row" style="justify-content: center;">
                        <div class="col-3" style="text-align: center;">
                            <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                        </div>

                        <div class="col-3" style="text-align: center;">
                            <a><button style="background-color:#188755; color : white;" type="submit" class="btn btn"> Solucionar</button></a>
                        </div>
                    </div>
                    <br>
                   

                </div>
        </div>

        </form>

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
@include('layouts.footer')