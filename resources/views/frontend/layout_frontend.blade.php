<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gloveswork.in/vstream/single-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Sep 2020 07:43:27 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drawk</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
</head>

<body class="full-wrap">

    <div class="preloader"></div>

    <div class="backdrop"></div>
    
    <div class="main-wrapper">
        <!-- header wrapper -->
        <div class="header-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 navbar p-0">
                        <a href="{{route('inicio')}}" class="logo"><img src="images/logo.png" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-menu float-none text-center">
                            <li class="nav-item"><a class="nav-link" href="{{route('biblioteca')}}">Biblioteca</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('cursos')}}">Cursos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </div>
        <!-- header wrapper -->
        @yield('content')
        <!-- slider wrapper -->
         
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-6">
                        <p class="copyright-text">© 2020 copyright. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p class="float-right copyright-text">En cualquier caso, <a href="#">Contactanos muy pronto xD</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('frontend/js/plugin.js')}}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/js/scripts.js')}}"></script>
    
</body>

</html>