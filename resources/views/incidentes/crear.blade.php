<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Incidente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('incidentes.store') }}" method="post">
                @csrf
                    <div class="row" style="justify-content: center;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <input type="date" value="<?php echo $fecha?>" class="form-control" name="fecha">
                                <!-- <input type="date" value="<?php echo date('Y-m-d', strtotime($fecha)) ?>" class="form-control" name="fecha"> -->
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Hora</label>
                                <input type="time" value="<?php echo $hora?>" class="form-control" name="hora">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="justify-content: center;">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="ambiente_id">Ambiente</label>
                                <select name="ambiente" class="form-control">
                                    <option selected>-- Seleccionar --</option>
                                    @foreach($ambientes as $ambiente)
                                    <option value="{{$ambiente->id}}"> {{$ambiente->nombre}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" style="justify-content: center;">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="descripcion">Descripción Del Incidente</label>
                                    <input type="text" class="form-control" name="descripcion">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row" style="justify-content: center;">

                        <div class="col-2">
                        </div>
                        <div class="col-3">
                        <a href="{{ route('incidentes.store') }}">
                        <x-jet-button>Crear</x-jet-button>
                         </a>
                            
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>