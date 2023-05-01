@extends('web.layout.layouts')
@section('content')
    <!-- HOME PAGE -->
<<<<<<< Updated upstream

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

=======
    <div class="bg-white">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-white">
                <div class="carousel-item active">
                    <img class="w-100" style="height:600px" src="{{ asset('assets/images/academia.jpg') }}" alt="...">
                    <div class="caption d-none d-md-block">
                        <p> <strong>You Only Have to Know One thing</strong></p>
                        <h1>YOU CAN LEARN ANYTHING</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <button class="rounded-pill btn btn-success text-uppercase w-25">Start Now!</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" style="height:600px" src="{{ asset('assets/images/hibiscus-flower-bg.jpg') }}"
                        alt="...">
                    <div class="caption d-none d-md-block ">
                        <p> <strong>You Only Have to Know One thing</strong></p>
                        <h1>YOU CAN LEARN ANYTHING</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <button class="rounded-pill btn btn-success text-uppercase w-25">Start Now!</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" style="height:600px" src="{{ asset('assets/images/istockphoto-for-bg.jpg') }}"
                        alt="...">
                    <div class="caption d-none d-md-block">
                        <p> <strong>You Only Have to Know One thing</strong></p>
                        <h1>YOU CAN LEARN ANYTHING</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <button class="rounded-pill btn btn-success text-uppercase w-25">Start Now!</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- About Us -->
        <section class="py-5">
            <div class="container ml-3 mr-3">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="text-uppercase text-black">About High-edu<span class="text-success">
                                        Courses</span></h2>
                            </div>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        <div class="">
            <div class="why Educare">
                <div class="from-the-best">
                    <div class="container py-4">
                        <div class="text-center">
=======
        <!-- why choose educare -->
        <div class="mt-5">
            <div class="why Educare">
                <div class="from-the-best">
                    <div class="container py-2">
                        <div class="text-center mt-5">
>>>>>>> Stashed changes
                            <h2 class="text-uppercase text-black">why chose <span class="text-success">
                                    Educare</span>
                            </h2>
                        </div>
<<<<<<< Updated upstream
                        <div class="text-center">
=======
                        <div class="text-center mt-5">
>>>>>>> Stashed changes
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus corrupti nesciunt
                                <br>
                                odit necessitatibus maxime aspernatur ab aut, tempora quos, recusandae aliquid <br>
                                molestiae excepturi impedit sed atque unde quas consectetur.
                            </p>
                        </div>

<<<<<<< Updated upstream
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="">
=======
                        <div class="row mt-5">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="mb-5">
>>>>>>> Stashed changes
                                    <img class="w-100" src="{{ asset('assets/images/main-feature.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-1">
<<<<<<< Updated upstream
                                        <i class="fa-solid fa-facebook-square"></i>
=======
                                        <i class="fa fa-cloud-download"></i>
>>>>>>> Stashed changes
                                    </div>
                                    <div class="col-11">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
<<<<<<< Updated upstream
                                        <i class="fa-solid fa-facebook-square"></i>
=======
                                        <i class="fa fa-paper-plane"></i>
>>>>>>> Stashed changes
                                    </div>
                                    <div class="col-11">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
<<<<<<< Updated upstream
                                        <i class="fa-solid fa-facebook-square"></i>
=======
                                        <i class="fa fa-balance-scale"></i>
>>>>>>> Stashed changes
                                    </div>
                                    <div class="col-11">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
<<<<<<< Updated upstream
                                        <i class="fa-solid fa-facebook-square"></i>
=======
                                        <i class="fa fa-bullhorn"></i>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream


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
=======
                </div>

                <!-- Get started -->
                <div class="get-started">
                    <img src="{{ asset('assets/images/ladycomputer.jpg') }}" class="images d-block w-100"
                        style="height:600px;" alt="Los Angeles">
                    <div class="image-text">

                        <h2><strong>We Are With You Every Step <br> Get Started Easily</strong> </h2>
                        <p>Make Your Website Faster, Better & Better Support.</p>
                        <div class="mt-5">
                            <button class="btn btn-success rounded-pill"> <strong>GET STARTED NOW!</strong> </button>
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
                                    <img src="{{ asset('assets/images/teee.jpg') }}" alt="" srcset="">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

                        </div>
=======
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

            <!-- some important factors -->
            <div class="factors">
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
                            <div class="card counters-item m-5" style="">
                                <div class="border border-secondary m-2">
                                    <i class="fa fa-file mt-4" arial-hidden="true"></i><br>
                                    <strong style="font-size: 30px" data-to="520">520</strong>
                                    <p class="text-success">teacher</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="card counters-item m-5" style="height: 150px">
                                <div class="border border-secondary m-2">
                                    <i class="fa fa-th mt-4" arial-hidden="true"></i><br>
                                    <strong style="font-size: 30px" data-to="520">5620</strong>
                                    <p class="text-success">courses</p>
                                </div>
                                <div class="border-inner">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="card counters-item m-5" style="height: 150px">
                                <div class="border border-secondary m-2">
                                    <i class="fa fa-users mt-4" arial-hidden="true"></i><br>
                                    <strong style="font-size: 30px" data-to="520">1520</strong>
                                    <p class="text-success">members</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="card counters-item m-5" style="height: 150px">
                                <div class="border border-secondary m-2">
                                    <i class="fa fa-th-list mt-4" arial-hidden="true"></i><br>
                                    <strong style="font-size: 30px" data-to="520">32</strong>
                                    <p class="text-success">countries</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- learn from the best -->
        <div class="">
            <div class="bg-white py-5">
                <div class="text-center ">
                    <h2 class="text-uppercase text-black">learn from<span class="text-success">
                            the best</span>
                    </h2>
                </div>
                <hr>
                <hr>
                <div class="text-center">
                    <p> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at,
                        adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                    </p>
                </div>

            </div>

            <div class="owl-carousel owl-one owl-theme bg-black">
                <div class="item">
                    <div class="card px-3">
                        <img src="{{ asset('assets/images/student2.jpg') }}" alt="" srcset="">
                    </div>
                    <h4 class="text-center text-uppercase">peterson andy</h4>
                    <p class="text-center">Teacher</p>
                </div>
                <div class="item">
                    <div class="card px-3">
                        <img src="{{ asset('assets/images/students.jpg') }}" alt="" srcset="">
                    </div>
                    <h4 class="text-center text-uppercase">Jacob Ordus</h4>
                    <p class="text-center">Teacher</p>
                </div>
                <div class="item">
                    <div class="card px-3">
                        <img src="{{ asset('assets/images/students3.jpg') }}" alt="" srcset="">
                    </div>
                    <h4 class="text-center text-uppercase">Patrick kelly</h4>
                    <p class="text-center">Teacher</p>
                </div>
                <div class="item">
                    <div class="card px-3">
                        <img src="{{ asset('assets/images/student2.jpg') }}" alt="" srcset="">
                    </div>
                    <h4 class="text-center text-uppercase">a.y theddeus</h4>
                    <p class="text-center">Teacher</p>
                </div>
                <div class="item">
                    <div class="card px-3">
                        <img src="{{ asset('assets/images/ladycomputer.jpg') }}" alt="" srcset="">
                    </div>
                    <h4 class="text-center text-uppercase">ukaa patience</h4>
                    <p class="text-center">Teacher</p>
                </div>
                <div class="item">
                    <div class="card px-3">
                        <img src="{{ asset('assets/images/students3.jpg') }}" alt="" srcset="">
                    </div>
                    <h4 class="text-center text-uppercase">atule peter</h4>
                    <p class="text-center">Teacher</p>
                </div>
            </div>

            <div class="peter mb-3">
                <div class="item  py-5">
                    <div class="text-center ">
                        <h2 class="text-uppercase text-black">latest<span class="text-success">
                                news</span>
                        </h2>
                    </div>
                    <hr>
                    <hr>
                    <div class="text-center">
                        <p> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at,
                            adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                        </p>
                    </div>
                </div>

                <div class="owl-carousel owl-two owl-theme bg-black">
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/student2.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
                        <div class="text-center button">
                            <button class="btn btn-success rounded-pill w-25">Read More!</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/students.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text ">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
                        <div class="text-center">
                            <button class="btn btn-success rounded-pill w-25">Read More!</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/students3.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text ">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
                        <div class="text-center">
                            <button class="btn btn-success rounded-pill w-25">Read More!</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/student2.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text ">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
                        <div class="text-center">
                            <button class="btn btn-success rounded-pill w-25">Read More!</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/ladycomputer.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
                        <div class="text-center">
                            <button class="btn btn-success rounded-pill w-25">Read More!</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/students3.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
                        <div class="text-center">
                            <button class="btn btn-success rounded-pill w-25">Read More!</button>
                        </div>
                    </div>
                </div>
                {{-- owl-carousel-three --}}
                <div class="item bg-white  py-5">
                    <div class="text-center ">
                        <h2 class="text-uppercase text-blue">our<span class="text-success">
                                student's say</span>
                        </h2>
                    </div>
                    <hr>
                    <hr>
                    <div class="text-center">
                        <p> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at,
                            adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                        </p>
                    </div>
                </div>
                <div class="owl-carousel owl-three mt-5 owl-theme bg-white">
                    <div class="row">
                        <div class="container rounded-circle outline">
                            <div class="rounded-circle outline">
                                <img src="{{ asset('assets/images/student2.jpg') }}" class="rounded-circle carocycle"
                                alt="" srcset="">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="item rounded-circle p-5">
                        <div class="pictures">
                            <img src="{{ asset('assets/images/student2.jpg') }}" class="rounded-circle carocycle"
                                alt="" srcset="">
                        </div>
                    </div> --}}


                    <div class="item">
                        <div class="card ">
                            <img src="{{ asset('assets/images/students.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text ">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>

                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/students3.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text ">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>

                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/student2.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text ">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>

                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/ladycomputer.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
                    </div>
                    <div class="item">
                        <div class="card px-3">
                            <img src="{{ asset('assets/images/students3.jpg') }}" alt="" srcset="">
                        </div>
                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                        <p class="text-center carol-text">Mauris accumsan eros eget libero posuere vulputate. Etiam elit
                            elit, elementum
                            sed varius at, adipiscing vitae est. <br> Sed nec felis pellentesque, lacinia dui sed, ultricies
                            sapien.</p>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        @endsection
