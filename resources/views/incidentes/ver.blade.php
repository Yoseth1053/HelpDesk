@include('layouts.app')
<br>
    <div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
        <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b>
                <font face="nirvana">Informacion Del Incidente</font>
            </b> </h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2">
    
            </div>
        </div>
    
        <div class="card-body" style="background-color: #CCCCCC;">

        <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
        <h4 style="text-align: center;"><b>
                <font face="nirvana">Informacion General</font>
            </b> </h4>
        </div>
        <br>
            <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr style="background-color: aqua;">
                        <th class="text-center">Ticket</th>
                        
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Hora</th>
                        <th class="text-center">Ambiente</th>
                        <th class="text-center">Estado</th>
                        <!-- <th class="text-center">Estado</th> -->
                    </tr>
                </thead>
                <tbody class="text-center">
                    <td><b>{{$incidente->id}}</b></td>
                    <td><b>{{$incidente->fecha}}</b></td>
                    <td><b>{{$incidente->hora}}</b></td>
                    <td><b>{{$incidente->ambiente->nombre}}</b></td>
                    <td><b>{{$incidente->estado->nombre}}</b></td>

                </tbody>
            </table>
            <br>

            <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr style="background-color: aqua;">
                        <th class="text-center">Descripcion</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <td><b>{{$incidente->descripcion}}</b></td>
                </tbody>
            </table>
            <br>
            @if($incidente->fechaRespuesta != null)

            <div class="card-header" style="justify-content: center; background-color:#F3F3F3; color:#E8700B;">
            <h4 style="text-align: center;"><b>
                    <font face="nirvana">Agenda
                    <input type="button" id="mostrar" name="boton1" value="Click para mostrar elementos">
<input type="button" id="ocultar" name="boton2" value="Click pora ocultar elementos">
                    </font>
                </b> </h4>
            </div>
            <br>

            <div id="agenda">
            <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr style="background-color: aqua;">
                        <th class="text-center">Ticket</th>
                        
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Hora</th>
                        <th class="text-center">Ambiente</th>
                        <th class="text-center">Estado</th>
                        <!-- <th class="text-center">Estado</th> -->
                    </tr>
                </thead>
                <tbody class="text-center">
                    <td><b>{{$incidente->id}}</b></td>
                    <td><b>{{$incidente->fecha}}</b></td>
                    <td><b>{{$incidente->hora}}</b></td>
                    <td><b>{{$incidente->ambiente->nombre}}</b></td>
                    <td><b>{{$incidente->estado->nombre}}</b></td>

                </tbody>
            </table></div>
</div>
            @endif
    
            <div class="row" style="justify-content: center;">
                <div class="col-3" style="text-align: center;">
                    <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                </div>

                <div class="col-3" style="text-align: center;">
                <a href="{{ route('incidentes.edit', $incidente) }}" class="btn" style="background-color: #E8700B; color:white;"> Agendar</button> </a>
                </div>
            </div>
            
    
        </div>
    
    
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
        $('#mostrar').click(function(){
    
            $('#agenda').hide(300);
           
        });
    
        $('#ocultar').click(function(){
    
        $('#agenda').show(300);
    
    });
</script>
@include('layouts.footer')