@extends('web.layout.layouts')
@section('content')
<<<<<<< Updated upstream
<div class="row">
    <img class="bg-wrap-2"  src="{{ asset('assets/images/b3.jpg') }}" alt="">
</div>
<div class="container w-100">
        @if (count($errors) > 0)
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        @endif
        <form action="{{ route('process.reg') }}" method="POST">
            @csrf
=======
<div class="w-100 row">
    <div class="row w-100 h-auto">
        <img class="bg-wrap-2 w-100 h-auto"  src="{{ asset('assets/images/b3.jpg') }}" alt="">
    </div>
    <div class="container w-100 d-flex justify-content-center align-content-center">
        <form class="" action="" method="POST">
>>>>>>> Stashed changes
            <div class="contains">
                <div class="heading py-0">
                    <h2 class="text">Register</h2>
                    <p class="text-secondary">please fill this form to create an account</p>
                </div>

                <div class="combined-2 py-2">
                    <div class="form-group">
                        <label for="First Name">
                            <i class="fas fa-user"></i>
                            <b>First Name</b>
                        </label>
<<<<<<< Updated upstream
                        <input type="text" placeholder="First Name" class="form-control" name="first_name" required>
=======
                        <input type="text" placeholder="First Name" class="form-control" name="First Name" required>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                        <label for="Last Name">
                            <i class="fas fa-user"></i>
                            <b>Last Name</b>
                        </label>
<<<<<<< Updated upstream
                        <input type="text" placeholder="Last Name" class="form-control" name="last_name" required>

                        <input type="hidden" name="role" value="4">
                        <input type="hidden" name="status" value="1">

=======
                        <input type="text" placeholder="Last Name" class="form-control" name="Last Name" required>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                        <label for="Gender">
                            <i class="fas fa-users"></i>
                            <b>Email</b>
                        </label>
<<<<<<< HEAD
                        <select id="" class="form-control" name="gender">
                            <option selected value="">choose gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                       </select>
=======
<<<<<<< Updated upstream
                        <input type="text" placeholder="Gender" class="form-control" name="gender" required>
>>>>>>> d268b26a16033958aad8df3ff014a29d9c1c1835
                    </div>
                    <div>
                        <label for="Email">
                            <i class="fas fa-envelope"></i>
                            <b>Email</b>
                        </label>
                        <input type="email" placeholder="Enter Email" class="form-control" name="email"  required>
=======
                        <input type="text" placeholder="User name" class="form-control" name="email" required>
>>>>>>> Stashed changes
                    </div>
                    <div>
                        <label for="password">
                            <i class="fas fa-lock"></i>
                            <b>password</b>
                        </label>
                        <input type="password" placeholder="Enter Password" class="form-control" name="password"  required>
                    </div>
                </div>

                <div class="privacy">
                    <p>By creating an account, you have agree with our
                        <a href="#">Terms & Privacy</a>
                    </p>
                    <button type="submit" class="btn btn-white w-100">
                        Submit
                    </button>
                </div>
<<<<<<< Updated upstream
                    <div class="exist-account">
                        <p>Already have an account?
                            <a href="{{ route('login') }}">sign in</a> ||
                            <a href="{{ route ('register_teachers')}}">Teacher's Sign-Up</a>
                        </p>
                    </div>
=======
                <div class="exist-account">
                    <p>Already have an account?
                        <a href="#">sign in</a>
                    </p>
>>>>>>> Stashed changes
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
