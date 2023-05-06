@extends('web.layout.layouts')
@section('content')
    <div class="w-100">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-12 text_on_image">
                <img class="first-img d-block" src="{{ asset('assets/images/ladycomputer.jpg') }}">
                <div class="contact text-white">
                    <h4><b>Contact Us</b></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-7 mt-5 mb-0">
                <h5 class="text-secondary">SEND YOUR MESSAGE</h5>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="form-control mt-2 mb-4" name="name" placeholder="name" type="text">
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control mt-2 mb-4" name="email" placeholder="Email" type="email">
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control bg-light" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-success w-50 my-3">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 contact-info">
                <h6 class="text-secondary">CONTACT INFO</h6>
                <div class="contact-text">
                    <p><span class="text-secondary">+2348134519778</span></p>
                    <p><span class="text-secondary">Advanztek@gmail.com</span></p>
                    <p><span class="text-secondary">N0.10 High tension road<br>Nasarawa state</span></p>
                </div>
                <h5 class="text-secondary">SOCIAL MEDIA</h5>
                <div class="#">
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="google mx-3"><i class="fab fa-google-plus"></i></a>
                    </a><a href="#" class="twitter mx-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="pinterest mx-3"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="blog mx-3"><i class="fas fa-rss"></i></a>
                    <a href="#" class="dribbble mx-3"><i class="fab fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
