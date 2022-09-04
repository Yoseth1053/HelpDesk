<x-app-layout>

<section style=" display: flex;
  justify-content: center;">

    <div class="card-header">
        <h1 class="mt-4"><i class="fas fa-exclamation-triangle"></i> Incidentes</h1>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2">
                <div class="flex justify-end">
                    <a href="{{ route('incidentes.create') }}">
                        <x-jet-button>Crear</x-jet-button>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full" >
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                                Id
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                                hora
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                                fecha
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                                Descripcion
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                                Estado
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                                Opciones
                                            </th>
                                            <!-- <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                                Opciones
                                            </th> -->
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($incidentes as $incidente)
                                        <tr class="border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$incidente->id}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$incidente->hora}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                             {{$incidente->fecha}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                             {{$incidente->descripcion}}
                                            </td>

                                            @if($incidente->estado->id == 1)
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" style="color: red;">
                                             <b>{{$incidente->estado->nombre}}</b>
                                            </td>
                                            @elseif($incidente->estado->id == 2)
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <b>{{$incidente->estado->nombre}}</b>
                                            </td>
                                            @elseif($incidente->estado->id == 3)
                                            <td class="danger">
                                            <b>{{$incidente->estado->nombre}}</b>
                                            </td>
                                            @endif
                                            
                                            
                                            
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <a href="{{route('incidentes.show',$incidente)}}">
                                                    <x-jet-button>Ver</x-jet-button>
                                                </a>
                                                <a href="{{route('incidentes.edit',$incidente)}}">
                                                    <x-jet-button>Editar</x-jet-button>
                                                </a>
                                                <form action="{{route('incidentes.destroy',$incidente)}}" method="post">
                                                    @method("DELETE")
                                                    @csrf
                                                    <x-jet-button>Eliminar</x-jet-button>
                                                </form>
                                                <a href="{{route('incidentes.agenda',$incidente)}}">
                                                    <x-jet-button>Agendar</x-jet-button>
                                                </a>
                                            </td>

                                            <!-- <td class="">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                                                    <i class="fa fa-list-alt"></i>
                                                </button>
                                                <div class="dropdown-menu" style="background-color: black;">
                                                    <a style="color: white;" class="dropdown-item" href="">aaaaaaaaaaaaaaaaaa</a>
                                                    <a style="color: white;" class="dropdown-item" href="">aaaaaaaaaaaaaaaaaa</a>
                                                    <a style="color: white;" class="dropdown-item" href="">aaaaaaaaaaaaaaaaaa</a>
                                                    <a style="color: white;" class="dropdown-item" href="">aaaaaaaaaaaaaaaaaa</a>
                                                </div>
                                            </div>
                                            </td> -->
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
 </x-app-layout> 
