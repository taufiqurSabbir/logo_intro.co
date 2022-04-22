<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Tuition</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="{{asset('frontend/vendor/Magnific-Popup/dist/magnific-popup.css')}}">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="{{asset('frontend/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/owl-carousel/css/owl.theme.default.min.css')}}">


    <!--  custom css file  -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/product.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/product.js')}}">


    <link rel="stylesheet" href="{{asset('frontend/css/footer.css')}}">



</head>

<body>


<!--  ======================= Start Header Area ============================== -->

<header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="{{asset('frontend/img/logo3.png')}}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item   @yield('home')">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @yield('about')">
                        <a class="nav-link" href="{{route('about')}}">about</a>
                    </li>
                    <li class="nav-item @yield('service')">
                        <a class="nav-link" href="{{route('service')}}">services</a>
                    </li>

                    <li class="nav-item @yield('product')">
                        <a class="nav-link" href="{{route('product')}}">Products</a>
                    </li>
                    <li class="nav-item @yield('contact')">
                        <a class="nav-link" href="{{route('contact')}}">contact</a>
                    </li>

                    @guest()
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('registration')}}">Registration</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin')}}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Logout</a>
                        </li>


                    @endguest

                </ul>
            </div>
        </nav>
    </div>
</header>

<!--  ======================= End Header Area ============================== -->

<!--  ======================= Start Main Area ================================ -->
<main class="site-main">
