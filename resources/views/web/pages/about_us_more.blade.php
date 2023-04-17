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
@endsection
