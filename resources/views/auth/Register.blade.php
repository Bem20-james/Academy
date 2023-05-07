@extends('web.layout.layouts')
@section('content')
<div class="w-100 row">
    <div class="row w-100 h-auto">
        <img class="bg-wrap-2 w-100 h-auto"  src="{{ asset('assets/images/b3.jpg') }}" alt="">
    </div>
    <div class="container w-100 d-flex justify-content-center align-content-center">
        <form class="" action="" method="POST">
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
                        <input type="text" placeholder="First Name" class="form-control" name="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Last Name">
                            <i class="fas fa-user"></i>
                            <b>Last Name</b>
                        </label>
                        <input type="text" placeholder="Last Name" class="form-control" name="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Gender">
                            <i class="fas fa-users"></i>
                            <b>Email</b>
                        </label>

                        <select id="" class="form-control" name="gender">
                            <option selected value="">choose gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                       </select>
                        <input type="text" placeholder="Gender" class="form-control" name="gender" required>

                    </div>
                    <div>
                        <label for="Email">
                            <i class="fas fa-envelope"></i>
                            <b>Email</b>
                        </label>
                        <input type="email" placeholder="Enter Email" class="form-control" name="email"  required>
                        <input type="text" placeholder="User name" class="form-control" name="email" required>
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
                    <div class="exist-account">
                        <p>Already have an account?
                            <a href="{{ route('login') }}">sign in</a> ||
                            <a href="{{ route ('register_teachers')}}">Teacher's Sign-Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
