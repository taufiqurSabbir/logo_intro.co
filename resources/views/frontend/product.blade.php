@extends('frontend.layout.usermaster')
@section('product','active')

@section('content')

    <section class="project-area">

        <div class="container">
            <div class="project-title pb-5">
                <h1 class="text-uppercase title-h1 home-pro-title">Our All projects</h1>
                <p class="product_page_title home-pro-title">
                    We always maintain our work <b class="quality">Quality</b>. So don't worry about <b class="quality">Quality</b>.
                </p>
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
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <!-- single Film 1 start -->
                            <div class="single-film wow fadeInDown" data-wow-delay=".1s">

                                <div class="card">

                                    <video autoplay width="280" height="192" controls>
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

    </main>
@endsection
