<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HelpDesk</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
        <!-- <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" /> -->


        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styleMenu.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">HelpDesk</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesion</a></li>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <!-- Parametros -->
                            <div class="sb-sidenav-menu-heading">Parametros</div>

                            <!-- Ambientes -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collAmbiente" aria-expanded="false" aria-controls="collAmbiente">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Ambientes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collAmbiente" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('ambientes.index') }}">Gestionar Ambientes</a>
                                </nav>
                            </div>

                            <!-- Elementos -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collElemento" aria-expanded="false" aria-controls="collElemento">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Elementos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collElemento" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{ route('elementos.index') }}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Gestionar Elementos
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>

                            <!-- Elementos -->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collEstados" aria-expanded="false" aria-controls="collEstados">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Estados
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collEstados" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{ route('estados.index') }}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Gestionar Estados
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>

                            <!-- Modulos -->
                            <div class="sb-sidenav-menu-heading">Modulos</div>

                            <!-- Incidentes -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collIncidentes" aria-expanded="false" aria-controls="collIncidentes">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Incidentes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collIncidentes" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{ route('incidentes.index') }}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Gestionar Incidentes
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>

                            <!-- Inventario -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collInventario" aria-expanded="false" aria-controls="collInventario">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Inventario
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collInventario" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{ route('inventarios.index') }}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Gestionar Inventario
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
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

                            
                      
