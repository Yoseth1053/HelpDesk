@include('layouts.app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('incidentes.store') }}" method="post">
                @csrf
                    <br>
                    <div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
                      <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b> <font face="nirvana">Reportar Incidente</font></b> </h1>
                    </div>
                    <br>

                    <div class="card-body" style="background-color: #CCCCCC;">

                    <div class="row" style="justify-content: center; text-align:center;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="" >Fecha</label>
                                <input type="date" value="<?php echo $fecha?>" class="form-control" name="fecha">
                                <!-- <input type="date" value="<?php echo date('Y-m-d', strtotime($fecha)) ?>" class="form-control" name="fecha"> -->
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Hora</label>
                                <input type="time" value="<?php echo $hora?>" class="form-control" name="hora">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="justify-content: center; text-align:center;">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="ambiente_id">Ambiente</label>
                                <select name="ambiente" class="form-control" required>
                                    <option value="" selected>-- Seleccionar --</option>
                                    @foreach($ambientes as $ambiente)
                                    <option value="{{$ambiente->id}}"> {{$ambiente->nombre}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" style="justify-content: center;">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="descripcion">Descripción Del Incidente</label>
                                    <input type="textArea" class="form-control" name="descripcion" required>
                                </div>
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
                            <a ><button style="background-color:#E8700B; color : white;" type="submit" class="btn btn"> Reportar</button></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                </form>
 
            </div>
        </div>
    </div>
@include('layouts.footer')