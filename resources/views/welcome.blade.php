<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DeloreanCompany</title>

        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            DeloreanCompany
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="../assets/css/material-kit.css" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />
	
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

    </head>
    <body class="antialiased">
        <!-- Navegación -->
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
                <div class="container">
                    <div class="navbar-translate">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                        <li class="dropdown nav-item">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/product/material-kit-pro" target="_blank">
                            <i class="material-icons">unarchive</i> Novedades
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/product/material-kit-pro" target="_blank">
                            <i class="material-icons">unarchive</i> Noticias
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="nav-link" >Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link" >Login</a>
                                @endif
                            @endif
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Informacion -->
        <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <h1 class="title">DeLorean Company</h1>
                    <h4>Somos una compañía que enfoca sus recursos en buscar soluciones eficientes y eficaces para todos nuestros clientes, además de querer ayudar a nuestros clientes, DeLorean Company enfoca recursos en investigación para poder la calidad de vida de las personas.</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Novedades -->
        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <h2 class="title">Novedades</h2>
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="../../../assets/img/bg2.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg3.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg.jpg" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Noticias -->
            <div class="container">
                <div class="section text-center">
                    <h2 class="title">Noticias</h2>
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Titulo</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center">Autor</th>
                                        <th class="text-center">Valoracion</th>
                                        <th class="text-center">Ver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noticias as $data)
                                    <tr>
                                        <td class="text-center">{{$data->created_at}}</td>
                                        <td class="text-center">{{$data->titulo}}</td>
                                        <td class="text-center">{{$data->descripcion}}</td>
                                        <td class="text-center">{{$data->autor}}</td>
                                        @if($data->valoracion===0 || $data->cantidad===0)
                                        <td class="text-center">{{$data->valoracion/$data->cantidad}}</td>
                                        @else
                                        <td class="text-center">No hay valoraciones</td>
                                        @endif
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-round">Ver</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!-- medium modal -->
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="mediumBody">
                            <div>
                                <!-- the result to be displayed apply here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
            <!-- Contacto -->
            <div class="section section-contacts">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">Contactenos</h2>
                        <h4 class="text-center description">Si tiene alguna pregunta o sugerencia para la compañía puede realizarla a continuación, esto nos ayudara a mejorar para brindar el mejor servicio que este en nuestras manos, avancemos en conjunto.</h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Correo</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleMessage" class="bmd-label-floating">Mensaje</label>
                                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <button class="btn btn-primary btn-raised">
                                    Enviar Mensaje
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <!-- Div de cierre -->
        </div>
        
    </body>

    <footer class="footer footer-default">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com/">
                        Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/presentation">
                        About Us
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/blog">
                        Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license">
                        Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                document.write(new Date().getFullYear())
                </script>, hecho por <i class="material-icons">favorite</i> Creado por
                <a href="https://srdelorean.000webhostapp.com/perfil/" target="_blank"> Sebastián Ibarra</a> por una mejor sociedad.
            </div> 
        </div>
    </footer>
    
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
    


</html>