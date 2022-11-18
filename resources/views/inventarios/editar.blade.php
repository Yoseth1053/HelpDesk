@include('layouts.app')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('inventarios.update', $ambiente->id) }}" method="post">
                @method('PUT') {{-- Se utiliza para cargar el metodo update --}}

                @csrf
                <br>
                <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
                    <h1 style="text-align: center;"><i class="fas fa-file-alt"></i><b>
                            <font face="nirvana">Editar Inventario</font>
                        </b> </h1>
                </div>
                <br>

                <div class="card-body" style="background-color: #CCCCCC;">

                    <div class="row" style="justify-content: center;">
                        <div class="col-3">
                            <div class="form-group " style="text-align: center;">
                                <label for=""><b>Ambiente </b> </label>
                                <input type="text" name="ambiente" id="" class="form-control"
                                    style="text-align: center;" readonly value="{{ $ambiente->nombre }}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="justify-content: center; text-align:center;">
                        <div class="col-3">
                            <label for="" style="text-align: center;"><b>Incluir Elementos </b> </label>
                        </div>
                    </div>
                    <div class="row" style="justify-content: center;">
                        <!-- <div class="col-8"> -->
                        <div class="col-8" style="overflow-y: auto; height :150px; width:50%;">
                            <table class="table table-striped">
                                <thead class="thead-gray">
                                    <tr>
                                        <th class="text-center">Nombre </th>
                                        <th class="text-center">Incluir </th>
                                        <th class="text-center">Cantidad </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($elementos as $elemento)
                                        
                                        @php $inventario = App\Models\Inventario::where('ambiente_id', $ambiente->id)->where('elemento_id', $elemento->id)->first();@endphp
                                        @php $nameElemento = 'elemento-'.$elemento->id-1 @endphp
                                        @if ($inventario != null)
                                            <tr>
                                                <input type="hidden" name="idElemento[]" value="{{$elemento->id}}">
                                                <td class="text-center">{{ $elemento->nombre }}</td> 
                                                <td class="text-center"><input type="checkbox" name="{{ $nameElemento }}" checked  value="{{ $inventario->elemento->id }}"> </td>
                                                <td class="text-center" style="width:100px"><input type="number" class="form-control" name="cantidad[]"  value="{{ $inventario->cantidad }}"></td>
                                            </tr>
                                        @else
                                        
                                        <tr>
                                            <input type="hidden" name="idElemento[]" value="{{$elemento->id}}">
                                            <td class="text-center">{{ $elemento->nombre }}</td>
                                            <td class="text-center"><input type="checkbox" name="{{ $nameElemento }}" value="{{ $elemento->id }}"></td>
                                            <td class="text-center" style="width:100px"><input type="number" class="form-control" name="cantidad[]" value=""></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr>
                    <br>
                    <div class="row" style="justify-content: center;">
                        <div class="col-3" style="text-align: center;">
                            <a href="{{ route('inventarios.index') }}" style="background-color: #BC2B2B; color:white"
                                class="btn"> Volver</button> </a>
                        </div>

                        <div class="col-3" style="text-align: center;">
                            <a><button style="background-color:#33A2C5; color : white;" type="submit" class="btn btn">
                                    Actualizar</button></a>
                        </div>
                    </div>

                </div>
        </div>

        </form>

    </div>
</div>
</div>
@include('layouts.footer')
