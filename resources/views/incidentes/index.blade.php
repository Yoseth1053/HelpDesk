@include('layouts.app')
<br>
<div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
    <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b>
            <font face="nirvana"> Incidentes</font>
        </b> </h1>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-2">
            <div class="flex justify-end">
                <a style="color: white ; background-color:#E8700B;" href="{{ route('incidentes.create') }}" class="btn"> Reportar Incidente</button> </a>
                <!-- <a href="">
                    <button>Crear</button>
                </a> -->
            </div>
        </div>
    </div>

    <div class="card-body">
        <table id="myTable" class="display" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($incidentes as $incidente)
                <tr class="border-b" style="text-align: center;">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{$incidente->id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$incidente->descripcion}}
                    </td>
                    @if($incidente->estado->nombre == 'Solicitado')
                    <td style="color: #BC2B2B;"><b>{{$incidente->estado->nombre}}</b> </td>
                    @elseif($incidente->estado->nombre == 'Agendado')
                    <td style="color: #0A8BAE;"><b>{{$incidente->estado->nombre}}</b> </td>
                    @elseif($incidente->estado->nombre == 'Solucionado')
                    <td style="color: green;"><b>{{$incidente->estado->nombre}}</b> </td>
                    @endif
                    
                    <td>
                        <div class="dropdown">
                            <button type="submit" class="dropbtn"><i class="fas fa-list-alt"></i><b> Opciones</b></button>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{route('incidentes.show',$incidente)}}" style="color:black"><i class="fas fa-binoculars" style="color:black"></i><b> Ver</b> </a>
                                <a class="dropdown-item" href="{{route('incidentes.edit',$incidente)}}" style="color:#157ECE"><i class="far fa-calendar-alt" style="color:#157ECE"></i><b> Agendar</b></a>
                                <a class="dropdown-item" href="{{route('incidentes.show',$incidente)}}" style="color:green"><i class="fas fa-edit" style="color:green"></i><b> Solucionar</b></a>

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@include('layouts.footer')