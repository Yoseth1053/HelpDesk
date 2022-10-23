@include('layouts.app')
<br>
    <div class="card-header" style="justify-content: center; background-color:#188755; color:white;">
        <h1 style="text-align: center;"><i class="fas fa-landmark"></i><b>
                <font face="nirvana">Informacion Del Ambiente</font>
            </b> </h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2">
    
            </div>
        </div>
    
        <div class="card-body" style="background-color: #CCCCCC;">
            <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr style="background-color: aqua;">
                        <th class="text-center">Id</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Ubicacion</th>
                        <!-- <th>Estado</th> -->
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <td>{{$ambiente->id}}</td>
                    <td>{{$ambiente->nombre}}</td>
                    <td>{{$ambiente->ubicacion}}</td>
                    @if($ambiente->estado == 1)
                    <td style="color: green;"><b>Activo</b> </td>
                    @else
                    <td style="color: #BC2B2B;"><b>Inactivo</b> </td>
                    @endif
    
                </tbody>
            </table>
            <br>
    
            <div class="row" style="justify-content: center;">
                <div class="col-3" style="text-align: center;">
                    <a href="{{ route('ambientes.index') }}" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                </div>

                <div class="col-3" style="text-align: center;">
                <a href="{{ route('ambientes.edit', $ambiente) }}" class="btn btn-primary"> Actualizar</button> </a>
                </div>
            </div>
            
    
        </div>
    
    
    </div>

</div>
@include('layouts.footer')