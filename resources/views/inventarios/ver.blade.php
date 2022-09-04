<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                <div class = "block">

                    <x-jet-label for="id" value="{{ __('#')}}"/>
                    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $inventarios->id)" required disabled /> 
                    <x-jet-label for="elemento_id" value="{{ __('Elemento')}}"/>
                    <x-jet-input id="elemento_id" class="block mt-1 w-full" type="text" name="elemento_id" :value="old('elemento_id', $inventarios->elemento_id->nombre)" required disabled />
                    <x-jet-label for="cantidad" value="{{ __('Cantidad')}}"/>
                    <x-jet-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" :value="old('cantidad', $inventarios->cantidad)" required disabled />
                    <x-jet-label for="id_ambiente" value="{{ __('Ambiente')}}"/>
                    <x-jet-input id="id_ambiente" class="block mt-1 w-full" type="text" name="id_ambiente" :value="old('id_ambiente', $inventarios->id_ambiente)" required disabled />
                                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>