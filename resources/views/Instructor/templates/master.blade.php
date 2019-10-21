<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Tracade.Me - Seguimiento de Habilidades
    </title>
    <!-- Favicon -->
    <link href="{{asset('../public/img/fav-icon.ico')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('../public/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
    <link href="{{asset('../public/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{asset('../public/css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
</head>

<body class="">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ url('') }}">
            <img src="{{asset('../public/img/dash-logo.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset('../public/img/theme/team-1-800x800.jpg')}}">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">¡Bienvenido!</h6>
                    </div>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Mi Perfil</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('login') }}" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Cerrar Sesión</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../index.html">
                            <img src="{{asset('../public/img/dash-logo.png')}}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item"  class="active">
                <a class=" nav-link " href=" ../index.html"> <i class="ni ni-chart-pie-35 text-primary"></i> Inicio
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "href="{{ url('Calendario') }}">
                        <i class="ni ni-calendar-grid-58 text-blue"></i> Calendario
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('Alumnos') }}">
                        <i class="ni ni-single-02 text-purple"></i> Alumnos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('Grupos') }}">
                        <i class="ni ni-bullet-list-67 text-pink"></i> Grupos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active " href="{{ url('Habilidades') }}">
                        <i class="ni ni-trophy text-red"></i> Habilidades
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                        <i class="ni ni-circle-08"></i> Mi Perfil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
                        <i class="ni ni-single-copy-04"></i> Políticas
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">

            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{asset('../public/img/theme/team-4-800x800.jpg')}}">
                </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                                <br>
                                <span class="mb-0 text-sm  font-weight-bold">Akross</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">¡Bienvenido!</h6>
                        </div>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Mi Perfil</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('login') }}" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Cerrar Sesión</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->


@yield('content')


<!-- Footer -->
    <footer class="footer">
        <div class="row align-items-center ">
            <div class="col-md-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</div>
<!--   Core   -->
<script src="{{asset('../public/js/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('../public/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!--   Optional JS   -->
<script src="{{asset('../public/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!--   Argon JS   -->
<script src="{{asset('../public/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
<script src="{{asset('https://cdn.trackjs.com/agent/v3/latest/t.js')}}"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
    });
</script>

@yield('js_content')

</body>

</html>