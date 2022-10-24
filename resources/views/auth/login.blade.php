
<title>Login</title>
<link rel="icon" type="image/png" href="{{ asset('img/LogoSenaBlanco.png') }}">
<header>
<!-- importamos estilos -->
    <link href="{{ asset('css/styleVerificPass.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styleLogin.css') }}" rel="stylesheet" />
</header>
<main>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</main>
<x-guest-layout>
<form method="POST" action="{{ route('login') }}">
            @csrf
<h1></h1>
  <x-jet-validation-errors class="mb-4" />
  <div align="center"><img style="align-items: center;" src="{{ asset('img/logo.png') }}" width="200" height="120"></div>
  <div class="inset">
  <p>
    <label for="email" style="color: white;">Correo</label>
    <input type="text" name="email" id="email" required>
  </p>
  <p>
    <label for="password" style="color: white;">Contraseña</label>
    <input type="password" name="password" id="password" required>
  </p>
  <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600" style="color: white;">{{ __('Recordarme') }}</span>
                </label>
            </div>
  </div>
  <p class="p-container">
    <span>Restableser Contraseña</span>
    <input type="submit" name="go" id="go" value="Ingresar">
  </p>
</form>
</x-guest-layout> 




