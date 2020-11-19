<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Pagina SrDeLorean
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="../assets/css/material-kit.css" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />

    </head>
    <body class="antialiased">
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
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Components
                            </a>
                            <div class="dropdown-menu dropdown-with-icons">
                            <a href="../index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>
                            <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/product/material-kit-pro" target="_blank">
                            <i class="material-icons">unarchive</i> Upgrade to PRO
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

      
        <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 class="title">Your Story Starts With Us.</h1>
                <h4>Every landing page needs a small description after the big bold title, that&apos;s why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
                <br>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Watch video
                </a>
                </div>
            </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
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
    
            
            
            <div class="section text-center">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                <div class="row">
                    <div class="col-md-4">
                    <div class="team-player">
                        <div class="card card-plain">
                        <div class="col-md-6 ml-auto mr-auto">
                            <img src="../assets/img/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <h4 class="card-title">Gigi Hadid
                            <br>
                            <small class="card-description text-muted">Model</small>
                        </h4>
                        <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <div class="card card-plain">
                        <div class="col-md-6 ml-auto mr-auto">
                            <img src="../assets/img/faces/christian.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <h4 class="card-title">Christian Louboutin
                            <br>
                            <small class="card-description text-muted">Designer</small>
                        </h4>
                        <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <div class="card card-plain">
                        <div class="col-md-6 ml-auto mr-auto">
                            <img src="../assets/img/faces/kendall.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <h4 class="card-title">Kendall Jenner
                            <br>
                            <small class="card-description text-muted">Model</small>
                        </h4>
                        <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        


      
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
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
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
    </body>

</html>