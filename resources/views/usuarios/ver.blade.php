@include('layouts.app')
<br>
<div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
    <h1 style="text-align: center;"><i class="far fa-address-book"></i><b>
            <font face="nirvana">Informacion Del Usuario</font>
        </b> </h1>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-2">

        </div>
    </div>

    <div class="card-body" style="background-color: #CCCCCC;">
        <div style="justify-content: center; color:#33A2C5;">
            <h3 style="text-align: center;"><b>
                    <font face="nirvana">Informacion General</font>
                </b> </h3>
        </div>
        <div class="row" style="justify-content: center;">


            <div class="col-3">
                <div class="form-group " style="text-align: center;">
                @if($usuario->profile_photo_path != null)
                <a class="navbar-brand ps-3"><img style="align-items: center;" src="{{ asset('img/usuarios/'.$usuario->profile_photo_path) }}" width="120" height="120">
                    </a>
                @else
                    <a class="navbar-brand ps-3"><img style="align-items: center;" src="{{ asset('img/usuarios/sinFoto.jpg') }}" width="120" height="120">
                    </a>
                @endif
                </div>
            </div>

        </div>
        <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
            <thead style="color:BBC5C7">
                <tr style="background-color: aqua;">
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Documento</th>
                    <th class="text-center">Correo</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <td>{{$usuario->nombres}}</td>

                @if ($usuario->apellidos != null)
                  <td>{{$usuario->apellidos}}</td>
                @else
                  <td style="color: #BC2B2B"><b>No Disponible</b></td>
                @endif
                
                @if ($usuario->documento != null)
                  <td>{{$usuario->documento}}</td>
                @else
                  <td style="color: #BC2B2B"><b>No Disponible</b></td>
                @endif

                {{-- <td>{{$usuario->documento}}</td> --}}
                <td>{{$usuario->email}}</td>


            </tbody>

        </table>
        <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
            <thead style="color:BBC5C7">
                <tr style="background-color: aqua;">
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Cargo</th>
                    <th class="text-center">Estado</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($usuario->direccion != null)
                  <td>{{$usuario->direccion}}</td>
                @else
                  <td style="color: #BC2B2B"><b>No Disponible</b></td>
                @endif

                @if ($usuario->telefono != null)
                  <td>{{$usuario->telefono}}</td>
                @else
                  <td style="color: #BC2B2B"><b>No Disponible</b></td>
                @endif

                <td>{{$cargo}}</td>
                @if($usuario->estado == 1)
                <td style="color: green;"><b>Activo</b> </td>
                @else
                <td style="color: #BC2B2B;"><b>Inactivo</b></td>
                @endif
            </tbody>
        </table>
        
        <br>
        <div class="row" style="justify-content: center;">
            <div class="col-3" style="text-align: center;">
                <a href="{{ route('usuarios.index') }}" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
            </div>

            <div class="col-3" style="text-align: center;">
                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn" style="background-color: #33A2C5; color:white;"> Actualizar</button> </a>
            </div>
        </div>


    </div>


</div>

</div>
@include('layouts.footer')