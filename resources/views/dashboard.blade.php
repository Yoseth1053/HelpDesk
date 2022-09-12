@include('layouts.app')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <br>
    <div class="card-header" style="background-color: black;">
        <h1 style="text-align: center;">Bienvenido A HelpDesk</h1>
    </div>

@include('layouts.footer')
