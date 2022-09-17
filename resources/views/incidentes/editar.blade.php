@include('layouts.app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('incidentes.update',$incidente) }}" method="post">
                @method('PUT') {{-- Se utiliza para cargar el metodo update --}}
                @csrf
                    <br>
                    <div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
                      <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b> <font face="nirvana">Agendar Incidente</font></b> </h1>
                    </div>
                    <br>

                    <div class="card-body" style="background-color: #CCCCCC;">

                    <div class="row" style="justify-content: center;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <input type="date" value="<?php echo $fecha?>" class="form-control" name="fechaRespuesta" readonly>
                                <!-- <input type="date" value="<?php echo date('Y-m-d', strtotime($fecha)) ?>" class="form-control" name="fecha"> -->
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Hora</label>
                                <input type="time" value="<?php echo $hora?>" class="form-control" name="horaRespuesta" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="justify-content: center;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Fecha Agenda </label>
                                <input type="date"  class="form-control" name="fechaProg" required>
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
                                <input type="text"  class="form-control" name="observacion" required>
                            </div>
                        </div>

                    </div>


                        <hr>
                        <br>
                        <div class="row" style="justify-content: center;">
                          <div class="col-3" style="text-align: center;" >
                            <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white"  class="btn"> Volver</button> </a>
                          </div>

                          <div class="col-3" style="text-align: center;" >
                            <a ><button style="background-color:#E8700B; color : white;" type="submit" class="btn btn"> Agendar</button></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                </form>
 
            </div>
        </div>
    </div>
    @include('layouts.footer')