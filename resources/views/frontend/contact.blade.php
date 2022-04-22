
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="frontend/css/bootstrap.css">
    <!--  custom css file  -->
    <link rel="stylesheet" href="frontend/css/style.css">
    <!--  Responsive css file  -->
    <link rel="stylesheet" href="frontend/css/responsive.css">
    <link rel="stylesheet" href="frontend/css/footer.css">
    <link rel="stylesheet" href="frontend/contact/style.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

<header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="frontend/img/logo3.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('about')}}">about</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('service')}}">services</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('product')}}">Products</a>
                    </li>
                    <li class="nav-item active">
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



<div class="container">
    <span class="big-circle"></span>
    <img src="frontend/contact/img/shape.png" class="square" alt="" />
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolorum adipisci recusandae praesentium dicta!
            </p>

            <div class="info">
                <div class="information">
                    <img src="frontend/contact/img/location.png" class="icon" alt="" />
                    <p>92 Cherry Drive Uniondale, NY 11553</p>
                </div>
                <div class="information">
                    <img src="frontend/contact/img/email.png" class="icon" alt="" />
                    <p>lorem@ipsum.com</p>
                </div>
                <div class="information">
                    <img src="frontend/contact/img/phone.png" class="icon" alt="" />
                    <p>123-456-789</p>
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="index.html" autocomplete="off">
                <h3 class="title">Contact us</h3>
                <div class="input-container">
                    <input type="text" name="name" class="input" />
                    <label for="">Username</label>
                    <span>Username</span>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" class="input" />
                    <label for="">Phone</label>
                    <span>Phone</span>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                </div>
                <input type="submit" value="Send" class="btn" />
            </form>
        </div>
    </div>
</div>

<script src="frontend/contact/app.js"></script>

</body>

</html>


<script>
    feather.replace();
</script>
