@include('layouts.app2')
<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Estado') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                <div class = "block">
                    <x-jet-label for="id" value="{{ __('Id Estado')}}"/>
                    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $ambiente->id)" required disabled /> 
                    <x-jet-label for="nombre" value="{{ __('Nombre Estado')}}"/>
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $ambiente->nombre)" required disabled />
                    <x-jet-label for="ubicacion" value="{{ __('Ubicacion Estado')}}"/>
                    <x-jet-input id="ubicacion" class="block mt-1 w-full" type="text" name="ubicacion" :value="old('ubicacion', $ambiente->ubicacion)" required disabled />          
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
