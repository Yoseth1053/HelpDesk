@include('layouts.app')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('inventarios.store') }}" method="post">
                @csrf
                <br>
                <div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
                    <h1 style="text-align: center;"><i class="fas fa-file-alt"></i><b>
                            <font face="nirvana">Crear Inventario</font>
                        </b> </h1>
                </div>
                <br>

                <div class="card-body" style="background-color: #CCCCCC;">

                    <div class="row" style="justify-content: center;">
                        <div class="col-3">
                            <div class="form-group " style="text-align: center;">
                                <label for=""><b>Ambiente </b> </label>
                                <select class="form-control" name="ambiente_id" id="ambiente_id">
                                    @foreach ($ambientes as $amb)
                                    <option value="{{ $amb->id }}">{{ $amb->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="justify-content: center; text-align:center;">
                        <div class="col-3" >
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
                                    @foreach ($elementos as $elm)
                                    <tr>
                                        <td class="text-center">{{ $elm->nombre }}</td>
                                        @php $nameElemento = 'elemento-'.$elm->id-1 @endphp
                                        <td class="text-center"><input type="checkbox" name="{{$nameElemento}}" value="{{ $elm->id }}"></td> 
                                        <td class="text-center" style="width:100px"><input type="number" class="form-control" name="cantidad[]" value=""></td>
                                    </tr>
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
                            <a href="{{ route('inventarios.index') }}" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                        </div>

                        <div class="col-3" style="text-align: center;">
                            <a><button style="background-color:#33A2C5; color : white;" type="submit" class="btn btn"> Guardar</button></a>
                        </div>
                    </div>

                </div>


        </div>

        </form>

    </div>
</div>
</div>
@include('layouts.footer')