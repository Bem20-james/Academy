@extends('web.layout.layouts')
@section('content')
<div class="row">
    <img class="bg-wrap-2"  src="{{ asset('assets/images/b3.jpg') }}" alt="">
</div>
<div class=" w-100">
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
                        <input type="text" placeholder="First Name" class="form-control" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="Last Name">
                            <i class="fas fa-user"></i>
                            <b>Last Name</b>
                        </label>
                        <input type="text" placeholder="Last Name" class="form-control" name="last_name" required>

                        <input type="hidden" name="role" value="3">

                    </div>
                    <div class="form-group">
                        <label for="Gender">
                            <i class="fas fa-users"></i>
                            <b>Gender</b>
                        </label>
                        <input type="text" placeholder="Gender" class="form-control" name="gender" required>
                    </div>
                    <div>
                        <label for="Email">
                            <i class="fas fa-envelope"></i>
                            <b>Email</b>
                        </label>
                        <input type="email" placeholder="Enter Email" class="form-control" name="email"  required>
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
                        <button type="submit" class="btn bg-color w-100">
                            Submit
                        </button>
                </div>
                    <div class="exist-account">
                        <p>Already have an account?
                            <a href="{{ route('login') }}">sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
