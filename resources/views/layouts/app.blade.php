<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HelpDesk</title>
        <link rel="icon" type="image/png" href="{{ asset('img/logoSenaBlanco.png') }}">
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
        <!-- <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>


        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styleMenu.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styleVerificPass.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styleInput.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            
            <a class="navbar-brand ps-3" href="index.html"><img style="align-items: center;" src="{{ asset('img/logoSenaBlanco.png') }}" width="50" height="40">
            <font face="nirvana" color="white"> HelpDesk</font></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar
                    " aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li style="display: none;" id="UsuarioOp"><a class="dropdown-item" href="#!">Usuarios</a></li>
                        <li style="display: none;" id="CargoOp"><a class="dropdown-item" href="#!">Cargos</a></li>
                        <li><a class="dropdown-item" href="#!">Perfil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li> 
                            <form method="POST" id="miForm" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a class="dropdown-item" onclick="submit()" href="#"><i class="fas fa-door-open" ></i> Salir</a>
                            </form>
                        </li>
                        <script>function submit() { document.getElementById("miForm").submit(); } </script>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inicio</div>
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-home" style="color:#095F71;"></i></div>
                                Dashboard
                            </a>
                            @if(Auth::user()->idCargo == 1)
                             <!-- Configuracion -->
                            <div class="sb-sidenav-menu-heading">Configuracion</div>

                            <!-- Usuarios -->
                            <a class="nav-link collapsed" href="{{ route('usuarios.index') }}">
                                <div class="sb-nav-link-icon"><i class="far fa-address-book" style="color:#095F71;" ></i></i></div>
                                Usuarios
                            </a>
                            
                            

                            <!-- Cargos -->
                            <a class="nav-link collapsed" href="{{ route('cargos.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card" style="color:#095F71;"></i></div>
                                Cargos
                            </a>
                            

                            <!-- Parametros -->
                            <div class="sb-sidenav-menu-heading">Parametros</div>

                            <!-- Ambientes -->
                            <a class="nav-link collapsed" href="{{ route('ambientes.index') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-landmark" style="color:#188755;" ></i></i></div>
                                Ambientes
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                           

                            <!-- Elementos -->
                            <a class="nav-link collapsed" href="{{ route('elementos.index') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-laptop-house" style="color:#095F71;"></i></div>
                                Elementos
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            

                            <!-- Elementos -->

                            <a class="nav-link collapsed" href="{{ route('estados.index') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-swatchbook" style="color:#095F71;"></i></div>
                                Estados 
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            
                            @endif
                            <!-- Modulos -->
                            <div class="sb-sidenav-menu-heading">Modulos</div>

                            <!-- Incidentes -->
                            @if(Auth::user()->idCargo == 1)
                            <a class="nav-link collapsed" href="{{ route('incidentes.index') }}" >
                                <div class="sb-nav-link-icon"><i class="fa fa-check-square-o" style="color:#E8700B;" ></i></div>
                                Incidentes
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>

                            @else
                            <a class="nav-link collapsed" href="{{ route('incidentes.create') }}" >
                                <div class="sb-nav-link-icon"><i class="fa fa-check-square-o" style="color:#E8700B;" ></i></div>
                                Incidentes
                                <div class="sb-sidenav-collapse-arrow"></i></div>
                            </a>
                           
                            @endif


                            @if(Auth::user()->idCargo == 1)
                            <!-- Inventario -->
                            <a class="nav-link collapsed" href="{{ route('inventarios.index') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt" style="color:#095F71;" ></i></div>
                                Inventario
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Servicio Nacional De Aprendizaje:</div>
                        SENA
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
                        <!-- <h1 class="mt-4">Mesa De Ayuda</h1>
                        
                        <div class="row">
                        
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Ingrese la informacion a editar 
                            </div>
                            
                            <div class="card-body">
                                
                               
                            </div> -->

                            
                      
