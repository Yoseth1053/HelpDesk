@include('layouts.app')
<br>
    <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
        <h1 style="text-align: center;"><i class="fas fa-swatchbook"></i><b>
                <font face="nirvana">Informacion Del Estado</font>
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
                        <!-- <th>Estado</th> -->
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <td>{{$estado->id}}</td>
                    <td>{{$estado->nombre}}</td>
                    @if($estado->estado == 1)
                    <td style="color: green;"><b>Activo</b> </td>
                    @else
                    <td style="color: #BC2B2B;">Inactivo</td>
                    @endif
    
                </tbody>
            </table>
            <table id="" class="table table-striped table-light" cellspacing="0" width="100%">

                <thead class="thead-dark">
                    <tr style="background-color: aqua;">
                        <th class="text-center">Descripcion</th>
                        
                    </tr>
                </thead>
                <tbody class="text-center">
                    <td>{{$estado->descripcion}}</td>
                    
                </tbody>
            </table>
            <br>
    
            <div class="row" style="justify-content: center;">
                <div class="col-3" style="text-align: center;">
                    <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                </div>

                <div class="col-3" style="text-align: center;">
                <a href="{{ route('estados.edit', $estado) }}" class="btn" style="background-color:#33A2C5; color :white;"> Actualizar</button> </a>
                </div>
            </div>
            
    
        </div>
    
    
    </div>

</div>
@include('layouts.footer')