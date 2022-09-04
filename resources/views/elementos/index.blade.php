
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Elementos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2">
                <div class="flex justify-end">
                    <a href="{{ route('elementos.create') }}">
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
                                <table class="min-w-full">
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Id
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Nombre
                                            </th><th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Estado
                                            </th>
                                            </th><th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Opciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($elementos as $elemento)
                                        <tr class="border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$elemento->id}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$elemento->nombre}}
                                            </td>
                                            @if($elemento->estado != null)
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                               Activo
                                               </td>
                                            @else
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                               Inactivo
                                               </td>
                                            @endif
                                            
                                             
                                            
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <a href="{{route('elementos.show',$elemento)}}">
                                                    <x-jet-button>Ver</x-jet-button>
                                                </a>
                                                <a href="{{route('elementos.edit',$elemento)}}">
                                                    <x-jet-button>Editar</x-jet-button>
                                                </a>
                                                <form action="{{route('elementos.destroy',$elemento)}}" method="post">
                                                    @method("DELETE")
                                                    @csrf
                                                    <x-jet-button>Eliminar</x-jet-button>
                                                </form>
                                            </td>
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
</x-app-layout>