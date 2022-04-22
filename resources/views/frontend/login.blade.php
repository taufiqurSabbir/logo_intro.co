
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('frontend/login_res/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <title>Sign in & Sign up Form</title>

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>

<body>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('service')}}">services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('registration')}}">Registration</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>

                </ul>
            </div>
        </nav>


        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">

                    <form action="{{route('submit.login')}}" class="sign-in-form" method="post">
                        {{csrf_field()}}
                        <h2 class="title">Sign in</h2>
                        @include('frontend.errors')
                        @if(session('success'))
                        <span class="alert alert-success">{{session('success')}}</span>
                        @endif
                        @if(session('failed'))
                            <span class="alert alert-danger">{{session('failed')}}</span>
                        @endif
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Email" name="email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" />
                        </div>
                        <input type="submit" value="Login" class="btn solid" />

                        <p class="social-text">Or Sign in with social platforms</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New here ?</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!
                        </p>
                        <button class="btn transparent">
                            Sign up
                        </button>
                    </div>
                    <img src="{{asset('frontend/login_res/img/n55XSldzA6BRl5l-Visitor-Transparent-Background.png')}}" class="image" alt="" />
                </div>

            </div>
        </div>
    </div>
    </div>
</header>


<script src="{{asset('frontend/login_res/login.js')}}"></script>
<!--  Jquery js file  -->
<script src="{{asset('frontend/js/jquery.3.4.1.js')}}"></script>

<!--  Bootstrap js file  -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!--  isotope js library  -->
<script src="{{asset('frontend/vendor/isotope/isotope.min.js')}}"></script>

<!--  Magnific popup script file  -->
<script src="{{asset('frontend/vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js')}}"></script>

<!--  Owl-carousel js file  -->
<script src="{{asset('frontend/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<!--  custom js file  -->
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
