@extends('web.layout.layouts')
@section('content')

                    <!-- HOME PAGE -->
    <div class="">
        <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

                    <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset ('assets/images/peters.jpg')}}" class="w-100" alt="slide 1">
                    <div class="carousel-caption">
                        <h2 class="text-uppercase">proudly, advanztek to the world</h2>
                        <p class="text-uppercase">we are students of advanztek</p>
                        <i>
                            <a href=""class="text-uppercase">peter terlumun atule</a>
                        </i> 
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset ('assets/images/academia.jpg')}}" alt="slide 2">
                    <div class="carousel-caption">
                        <h2 class="text-uppercase">proudly, advanztek to the world</h2>
                        <p class="text-uppercase">we are students of advanztek</p>
                        <i>
                            <a href=""class="text-uppercase">peter terlumun atule</a>
                        </i> 
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset ('assets/images/student smile.webp')}}" alt="New York">
                    <div class="carousel-caption">
                        <h2 class="text-uppercase">proudly, advanztek to the world</h2>
                        <p class="text-uppercase">we are students of advanztek</p>
                        <i>
                            <a href=""class="text-uppercase">peter terlumun atule</a>
                        </i> 
                    </div>
                </div>
            </div>

                    <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-">
                <h2></h2>
            </div>
        </div>

    </div>
@endsection


