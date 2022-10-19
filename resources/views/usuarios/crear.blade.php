@include('layouts.app')

<div class="py-12">
  <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <form action="{{ route('usuarios.store') }}" method="post">
        @csrf
        <br>
        <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
          <h1 style="text-align: center;"><i class="fas fa-file-alt"></i><b>
              <font face="nirvana">Crear Usuario</font>
            </b> </h1>
        </div>
        <br>

        <div class="card-body" style="background-color: #CCCCCC;">

          <div class="row" style="justify-content: center;">

            <div class="col-5">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Nombres </b> </label>
                <input type="text" class="form-control" rows="3" id="nombres" name="nombres">
              </div>
            </div>

            <div class="col-5">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Apellidos </b> </label>
                <input type="text" class="form-control" rows="3" id="apellidos" name="apellidos">
              </div>
            </div>
          </div>

          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Documento </b> </label>
                <input type="text" class="form-control" rows="3" id="nombres" name="nombres">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Teléfono </b> </label>
                <input type="text" class="form-control" rows="3" id="apellidos" name="apellidos">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Cargo </b> </label>
                <select class="form-control" name="cargo_id" id="cargo_id">
                  @foreach($cargos as $cargo)
                  <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row" style="justify-content: center;">

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Dirección </b> </label>
                <input type="text" class="form-control" rows="3" id="nombres" name="nombres">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Email </b> </label>
                <input type="text" class="form-control" rows="3" id="apellidos" name="apellidos">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group " style="text-align: center;">
                <label for=""><b>Contraseña </b> </label>
                <input type="text" class="form-control" rows="3" id="apellidos" name="apellidos">
              </div>
            </div>
          </div>




          <hr>
          <br>
          <div class="row" style="justify-content: center;">
            <div class="col-3" style="text-align: center;">
              <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
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