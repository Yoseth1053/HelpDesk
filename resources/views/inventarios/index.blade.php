@include('layouts.app')
<br>
<div class="card-header" style="justify-content: center; background-color:#33A2C5; color:white;">
    <h1 style="text-align: center;"><i class="fas fa-file-alt "></i><b>
            <font face="nirvana">Inventarios</font>
        </b> </h1>
</div>
<div class="py-12">
<form action="{{ route('exportarPDF') }}" method="get">
@csrf
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="p-2">
        <div class="flex justify-end">
            <div class="row">

                <div class="col-3">
                    <a style="color: white ; background-color:#33A2C5;" href="{{ route('inventarios.create') }}" class="btn"> Nuevo Inventario</a>
                    <a id="pdf" style="color: white ; background-color:#CC4027;" href="#" class="btn"><i class="fas fa-file-pdf"></i></a>
                </div>

                <div class="col-6" id="slcAmb" style="display:none;">
                    <div class="form-group " style="text-align: center;">
                        <select name="ambiente" class="form-control" required>
                            <option value="">-- Seleccione Un Ambiente --</option>
                            @foreach($ambientes as $ambiente)
                            <option value="{{$ambiente->id}}">{{$ambiente->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-3" id="btnExportar" style="display: none;">
                    <div class="form-group " style="text-align: center;">
                    <button type="submit" style="color: white ; background-color:#CC4027;" class="form-control" >Exportar PDF</button>
                        <!-- <a style="color: white ; background-color:#CC4027;" href="" class="btn"> Exportar PDF</a> -->
                    </div>
                </div>

            </div>
        </div>
      </div>
  </div>
</form>
    <div class="card-body">

        <table id="myTable" class="display" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Ambiente</th>
                    <!-- <th class="text-center">Elemento</th> -->
                    <!-- <th class="text-center">Cantidad</th> -->

                    <!-- <th>Estado</th> -->
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Ambiente</th>
                    <!-- <th class="text-center">Elemento</th> -->
                    <!-- <th class="text-center">Cantidad</th> -->

                    <!-- <th>Estado</th> -->
                    <th class="text-center">Opciones</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($ambientesInv as $inventario)
                <tr class="border-b" style="text-align: center;">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{$inventario->id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$inventario->nombre}}
                    </td>
                    

                    <td>
                        <div class="dropdown">
                            <button type="submit" class="dropbtn"><i class="fas fa-list-alt"></i><b> Opciones</b></button>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{route('inventarios.show',$inventario)}}" style="color:green"><i class="fas fa-binoculars" style="color:green"></i><b> Ver</b> </a>
                                <a class="dropdown-item" href="{{route('inventarios.edit',$inventario)}}" style="color:#157ECE"><i class="fas fa-edit" style="color:#157ECE"></i><b> Editar</b></a>
                               
                                <form action="{{route('eliminar',$inventario)}}" method="post" id="desactivar">
                                @csrf
                                   <button onclick="return confirm('Esta Seguro De Eliminar Este Registro ?')" type="submit" class="btn dropdown-item" style="color:#C21F1F; text-align: left;"><i class="fas fa-skull-crossbones" style="color:#C21F1F"></i><b> Eliminar</b></button>
                                </form>

                                
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $('#pdf').click(function() {
        $('#slcAmb').toggle(300);
        $('#btnExportar').toggle(300);
        
    });
    
</script>
@include('layouts.footer')