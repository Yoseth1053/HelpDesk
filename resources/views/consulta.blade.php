<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Consulta</title>
    <link rel="icon" type="image/png" href="{{ asset('img/LogoSenaBlanco.png') }}">

    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <!-- <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" /> -->


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styleMenu.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<main>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</main>

<body class="sb-nav-fixed">

    <div class="card-body">


        <br>
        <div class="card-header" style="justify-content: center; background-color:#E8700B; color:white;">
            <h1 style="text-align: center;"><i class="fa fa-check-square-o"></i><b>
                    <font face="nirvana">Servicio Nacional De Aprendizaje</font>
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
                            <font face="nirvana">Consultar Incidencia</font>
                        </b> </h4>
                </div>
                <form action="{{ route('procesarConsul') }}" method="GET">
                    @csrf
                    <div class="row" style="justify-content: center;">
                        <div class="col-6">
                            <div class="form-group" style="text-align: center;">
                                <label for="descripcion" style="text-align: center;"><b>Ingrese el N° de Ticket</b> </label>
                                <input type="text" value="" class="form-control" name="num" id="num" required>
                            </div>
                        </div>
                    </div>
                    <br>


                    <div class="row" style="justify-content: center;">
                        <div class="col-3" style="text-align: center;">
                            <a onClick="history.go(-1);" style="background-color: #BC2B2B; color:white" class="btn"> Volver</button> </a>
                        </div>

                        <div class="col-3" style="text-align: center;">
                            <button type="submit" class="btn btn-success">Consultar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $('#MostrarAgenda').click(function() {
            $('#agenda').show(300);
            $('#OcultarAgenda').show();
            $('#MostrarAgenda').hide();
        });
        $('#OcultarAgenda').click(function() {
            $('#agenda').hide(300);
            $('#MostrarAgenda').show();
            $('#OcultarAgenda').hide();
        });
    </script>

    <script type="text/javascript">
        $('#MostrarSol').click(function() {
            $('#solucion').show(300);
            $('#OcultarSol').show();
            $('#MostrarSol').hide();
        });
        $('#OcultarSol').click(function() {
            $('#solucion').hide(300);
            $('#MostrarSol').show();
            $('#OcultarSol').hide();
        });
    </script>
</body>
    </html>