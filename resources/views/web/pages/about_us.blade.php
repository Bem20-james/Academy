@extends('web.layout.layouts')
@section('content')
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
                            <form class="form-inline my-2 my-lg-0" action="" method="">
                                <button class="btn btn-outline-success btn-success text-white my-2 my-sm-0" name="btn_login"
                                    type="submit">See More &rarr;</button>
                            </form>
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

    <!-- Get Stated Now -->
    <div class=" px-5" style="background-color: rgb(0, 137, 55);">
        <div class="row w-100">
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
                        NOW</button> Append bootstrap
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
