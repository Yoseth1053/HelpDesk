@csrf
<div class="block">
    
    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $estado->nombre)" required autofocus />
    <x-jet-label for="descripcion" value="{{ __('Descripcion') }}" />
    <x-jet-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion', $estado->descripcion)" required autofocus />
         
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
            <a href="{{ route('estados.create') }}">
                <x-jet-button type="submit">
                    Guardar
                </x-jet-button>
            </a>
        </div>
    </div>
</div>