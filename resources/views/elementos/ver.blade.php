<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Elemento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                <div class = "block">

                    <x-jet-label for="id" value="{{ __('Id Elemento')}}"/>
                    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $elemento->id)" required disabled /> 
                    <x-jet-label for="nombre" value="{{ __('Nombre Elemento')}}"/>
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $elemento->nombre)" required disabled />
                                     
                </div>
            </div>
        </div>
    </div>
</x-app-layout>