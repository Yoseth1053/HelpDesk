@include('layouts.app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('inventarios.update', $inventario) }}" method="post">
                @method('PUT') {{-- Se utiliza para cargar el metodo update --}}

                @csrf
                    <br>
                    <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
                      <h1 style="text-align: center;"><i class="fas fa-file-alt"></i><b> <font face="nirvana">Editar Inventario</font></b> </h1>
                    </div>
                    <br>

                    <div class="card-body" style="background-color: #CCCCCC;">

                      <div class="row" style="justify-content: center;">

                        <div class="col-3">
                          <div class="form-group " style="text-align: center;">
                            <label  for="" ><b>Ambiente </b> </label>
                            <select class="form-control"  name="ambiente_id" id="ambiente_id">
                              @foreach($ambientes as $amb)
                              <option value="{{$amb->id}}"@if ($inventario->ambiente_id == $amb->id) selected @endif>{{$amb->nombre}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group" style="text-align: center;">
                            <label for="" ><b>Elemento</b> </label>
                            <select class="form-control" name="elemento_id" id="elemento_id">
                              @foreach($elementos as $elm)
                              <option  value="{{$elm->id}}" @if ($inventario->elemento_id == $elm->id) selected @endif>{{$elm->nombre}}</option>
                              @endforeach
                            </select>                          
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group " style="text-align: center;">
                            <label  for="" ><b>Cantidad </b> </label>
                            <input type="number" class="form-control" rows="3" id="cantidad" name="cantidad" value="{{$inventario->cantidad}}">
                          </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row" style="justify-content: center;">
                          <div class="col-3" style="text-align: center;" >
                            <a href="{{ route('inventarios.index') }}" style="background-color: #BC2B2B; color:white"  class="btn"> Volver</button> </a>
                          </div>

                          <div class="col-3" style="text-align: center;" >
                          <a ><button style="background-color:#33A2C5; color : white;" type="submit" class="btn btn"> Actualizar</button></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                </form>
 
            </div>
        </div>
    </div>
@include('layouts.footer')