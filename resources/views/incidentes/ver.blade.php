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
            <table id="" class="table table-striped table-light" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr style="background-color: aqua;">
                        <th class="text-center">Id</th>
                        <th class="text-center">Ambiente</th>
                        <th class="text-center">Elemento</th>
                        <th class="text-center">Cantidad</th>
                        <!-- <th class="text-center">Estado</th> -->
                    </tr>
                </thead>
                <tbody class="text-center">
                    
    
                </tbody>
            </table>
            <br>
    
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
@include('layouts.footer')