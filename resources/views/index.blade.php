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
                        <div class="about-sev-tag mt-4">
                            <h4 class="text-success">A little about us and a breif history of how we started.</h4>
                            <p>Education is the passport to the future, for tomorrow belongs
                                to those who prepare for it today.</p>
                            <ul>
                                <li class="check"><i class="fa fa-check-square bg-success" aria-hidden="true"></i>
                                    Educating
                                    the Society</li>
                                <li class="check"><i class="fa fa-check-square bg-success" aria-hidden="true"></i> Training
                                    the leaders of tomorrow</li>
                                <li class="check"><i class="fa fa-check-square bg-success" aria-hidden="true"></i> Anyone
                                    who loves or pursues or desires</li>
                                <li class="check"><i class="fa fa-check-square bg-success" aria-hidden="true"></i> The
                                    printing and typesetting industry.</li>
                            </ul>

                            <div class="founder-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-xs-12">
                        <div class="about-sev-img"> <img src="{{ asset('assets/images/teee.jpg') }}" alt="image"
                                height="410px" width="500px"> </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="">
            <div class="why Educare">
                <div class="from-the-best">
                    <div class="container py-4">
                        <div class="text-center">
                            <h2 class="text-uppercase text-black">why chose <span class="text-success">
                                    Educare</span>
                            </h2>
                        </div>
                        <div class="text-center">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus corrupti nesciunt
                                <br>
                                odit necessitatibus maxime aspernatur ab aut, tempora quos, recusandae aliquid <br>
                                molestiae excepturi impedit sed atque unde quas consectetur.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="">
                                    <img class="w-100" src="{{ asset('assets/images/main-feature.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa-solid fa-facebook-square"></i>
                                    </div>
                                    <div class="col-11">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa-solid fa-facebook-square"></i>
                                    </div>
                                    <div class="col-11">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa-solid fa-facebook-square"></i>
                                    </div>
                                    <div class="col-11">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa-solid fa-facebook-square"></i>
                                    </div>
                                    <div class="col-11">
                                        <h4>RESIDENTIAL SERVICES</h4>
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
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card mb-4">
                                        <img src="{{ asset('assets/images/7.jpg') }}" height="180" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/student2.jpg') }}" height="180" alt=""
                                            srcset="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/students.jpg') }}" height="180" alt=""
                                            srcset="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/4.jpg') }}" height="180" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/5.jpg') }}" height="180" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/6.jpg') }}" height="180" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/7.jpg') }}" height="180" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/8.jpg') }}" height="180" alt="" srcset="">
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
                <div class="factors py-4">
                    <div class="text-center ">
                        <h2 class="text-uppercase text-black">some important <span class="text-success">
                                factors</span>
                        </h2>
                    </div>
                    <div class="text-center">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus corrupti nesciunt
                            <br>
                            odit necessitatibus maxime aspernatur ab aut, tempora quos, recusandae aliquid <br>
                            molestiae excepturi impedit sed atque unde quas consectetur.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row number-counters text-center mt-30">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="counters-item m-5" style="">
                                    <div class="card">
                                        <i class="fa fa-file mt-4" arial-hidden="true"></i><br>
                                        <strong style="font-size: 30px" data-to="520">520</strong>
                                        <p class="text-success">teacher</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="counters-item m-5" style="height: 150px">
                                    <div class="card">
                                        <i class="fa fa-address-book mt-4" arial-hidden="true"></i><br>
                                        <strong style="font-size: 30px" data-to="520">5620</strong>
                                        <p class="text-success">courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="counters-item m-5" style="height: 150px">
                                    <div class="card">
                                        <i class="fa fa-users mt-4" arial-hidden="true"></i><br>
                                        <strong style="font-size: 30px" data-to="520">1520</strong>
                                        <p class="text-success">members</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="counters-item m-5" style="height: 150px">
                                    <div class="card">
                                        <i class="fa fa-people-arrows mt-4" arial-hidden="true"></i><br>
                                        <strong style="font-size: 30px" data-to="520">32</strong>
                                        <p class="text-success">countries</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endsection
