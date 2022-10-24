@include('layouts.app')

<div class="py-12">
  <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <form action="{{ route('usuarios.store') }}" method="post">
        @csrf
        <br>
        <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
          <h1 style="text-align: center;"><i class="far fa-address-book"></i><b>
              <font face="nirvana">Crear Usuario</font>
            </b> </h1>
        </div>
        <br>
        
        
        <div class="card-body" style="background-color: #CCCCCC;">
          
          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Nombres </b> <b style="color: red;">(*)</b></label>
                <input type="text" class="form-control" rows="3" id="nombres" name="nombres" required>
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Apellidos </b> </label>
                <input type="text" class="form-control" rows="3" id="apellidos" name="apellidos">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Documento </b> <b style="color: red;">(*)</b></label>
                <input type="text" class="form-control" rows="3" id="documento" name="documento" required>
              </div>
            </div>
          </div>

          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Dirección </b>  </label>
                <input type="text" class="form-control" rows="3" id="direccion" name="direccion">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Teléfono </b> <b style="color: red;">(*)</b></label>
                <input type="text" class="form-control" rows="3" id="telefono" name="telefono" required>
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Cargo </b> <b style="color: red;">(*)</b></label>
                <select class="form-control" name="idCargo" id="idCargo" required>
                <option value="">-- Seleccionar --</option>

                  @foreach($cargos as $cargo)
                  @if($cargo->estado == 1)
                  <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Email </b> <b style="color: red;">(*)</b></label>
                <input type="text" class="form-control" rows="3" id="email" name="email" required>
              </div>
            </div>
            
            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Contraseña </b> <b style="color: red;">(*)</b></label>
                <input type="password" class="form-control" rows="3" id="password" name="password" required>
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Confirmar Contraseña </b> <b style="color: red;">(*)</b></label>
                <input type="password" class="form-control" rows="3" id="passwordConfirm" name="passwordConfirm" required>
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
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
@include('layouts.footer')