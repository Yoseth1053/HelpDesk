
<header>
<!-- importamos estilos -->
    <link href="{{ asset('css/styleVerificPass.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styleLogin.css') }}" rel="stylesheet" />
</header>
<x-guest-layout>


<form method="POST" action="{{ route('auth.store') }}">
            @csrf
<h1></h1>
  <div align="center"><img style="align-items: center;" src="{{ asset('img/logo.png') }}" width="200" height="120"></div>
  <div class="inset">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <p>
    <label for="nombres" style="color: white;">Nombres</label>
    <input type="text" name="nombres" id="nombres" required>
  </p>
  <p>
    <label for="email" style="color: white;">Correo</label>
    <input type="text" name="email" id="email" required>
  </p>
  <p>
    <label for="password" style="color: white;">Contraseña</label>
    <input type="password" name="password" id="password" required>
  </p>
  <p>
    <label for="password" style="color: white;">Confirmar Contraseña</label>
    <input type="password" name="passwordConfirm" id="passwordConfirm" required>
  </p>


  <div class="row" style="justify-content: center;">
  <p class="p-container">
    <input type="submit" name="go" id="go" value="Registrarse">
  </p>
  <p class="p-container">
    <input onClick="history.go(-1);" type="submit" name="go" id="go" style="background-color: silver; color:black" value="Volver">
  </p>
  </div>
  
</form>
</x-guest-layout> 
<!-- js para la verificacion de las contraseñas -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/verificPassword.js') }}"></script>

