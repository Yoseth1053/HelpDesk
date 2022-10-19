@include('layouts.app')
<br>
<div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
    <h1 style="text-align: center;"><i class="far fa-address-book"></i><b>
            <font face="nirvana">Usuarios</font>
        </b> </h1>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-2">
            <div class="flex justify-end">
                <a style="color: white ; background-color:#33A2C5;" href="{{ route('usuarios.create') }}" class="btn"> Nuevo Usuario</button> </a>
                <!-- <a href="">
                    <button>Crear</button>
                </a> -->
            </div>
        </div>
    </div>

    <div class="card-body">

        <table id="myTable" class="display" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Cargo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th class="text-center">Id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Cargo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr class="border-b" style="text-align: center;">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{$usuario->id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$usuario->nombre}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$usuario->cargo}}
                    </td>
                    @if($usuario->estado == 1)
                    <td style="color: green;"><b>Activo</b> </td>
                    @else
                    <td style="color: #BC2B2B;"><b>Inactivo</b> </td>
                    @endif
                    
                    <td>
                        <div class="dropdown">
                            <button type="submit" class="dropbtn"><i class="fas fa-list-alt"></i><b> Opciones</b></button>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{route('usuarios.show',$usuario)}}" style="color:green"><i class="fas fa-binoculars" style="color:green"></i><b> Ver</b> </a>
                                <a class="dropdown-item" href="{{route('usuarios.edit',$usuario)}}" style="color:#157ECE"><i class="fas fa-edit" style="color:#157ECE"></i><b> Editar</b></a>
                                @if ($usuario->estado == 1)
                                <a class="dropdown-item" href="{{route('usuarios.show',$usuario)}}" style="color:#C21F1F"><i class="fas fa-skull-crossbones" style="color:#C21F1F"></i><b> Desactivar</b></a>
                                @else
                                <a class="dropdown-item" href="{{route('usuarios.show',$usuario)}}"><i class="fas fa-list-alt"></i><b> Activar</b></a>
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