@include('layouts.app')
<br>
<div class="card-header" style="justify-content: center; background-color:#188755; color:white;">
                      <h1 style="text-align: center;"><i class="fas fa-landmark"></i><b> <font face="nirvana">Ambientes</font></b> </h1>
                    </div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-2">
            <div class="flex justify-end">
            <a href="{{ route('ambientes.create') }}" class="btn btn-success"> Nuevo Ambiente</button> </a>
                <!-- <a href="">
                    <button>Crear</button>
                </a> -->
            </div>
        </div>
    </div>
    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <!-- <th>Estado</th> -->
                    <th>Opciones</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($ambientes as $ambiente)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{$ambiente->id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$ambiente->nombre}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$ambiente->ubicacion}}
                    </td>
                    <td>
                            <div class="dropdown">
                            <button type="submit" class="dropbtn"><i class="fas fa-list-alt"></i><b>   Opciones</b></button>  
                                <div class="dropdown-content">
                                    <a class="dropdown-item" href="{{route('ambientes.show',$ambiente)}}" style="color:green" ><i class="fas fa-binoculars" style="color:green"></i><b> Ver</b> </a>
                                    <a class="dropdown-item" href="{{route('ambientes.show',$ambiente)}}" style="color:#157ECE"><i class="fas fa-edit" style="color:#157ECE"></i><b> Editar</b></a>
                                    @if ($ambiente->estado == 1)
                                    <a class="dropdown-item" href="{{route('ambientes.show',$ambiente)}}" style="color:#C21F1F"><i class="fas fa-skull-crossbones" style="color:#C21F1F"></i><b> Desactivar</b></a>
                                    @else
                                    <a class="dropdown-item" href="{{route('ambientes.show',$ambiente)}}"><i class="fas fa-list-alt"></i><b> Activar</b></a>
                                    @endif

                                </div>
                            </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
            
        </table>
    </div>
    
</div>
@include('layouts.footer')