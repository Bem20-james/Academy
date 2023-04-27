@extends('web.layout.layouts')
@section('content')
    <!-- HOME PAGE -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="text_on_image">
                    <img class="d-block w-100" src="{{ asset('assets/images/calo.jpg') }}" alt="First slide">
                    <div class="centered text-white">
                        <h3 class="h3">You only have to know one thing</h3>
                        <h1 class="h1"><b>CAN LEARN ANYTHING</b> </h1>
                        <h5 class="h5">Education is the best kill on all that we do on this earth</h5>
                        <h6 class="h6">It has survived not only five centuries</h6>
                        <a href="#"><button class="btn btn-outline-white bg-success text-white" name="btn_get_started">GET STARTED
                            NOW!</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="text_on_image">
                    <img class="d-block w-100" src="{{ asset('assets/images/calo1.jpg') }}" alt="Second slide">
                    <div class="centered text-white">
                        <h3 class="h3">You only have to know one thing</h3>
                        <h1 class="h1"><b>CAN LEARN ANYTHING</b> </h1>
                        <h5 class="h5">Education is the best kill on all that we do on this earth</h5>
                        <h6 class="h6">It has survived not only five centuries</h6>
                        <a href="#"><button class="btn btn-outline-white bg-success text-white" name="btn_get_started">GET STARTED
                            NOW!</button></a>
                    </div>
                </div>
                {{-- <img class="d-block w-100" src="{{ asset('assets/images/calo1.jpg') }} " alt="Second slide"> --}}
            </div>
            <div class="carousel-item">
                <div class="text_on_image">
                    <img class="d-block w-100" src="{{ asset('assets/images/3.jpg') }}" alt="Third slide">
                    <div class="centered text-white">
                        <h3 class="h3">You only have to know one thing</h3>
                        <h1 class="h1"><b>CAN LEARN ANYTHING</b> </h1>
                        <h5 class="h5">Education is the best kill on all that we do on this earth</h5>
                        <h6 class="h6">It has survived not only five centuries</h6>
                        <a href="#"><button class="btn btn-outline-white bg-success text-white" name="btn_get_started">GET STARTED
                            NOW!</button></a>
                    </div>
                </div>
                {{-- <img class="d-block w-100" src="{{ asset('assets/images/3.jpg') }}"alt="Third slide"> --}}
            </div>
        </div>
    </div>

    {{-- Why academia --}}
    <div class="">
        <div class="why Educare">
            <div class="from-the-best">
                <div class="container py-2">
                    <div class="text-center">
                        <h2 class="text-uppercase text-black">why chose <span class="text-success">
                                Educare</span>
                        </h2>
                        <div class="lines mb-5">

                        </div>
                    </div>
                    <div class="text-center">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus corrupti nesciunt
                            <br>
                            odit necessitatibus maxime aspernatur ab aut, tempora quos, recusandae aliquid <br>
                            molestiae excepturi impedit sed atque unde quas consectetur.
                        </p>
                    </div>
                    <div class="">

                    </div>
                    <div class="row w-100">
                        <div class="col-lg-5 col-md-7 col-sm-12">
                            <img src="{{ asset('assets/images/main-feature.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="row w-100">
                                <div class="col-3">
                                    <i class="fa-solid fa-facebook-square"></i>
                                </div>
                                <div class="col-9">
                                    <h4>RESIDENTIAL SERVICES</h4>
                                    <p>Backed by some of the biggest names in the industry,
                                        Firefox OS is an open platform that fosters greater</p>
                                </div>
                                <div class="col-3">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="col-9">
                                    <h4>COMMERCIAL SERVICES</h4>
                                    <p>Backed by some of the biggest names in the industry,
                                        Firefox OS is an open platform that fosters greater</p>
                                </div>
                                <div class="col-3">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="col-9">
                                    <h4>OUR BEST STAFF</h4>
                                    <p>Backed by some of the biggest names in the industry,
                                        Firefox OS is an open platform that fosters greater</p>
                                </div>
                                <div class="col-3">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="col-9">
                                    <h4>24 HOURS SERVICES</h4>
                                    <p>Backed by some of the biggest names in the industry,
                                        Firefox OS is an open platform that fosters greater</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- PHOTO GALLERY -->
                <div class="bg-light">
                    <div class="container py-5">
                        <div class="text-center">
                            <h2 class="text-uppercase text-black">photo <span class="text-success">
                                    Gallery</span>
                            </h2>
                            <div class="lines mb-5">

                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-lg-3">
                                <div class="card mb-4">
                                    <img src="{{ asset('assets/images/1.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/2.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/3.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/4.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/5.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/6.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/7.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/8.jpg') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="we-are">
                <div class="container py-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="">
                            <h2>We Are With You Every Step <br>
                                Get Started Easily. </h2><br>
                            <span>Make your Website Faster, Safer & Better Support.</span>

                        </div>
                        <div>
                            <button class="btn btn-success btn-piled">GET STARTED NOW!</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- templete -->
        <section id="main-features" class="padding gray">
            <div class="container">
                <div class="row w-100 mb-20">
                    <div class="col-sm-1 col-md-2"></div>
                    <div class="col-xs-12 col-sm-10 col-lg-8 text-center">
                        <h2 class="text-uppercase">Why choose <span class="color_red">EduCare</span></h2>
                        <div class="line_1-1"></div>
                        <div class="line_2-2"></div>
                        <div class="line_3-3"></div>
                        <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="col-sm-1 col-lg-2"></div>
                </div>
                <div class="row w-100">
                    <div class="col-sm-5">
                        <div class="features-img"> <img src="{{ asset('assets/images/main-feature.png') }}"
                                alt=""> </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-cloud-download" aria-hidden="true"></i> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Residential Services</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform
                                    that fosters greater</p>
                            </div>
                        </div>
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-paper-plane-o" aria-hidden="true"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Commercial Services</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform
                                    that fosters greater</p>
                            </div>
                        </div>
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-balance-scale" aria-hidden="true"></i> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Our Best Staff</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform
                                    that fosters greater</p>
                            </div>
                        </div>
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-bullhorn" aria-hidden="true"></i> </div>
                            <div class="media-body">
                                <h4 class="media-heading">24 Hours Services</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform
                                    that fosters greater</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
