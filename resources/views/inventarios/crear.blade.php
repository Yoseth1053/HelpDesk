@include('layouts.app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('inventarios.store') }}" method="post">
                @csrf
                    <br>
                    <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
                      <h1 style="text-align: center;"><i class="fas fa-file-alt"></i><b> <font face="nirvana">Crear Inventario</font></b> </h1>
                    </div>
                    <br>

                    <div class="card-body" style="background-color: #CCCCCC;">

                      <div class="row" style="justify-content: center;">

                        <div class="col-3">
                          <div class="form-group" style="text-align: center;">
                            <label for="" ><b>Elemento</b> </label>
                            <select class="form-control" name="elemento_id" id="elemento_id">
                              @foreach($elementos as $elm)
                              <option  value="{{$elm->id}}">{{$elm->nombre}}</option>
                              @endforeach
                            </select>                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group " style="text-align: center;">
                            <label  for="" ><b>Ambiente </b> </label>
                            <select class="form-control"  name="ambiente_id" id="ambiente_id">
                              @foreach($ambientes as $amb)
                              <option value="{{$amb->id}}">{{$amb->nombre}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group " style="text-align: center;">
                            <label  for="" ><b>Cantidad </b> </label>
                            <input type="number" class="form-control" rows="3" id="cantidad" name="cantidad">
                          </div>
                        </div>


                        <hr>
                        <br>
                        <div class="row" style="justify-content: center;">
                          <div class="col-3" style="text-align: center;" >
                            <a href="{{ route('inventarios.index') }}" style="background-color: #BC2B2B; color:white"  class="btn"> Volver</button> </a>
                          </div>

                          <div class="col-3" style="text-align: center;" >
                            <a ><button style="background-color:#33A2C5; color : white;" type="submit" class="btn btn"> Guardar</button></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                </form>
 
            </div>
        </div>
    </div>
@include('layouts.footer')