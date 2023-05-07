@extends('web.layout.layouts')
@section('content')
    <!-- About Us -->
    <section class="py-5">
        <div class="container ml-3 mr-3">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-uppercase text-black">About Academia<span class="text-success">
                                    Courses</span></h2>
                        </div>
                    </div>
                    <div class="about-sev-tag mt-4">
                        <h4 class="text-success">A little about us and a breif history of how we started.</h4>
                        <p>Education is the passport to the future, for tomorrow belongs
                            to those who prepare for it today.</p>
                        <ul>
                            <li class="check"><i class="fa fa-check-square bg-success" aria-hidden="true"></i> Educating
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

    {{-- brief history --}}
    <div class="history">
        <div class="row w-100">
            <div class="col-lg-12">
                    <div class="container text-dark mt-4 mb-5 bg">
                        <h2>Brief History of Our School</h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut officiis nulla, consequatur quia
                            voluptates eum. Veritatis ea maxime numquam eum, iste iure optio nihil reprehenderit odio non ducimus
                            autem perferendis!
                            Officiis facilis cumque, sapiente cum facere inventore at, nostrum aspernatur, illum eligendi minima?
                            Blanditiis dignissimos, nesciunt vel itaque rerum voluptatem nemo provident maxime aliquid, consequuntur
                            hic quam accusantium, doloremque perferendis?
                        </p>
                    </div>
            </div>
        </div>
    </div>

    {{-- some important facts --}}
    <div class="bg-light py-5 w-100">
        <div class="text-center">
            <h2 class="text-uppercase">Some important <span class="text-success">facts</span></h2>
            <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor<br>
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation<br>
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 ">
                    <div class="bg-white p-3">
                        <div class="card">
                            <div class="number-counters text-center mt-30">
                                <!-- first count item -->
                                <div class="counters-item counter"> <i class="fa fa-file text-success" aria-hidden="true"></i><br>
                                    <strong data-to="40">40</strong>
                                    <p class="text-success">teachers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="bg-white p-3">
                        <div class="card">
                            <div class="number-counters text-center mt-30 bg-white">
                                <!-- first count item -->
                                <div class="counters-item counter"> <i class="fa fa-th text-success" aria-hidden="true"></i><br>
                                    <strong data-to="4">4</strong>
                                    <p class="text-success">Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="bg-white p-3">
                        <div class="card">
                            <div class="number-counters text-center mt-30 bg-white">
                                <!-- first count item -->
                                <div class="counters-item counter"> <i class="fa fa-users text-success" aria-hidden="true"></i><br>
                                    <strong data-to="2019">2019</strong>
                                    <p class="text-success">Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="bg-white p-3">
                        <div class="card">
                            <div class="number-counters text-center mt-30 bg-white">
                                <!-- first count item -->
                                <div class="counters-item counter"> <i class="fa fa-th-list text-success" aria-hidden="true"></i><br>
                                    <strong data-to="520">17</strong>
                                    <p class="text-success">Blocks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Our Gallery --}}
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque incidunt,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/students3.jpg') }}" alt="">
                        <div class="p-3">
                            <p>
                                voluptatem consectetur, tenetur iusto, nihil repellat sit aliquid vero ipsum nobis
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                        <div class="p-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque incidunt,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                        <div class="p-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque incidunt,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                        <div class="p-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque incidunt,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                        <div class="p-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque incidunt,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                        <div class="p-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque incidunt,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/students.jpg') }}" alt="">
                        <div class="p-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque incidunt,
                            </p>
                        </div>
                    </div>
                </div>
    </section>

    <!-- Get Stated Now -->
    <div class=" px-5" style="background-color: rgb(0, 137, 55);">
        <div class="row w-100 py-4">
            <div class="col-lg-6 ">
                <ul class="">
                    <li class="d-block mt-2">
                        <a class="text-white" href="#"><i class=" mb-0"></i>
                            <h2>Lorem ipsum dolor sit amet</h2>
                        </a>
                        <a class="text-white" href="#"><i class=" mt-0">
                                <h6>Lorem ipsum dolor sit amet, consectetur</h6>
                            </i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 items py-3">
                <ul class="d-flex justify-content-end">
                    <li class="d-block mt-2 align-items-end">
                        <button class="btn btn-outline-white bg-white text-black" name="btn_get_started">GET STARTED
                            NOW</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
