@include('layouts.app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('ambientes.update', $ambiente) }}" method="post">
                @method('PUT') {{-- Se utiliza para cargar el metodo update --}}

                @csrf
                    <br>
                    <div class="card-header" style="justify-content: center; background-color:#188755; color:white;">
                      <h1 style="text-align: center;"><i class="fas fa-landmark"></i><b> <font face="nirvana">Editar Ambiente</font></b> </h1>
                    </div>
                    <br>

                    <div class="card-body" style="background-color: #CCCCCC;">

                      <div class="row" style="justify-content: center;">

                        <div class="col-3">
                          <div class="form-group" style="text-align: center;">
                            <label for="nombre" ><b>Nombre</b> </label>
                            <input class="form-control" value="{{$ambiente->nombre}}" type="text" name="nombre" id="nombre" placeholder="Ingrese Un Nombre" required>
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group " style="text-align: center;">
                            <label  for="" ><b>Ubicacion </b> </label>
                            <select class="form-control" name="ubicacion" id="ubicacion" required>
                              <option value="Bloque 1 Piso 1" @if($ambiente->ubicacion == 'Bloque 1 Piso 1') selected @endif >Bloque 1 Piso 1</option>
                              <option value="Bloque 1 Piso 2" @if($ambiente->ubicacion == 'Bloque 1 Piso 2') selected @endif >Bloque 1 Piso 2</option>
                              <option value="Bloque 1 Piso 3" @if($ambiente->ubicacion == 'Bloque 1 Piso 3') selected @endif >Bloque 1 Piso 3</option>
                              <option value="Bloque 2 Piso 1" @if($ambiente->ubicacion == 'Bloque 2 Piso 1') selected @endif >Bloque 2 Piso 1</option>
                              <option value="Bloque 2 Piso 2" @if($ambiente->ubicacion == 'Bloque 2 Piso 2') selected @endif >Bloque 2 Piso 2</option>
                              <option value="Bloque 2 Piso 3" @if($ambiente->ubicacion == 'Bloque 2 Piso 3') selected @endif >Bloque 2 Piso 3</option>

                            </select>
                          </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row" style="justify-content: center;">
                          <div class="col-3" style="text-align: center;" >
                            <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white"  class="btn"> Volver</button> </a>
                          </div>

                          <div class="col-3" style="text-align: center;" >
                            <a ><button type="submit" class="btn btn-success"> Aceptar</button></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                </form>
 
            </div>
        </div>
    </div>
@include('layouts.footer')