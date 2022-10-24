@include('layouts.app')

<div class="py-12">
  <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <form action="{{ route('usuarios.update', $usuario) }}" method="post" enctype="multipart/form-data">
        @method('PUT') {{-- Se utiliza para cargar el metodo update --}}

        @csrf
        <br>
        <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
          <h1 style="text-align: center;"><i class="far fa-address-book"></i><b>
              <font face="nirvana">Editar Usuario</font>
            </b> </h1>
        </div>
        <br>

        <div class="card-body" style="background-color: #CCCCCC;">
          <div class="row" style="justify-content: center;">


            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Foto de perfil </b></label>
                @if($usuario->profile_photo_path != null)
                <a class="navbar-brand ps-3"><img style="align-items: center;" src="{{ asset('img/usuarios/'.$usuario->profile_photo_path) }}" width="120" height="120">
                    </a>
                @else
                    <a class="navbar-brand ps-3"><img style="align-items: center;" src="{{ asset('img/usuarios/sinFoto.jpg') }}" width="120" height="120">
                    </a>
                @endif
                <input type="file" name="adjunto[]" value="" multiple>
              </div>
            </div>

          </div>

          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Nombres </b> </label>
                <input type="text" value="{{$usuario->nombres}}" class="form-control" rows="3" id="nombres" name="nombres" required>
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Apellidos </b> </label>
                <input type="text" value="{{$usuario->apellidos}}" class="form-control" rows="3" id="apellidos" name="apellidos">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Documento </b> </label>
                <input type="text" value="{{$usuario->documento}}" class="form-control" rows="3" id="documento" name="documento">
              </div>
            </div>
          </div>

          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Dirección </b> </label>
                <input type="text" value="{{$usuario->direccion}}" class="form-control" rows="3" id="direccion" name="direccion">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Teléfono </b> </label>
                <input type="text" value="{{$usuario->telefono}}" class="form-control" rows="3" id="telefono" name="telefono">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Cargo </b> </label>
                <select class="form-control" name="idCargo" id="idCargo" required>
                  <option value="">-- Seleccionar --</option>

                  @foreach($cargos as $cargo)
                  @if($cargo->estado == 1)
                  <option value="{{$cargo->id}}" @if($cargo->id == $usuario->idCargo) selected @endif >{{$cargo->nombre}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
          </div>


          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Email </b> </label>
                <input type="text" value="{{$usuario->email}}" class="form-control" rows="3" id="email" name="email" required>
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Contraseña </b> </label>
                <input type="password" class="form-control" rows="3" id="password" name="password" >
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Confirmar Contraseña </b></label>
                <input type="password" class="form-control" rows="3" id="passwordConfirm" name="passwordConfirm" >
              </div>
            </div>

          </div>


          <hr>
          <br>
          <div class="row" style="justify-content: center;">
            <div class="col-3" style="text-align: center;">
              <a href="{{ route('usuarios.index') }}" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
            </div>

            <div class="col-3" style="text-align: center;">
              <a><button style="background-color:#33A2C5; color : white;" type="submit" class="btn btn"> Guardar</button></a>
            </div>
          </div>

        </div>
    </div>

    </form>

  </div>
</div>
</div>
@include('layouts.footer')