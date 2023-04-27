<header class="">
    <!-- Head -->
    <div class="top-head">
        <div class="row w-100 m-0 p-0">
            <div class="col-lg-6 pt-2">
                <ul class="m-0 p-0">
                    <li class="d-block">
                        <i class="fa-solid fa-envelope mr-2"></i>academia@gmail.com</a>
                        <i class="fa-solid fa-phone mr-2"></i>+2348134519778</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 pt-2">
                <ul class="d-flex justify-content-end register">
                    <li class="d-block align-items-end">
                        <a class="items " href="{{ route('register') }}"><i class="mr-3"></i>Register</a>
                        |
                        <a class="items mr-3" href="{{ route('login') }}"><i class="mr-1"></i>Login</a>
                        <a class="items" href="#"><i class="fa-brands fa-facebook ml-5 mr-4 "></i></a>
                        <a class="items" href="#"><i class="fa-brands fa-whatsapp mr-4 "></i></a>
                        <a class="items" href="#"><i class="fa-brands fa-twitter mr-4 "></i></a>
                        <a class="items" href="#"><i class="fa-brands fa-instagram mr-4 "></i></a>
                        <a class="items" href="#"><i class="fa-brands fa-google-plus mr-3 "></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main-Hearder -->
    <nav class="navbar navbar-expand-lg navbar-light p-0 m-0 d-flex" style="background-color: #151F4F;">
        <div class="container">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-academia.png') }}" width="80px"
                    height="auto" alt="Academia Logo"></a>
            <button class="navbar-toggler p-0 m-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav justify ml-auto homepage-links">
                <li class="nav-item active p-0 m-0">
                    <a class="nav-link text-white p-4 mx-2 h-100" href="{{ route('index') }}">Home<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-4 mx-2" href="{{ route('about_us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-4 mx-2" href="{{ route('index') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-4 mx-2" href="{{ route('index') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-4 mx-2" href="{{ route('index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-4 mx-2" href="{{ route('index') }}">Gallery</a>
                </li>
            </ul>
            <a href="{{ route('login') }}"><button class="btn btn-outline-success btn-success text-white my-2 my-sm-0"
                type="submit">Login</button></a>
        </div>
    </nav>
</header>
