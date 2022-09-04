@csrf
<div class="block">
    
    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $ambiente->nombre)" required autofocus />
    <x-jet-label for="ubicacion" value="{{ __('Ubicacion') }}" />
    <x-jet-input id="ubicacion" class="block mt-1 w-full" type="text" name="ubicacion" :value="old('ubicacion', $ambiente->ubicacion)" required autofocus />
         
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
            <a href="{{ route('ambientes.create') }}">
                <x-jet-button type="submit">
                    Guardar
                </x-jet-button>
            </a>
        </div>
    </div>
</div>