@extends('web.layout.layouts')
@section('content')
    <!-- HOME PAGE -->
    <div class="bg-white">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner  text-white">
                <div class="carousel-item  active">
                    <img class="w-100 caruselz"  style="height:600px" src="{{ asset('assets/images/academia.jpg') }}" alt="...">
                    <div class="caption d-none d-md-block text-center">
                        <p> <strong>You Only Have to Know One thing</strong></p>
                        <h1><strong>YOU CAN LEARN ANYTHING</strong></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. it has survive not only five centuries</p>
                        <button class="rounded-pill btn btn-success text-uppercase w-25">Start Now!</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 caruselz" style="height:600px" src="{{ asset('assets/images/hibiscus-flower-bg.jpg') }}"
                        alt="...">
                    <div class="caption d-none d-md-block text-center">
                        <p> <strong>You Only Have to Know One thing</strong></p>
                        <h1> <strong>YOU CAN LEARN ANYTHING</strong> </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. it has survive not only five centuries</p>
                        <button class="rounded-pill btn btn-success text-uppercase w-25">Start Now!</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 caruselz" style="height:600px" src="{{ asset('assets/images/istockphoto-for-bg.jpg') }}"
                        alt="...">
                    <div class="caption d-none d-md-block text-center">
                        <p> <strong>You Only Have to Know One thing</strong></p>
                        <h1> <strong>YOU CAN LEARN ANYTHING</strong> </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. it has survive not only five centuries</p>
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
                        </div>
                        <div class="about-sev-tag mt-2">
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
        <!-- why choose educare -->
        <div class="mt-5">
            <div class="why Educare">
                <div class="from-the-best">
                    <div class="container py-2">
                        <div class="text-center mt-5">
                            <h2 class="text-uppercase text-black">why chose <span class="text-success">
                                    Educare</span>
                            </h2>
                        </div>
                        <div class="writings mt-3">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus corrupti nesciunt
                                odit necessitatibus maxime aspernatur ab aut, tempora quos, recusandae aliquid
                                molestiae excepturi impedit sed atque unde quas consectetur.
                            </p>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="mb-5">
                                    <img class="w-100" src="{{ asset('assets/images/main-feature.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-2 pt-2">
                                        <i class="fa fa-cloud-download icon"></i>
                                    </div>
                                    <div class="col-10">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="rotex">
                                            <i class="fa fa-paper-plane icon"></i>
                                        </div>

                                    </div>
                                    <div class="col-10">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="rotex">
                                            <i class="fa fa-balance-scale icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-bullhorn icon"></i>
                                    </div>
                                    <div class="col-10">
                                        <h4>RESIDENTIAL SERVICES</h4>
                                        <p>Backed by some of the biggest names in the industry,
                                            Firefox OS is an open platform that fosters greater</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="bg-white py-5 w-100">
                    <div class="text-center">
                        <h2 class="text-uppercase">Our -<span class="text-success">Gallery</span></h2>
                        <p class="heading">Know much about us through our gallery.</p>
                    </div>
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-3 ">
                                <div class="card">
                                    <img src="{{ asset('assets/images/student2.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
                                            incidunt,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/students3.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            voluptatem consectetur, tenetur iusto, nihil repellat sit aliquid vero ipsum
                                            nobis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
                                            incidunt,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
                                            incidunt,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mt-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
                                            incidunt,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mt-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
                                            incidunt,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mt-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
                                            incidunt,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mt-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                                    <div class="p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
                                            incidunt,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </section>
                        </div>
                    </div>

                    <!-- some important factors -->
                    <div class="factors">
                        <div class="text-center">
                            <h2 class="text-uppercase text-black">some important <span class="text-success">
                                    factors</span>
                            </h2>
                        </div>
                        <div class="writings">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus corrupti nesciunt
                                odit necessitatibus maxime aspernatur ab aut, tempora quos, recusandae aliquid
                                molestiae excepturi impedit sed atque unde quas consectetur.
                            </p>
                        </div>
                        <div class="container mt-5">
                            <div class="row number-counters text-center">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="card counters-item" style="">
                                        <div class="border border-secondary m-2">
                                            <i class="fa fa-file mt-4" arial-hidden="true"></i><br>
                                            <strong style="font-size: 30px" data-to="520">520</strong>
                                            <p class="text-success">teacher</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="card counters-item" style="height: 150px">
                                        <div class="border border-secondary m-2">
                                            <i class="fa fa-th mt-4" arial-hidden="true"></i><br>
                                            <strong style="font-size: 30px" data-to="520">5620</strong>
                                            <p class="text-success">courses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="card counters-item" style="height: 150px">
                                        <div class="border border-secondary m-2">
                                            <i class="fa fa-users mt-4" arial-hidden="true"></i><br>
                                            <strong style="font-size: 30px" data-to="520">1520</strong>
                                            <p class="text-success">members</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="card counters-item" style="height: 150px">
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
                        <div class="writings">
                            <p> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius
                                at,
                                adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
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

                            <div class="writings">
                                <p> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed
                                    varius at,
                                    adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies
                                    sapien.
                                </p>
                            </div>
                        </div>

                        <div class="owl-carousel owl-two owl-theme">
                            <div class="container bg-white p-3">
                                <div class="row m-1 ">
                                    <div class="border p-4">
                                        <div class="mt-0">
                                            <img src="{{ asset('assets/images/student2.jpg') }}" alt="">
                                        </div>
                                        <h4 class="text-center">Personal Templete on Themeforest</h4>
                                        <p class="justify-content-center">Mauris accumsan eros eget libero posuere vulputate. Etiam
                                            elit
                                            elit, elementum
                                            sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed,
                                            ultricies
                                            sapien.</p>
                                        <div class="text-center">
                                            <button class="btn btn-success rounded-pill">Read More!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- owl-carousel-three --}}
                        <div class="item  mt-2 bg-white py-2">
                            <div class="text-center ">
                                <h2 class="text-uppercase text-blue">our<span class="text-success">
                                        student's say</span>
                                </h2>
                            </div>
                            <div class="writings">
                                <p> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed
                                    varius at,
                                    adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies
                                    sapien.
                                </p>
                            </div>
                        </div>
                        <div class="owl-carousel owl-three mt-5 owl-theme bg-white">
                            <div class="row m-5 ">
                                <div class="container shadow-lg">
                                    <div class="col-lg-12 col-sm-12 col-md-12 mr-5 border-left border-success">
                                        <div class="mt-3 students-img">
                                            <img src="{{ asset('assets/images/student2.jpg') }}"style="height: 90px; width: 90px;"
                                                class="rounded-circle" alt="">
                                        </div>
                                        <p class="px-3 text-center-1">
                                          <i class="fa fa-solid fa-quote-left text-success"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reiciendis cum rem? Iste cumque animi possimus perspiciatis placeat?
                                        </p>
                                        <h6 class="text-success text-center"> <strong>Jacob Tarkumbur- </strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-5 ">
                                <div class="container shadow-lg">
                                    <div class="col-lg-12 col-sm-12 col-md-12 mr-5 border-left border-success">
                                        <div class="mt-3 students-img">
                                            <img src="{{ asset('assets/images/award.jpg') }}"style="height: 90px; width: 90px;"
                                                class="rounded-circle" alt="">
                                        </div>
                                        <p class="px-3 text-center-1">
                                          <i class="fa fa-solid fa-quote-left text-success"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reiciendis cum rem? Iste cumque animi possimus perspiciatis placeat?
                                        </p>
                                        <h6 class="text-success text-center"> <strong>Atule Jnr- </strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-5 ">
                                <div class="container shadow-lg">
                                    <div class="col-lg-12 col-sm-12 col-md-12 mr-5 border-left border-success">
                                        <div class="mt-3 students-img">
                                            <img src="{{ asset('assets/images/student2.jpg') }}"style="height: 90px; width: 90px;"
                                                class="rounded-circle" alt="">
                                        </div>
                                        <p class="px-3 text-center-1">
                                          <i class="fa fa-solid fa-quote-left text-success"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reiciendis cum rem? Iste cumque animi possimus perspiciatis placeat?
                                        </p>
                                        <h6 class="text-success text-center"> <strong>Terwase Kingsley- </strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-5 ">
                                <div class="container shadow-lg">
                                    <div class="col-lg-12 col-sm-12 col-md-12 mr-5 border-left border-success">
                                        <div class="mt-3 students-img">
                                            <img src="{{ asset('assets/images/peters.jpg') }}"style="height: 90px; width: 90px;"
                                                class="rounded-circle" alt="">
                                        </div>
                                        <p class="px-3 text-center-1">
                                          <i class="fa fa-solid fa-quote-left text-success"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reiciendis cum rem? Iste cumque animi possimus perspiciatis placeat?
                                        </p>
                                        <h6 class="text-success text-center"> <strong>Peter Terkuma- </strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-5 ">
                                <div class="container shadow-lg">
                                    <div class="col-lg-12 col-sm-12 col-md-12 mr-5 border-left border-success">
                                        <div class="mt-3 students-img">
                                            <img src="{{ asset('assets/images/award.jpg') }}"style="height: 90px; width: 90px;"
                                                class="rounded-circle" alt="">
                                        </div>
                                        <p class="px-3 text-center-1">
                                          <i class="fa fa-solid fa-quote-left text-success"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reiciendis cum rem? Iste cumque animi possimus perspiciatis placeat?
                                        </p>
                                        <h6 class="text-success text-center"> <strong>Peter Terkuma- </strong></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
