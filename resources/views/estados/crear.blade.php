@include('layouts.app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('estados.store') }}" method="post">
                @csrf
                    <br>
                    <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
                      <h1 style="text-align: center;"><i class="fas fa-swatchbook"></i><b> <font face="nirvana">Crear Estado</font></b> </h1>
                    </div>
                    <br>

                    <div class="card-body" style="background-color: #CCCCCC;">

                      <div class="row" style="justify-content: center;">

                        <div class="col-3">
                          <div class="form-group" style="text-align: center;">
                            <label for="" ><b>Nombre</b> </label>
                            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese Un Nombre" required>
                          </div>
                        </div>

                        <hr>
                        <br>
                        <div class="row" style="justify-content: center;">
                          <div class="col-3" style="text-align: center;" >
                            <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white"  class="btn"> Volver</button> </a>
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