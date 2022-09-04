@csrf
<div class="block">

<!-- select ambiente -->
    <x-jet-label for="ambiente" value="{{ __('Ambiente') }}" />
    <select
        class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        name="ambiente_id">
        <option selected>Selecciona un ambiente</option>
        @foreach ($ambientes as $ambiente)
            <option value="{{ $ambiente->id }}">{{ $ambiente->nombre }}</option>
        @endforeach
    </select>

<!-- slectd elemento -->
    <x-jet-label for="elemento" value="{{ __('Elemento') }}" />
    <select
        class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        name="elemento_id">
        <option selected>Selecciona un elemento</option>
        @foreach ($elementos as $elemento)
            <option value="{{ $elemento->id }}">{{ $elemento->nombre }}</option>
        @endforeach
    </select>

    
    <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" :value="old('cantidad', $inventario->cantidad)" required autofocus />
    

         
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