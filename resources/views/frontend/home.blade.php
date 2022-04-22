@extends('frontend.layout.usermaster')
@section('home','active')
@section('content')


    <!--  ======================= Start Banner Area =======================  -->
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">Hey</h3>
                    <h1 class="title-text text-uppercase"> We are Ready</h1>
                    <h4 class="title-text text-uppercase">To serve you</h4>
                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <button type="button" class="btn button primary-button mr-4 text-uppercase">check out</button>
                            <button type="button" class="btn button secondary-button text-uppercase">All Items</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="frontend/img/banner/3.gif" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Banner Area =======================  -->

    <!--  ========================= About Area ==========================  -->

    <section class="about-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="frontend/img/about.gif" alt="About us" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-title">
                    <h2 class="text-uppercase pt-5">
                        <h2 style="text-align: center; font-size:2.5rem;">We are </h2>
                        <b> <h3 style="text-align: center;font-size:4rem">logointro.co</h3></b>
                        <!-- <span>We are </span>
                        <span>Let me</span>
                        <span>introduce</span>
                        <span>myself</span> -->
                    </h2>
                    <div class="paragraph py-4 w-75">
                        <p class="para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error rerum iure obcaecati vel possimus officia maiores perferendis ut! Quos, perspiciatis.
                        </p>
                        <p class="para">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                            content here
                        </p>
                    </div>
                    <button type="button" class="btn button primary-button text-uppercase">Download cv</button>
                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End About Area ==========================  -->


    <!--  ====================== Start Services Area =============================  -->

    <section class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class="text-uppercase title-text">Services Offers</h1>
                    <p class="para">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
                    </p>
                </div>
            </div>
            <div class="container services-list">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="frontend/img/services/countdown.png" alt="Services-1">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">Logo Animation</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="frontend/img/services/logo-design (3).png" alt="Services-2">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">Logo Design</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="frontend/img/services/ux.png" alt="Services-3">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">web design</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="frontend/img/services/youtube.png" alt="Services-4">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">Youtube solution</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ====================== End Services Area =============================  -->

    <!--  ======================= Project Area =============================  -->

    <section class="project-area">

        <div class="container">
            <div class="project-title pb-5">
                <h1 class="text-uppercase title-h1 home-pro-title">Recently Added Project</h1>
                <h1 class="text-uppercase title-h1 home-pro-title">Quality Work</h1>
            </div>

            <div class="button-group">
                <button type="button" class="active" id="btn1" data-filter="*">All</button>
                <button type="button" data-filter=".popular">Popular</button>
                <button type="button" data-filter=".latest">Latest</button>
                <button type="button" data-filter=".following">Following</button>
                <button type="button" data-filter=".upcoming">Upcoming</button>
            </div>

            <div class="row grid">
                <div class="block">
                    <div class="film-container">
                        <div class="row ">
                            <!-- single Film 1 start -->
                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">

                                <div class="card">

                                    <video autoplay muted width="280" height="192" controls>
                                        <source src="https://www.rmp-streaming.com/media/bbb-360p.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="card__title">Animaton #1</h2>
                                    <span class="card__description">Logo Animation</span>
                                    <span class="price">10$</span>
                                    <button class="card__action">
                                        Buy Now
                                    </button>

                                </div>
                            </div>
                            <!-- single Film 1 end -->


                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">

                                <div class="card">

                                    <video width="280" height="192" controls>
                                        <source src="https://www.rmp-streaming.com/media/bbb-360p.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="card__title">Animaton #1</h2>
                                    <span class="card__description">Logo Animation</span>
                                    <span class="price">10$</span>
                                    <button class="card__action">
                                        Buy Now
                                    </button>

                                </div>
                            </div>



                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">

                                <div class="card">

                                    <video width="280" height="192" controls>
                                        <source src="https://www.rmp-streaming.com/media/bbb-360p.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="card__title">Animaton #1</h2>
                                    <span class="card__description">Logo Animation</span>
                                    <span class="price">10$</span>
                                    <button class="card__action">
                                        Buy Now
                                    </button>

                                </div>
                            </div>





                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">

                                <div class="card">

                                    <video width="280" height="192" controls>
                                        <source src="https://www.rmp-streaming.com/media/bbb-360p.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="card__title">Animaton #1</h2>
                                    <span class="card__description">Logo Animation</span>
                                    <span class="price">10$</span>
                                    <button class="card__action">
                                        Buy Now
                                    </button>

                                </div>
                            </div>





                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">

                                <div class="card">

                                    <video width="280" height="192" controls>
                                        <source src="https://www.rmp-streaming.com/media/bbb-360p.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="card__title">Animaton #1</h2>
                                    <span class="card__description">Logo Animation</span>
                                    <span class="price">10$</span>
                                    <button class="card__action">
                                        Buy Now
                                    </button>

                                </div>
                            </div>




                            <!-- single Film 2 start -->
                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">



                                <div class="card">
                                    <video width="280" height="192" controls>
                                        <source src="https://www.rmp-streaming.com/media/bbb-360p.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="card__title">Animaton #1</h2>
                                    <span class="card__description">Logo Animation</span>
                                    <span class="price">15$</span>
                                    <button class="card__action">
                                        Buy Now
                                    </button>

                                </div>
                            </div>

                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">
                                <div class="card">
                                    <video width="280" height="192" controls>
                                        <source src="https://www.rmp-streaming.com/media/bbb-360p.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="card__title">Animaton #1</h2>
                                    <span class="card__description">Logo Animation</span>
                                    <span class="price">12$</span>
                                    <button class="card__action">
                                        Buy Now
                                    </button>

                                </div>
                            </div>
                            <!-- single Film 6 end -->
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--  ======================= End Project Area =============================  -->

    <!--  ======================== About Me Area ==============================  -->

    <section class="about-area">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <div class="about-title">
                        <h1 class="text-uppercase title-h1">Client Say about me</h1>
                        <p class="para">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container carousel py-lg-5">
            <div class="owl-carousel owl-theme">
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                        <img src="frontend/img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                        <h4 class="text-uppercase">John Martin</h4>
                        <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto consequuntur ratione, obcaecati corrupti deserunt.</p>
                    </div>
                </div>
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                        <img src="frontend/img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                        <h4 class="text-uppercase">Mac Hill</h4>
                        <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto consequuntur ratione, obcaecati corrupti deserunt.</p>
                    </div>
                </div>
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                        <img src="frontend/img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                        <h4 class="text-uppercase">John Martin</h4>
                        <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto consequuntur ratione, obcaecati corrupti deserunt.</p>
                    </div>
                </div>
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                        <img src="frontend/img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                        <h4 class="text-uppercase">Mac Hill</h4>
                        <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto consequuntur ratione, obcaecati corrupti deserunt.</p>
                    </div>
                </div>
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                        <img src="frontend/img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                        <h4 class="text-uppercase">John Martin</h4>
                        <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto consequuntur ratione, obcaecati corrupti deserunt.</p>
                    </div>
                </div>
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                        <img src="frontend/img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                        <h4 class="text-uppercase">Mac Hill</h4>
                        <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto consequuntur ratione, obcaecati corrupti deserunt.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--  ======================== End About Me Area ==============================  -->


    <!--  ======================== Brand Area ==============================  -->

    <section class="brand-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="first-row row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo1.png" alt="Brand-1 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo2.png" alt="Brand-2 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo3.png" alt="Brand-3 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo4.png" alt="Brand-4">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo5.png" alt="Brand-5 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo6.png" alt="Brand-6">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo7.png" alt="Brand-7 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo8.png" alt="Brand-8 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="frontend/img/brands/logo9.png" alt="Brand-9">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="experience-area">
                        <div class="d-flex flex-row years-area">
                            <h2 class="p-3 years">10</h2>
                            <h2>
                                <span>Years</span>
                                <span>Experience</span>
                                <span>Working</span>
                            </h2>
                        </div>
                        <div class="d-flex flex-row flex-wrap call-area">
                            <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                            <div class="call-now">
                                <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                                <span class="font-roboto py-2">(+91)-800-555-4986</span>
                            </div>
                        </div>
                        <div class="bg-panel"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ======================== End Brand Area ==============================  -->





    </main>

@endsection
