@include('layouts.app')
<br>
    <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
        <h1 style="text-align: center;"><i class="fas fa-file-alt"></i><b>
                <font face="nirvana">Informacion Del Inventario</font>
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
                        <th class="text-center" colspan="2">Ambiente</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <td colspan="2">{{$ambiente->nombre}}</td>
                </tbody>
            </table>
            <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr style="background-color: aqua;">
                        <th class="text-center">Elemento</th>
                        <th class="text-center">Cantidad</th>
                    </tr>
                </thead>
                @foreach ($inventarios as $inventario)
                <tbody class="text-center">
                    <td>{{$inventario->elemento->nombre}}</td>
                    <td>{{$inventario->cantidad}}</td>
                </tbody>
                @endforeach
            </table>
            <br>
    
            <div class="row" style="justify-content: center;">
                <div class="col-3" style="text-align: center;">
                    <a href="{{ route('inventarios.index') }}" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                </div>

                <div class="col-3" style="text-align: center;">
                <a href="{{ route('inventarios.edit', $ambiente->id) }}" class="btn" style="background-color: #33A2C5; color:white;"> Actualizar</button> </a>
                </div>
            </div>
            
    
        </div>
    
    
    </div>

</div>
@include('layouts.footer')