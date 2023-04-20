@extends('web.layout.layouts')
@section('content')
<div class="row">
    <img class="bg-wrap-2"  src="{{ asset('assets/images/b3.jpg') }}" alt="">
</div>
<div class="container w-100">
        <form action="">
            <div class="contains">
                <div class="heading py-0">
                    <h2 class="text">Register</h2>
                    <p class="text-secondary">please fill this form to create and account</p>
                </div>
                    
                <div class="combined-2 py-2">
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-user"></i>
                            <b>First Name</b>
                        </label>
                        <input type="text" placeholder="First Name" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-user"></i>
                            <b>Last Name</b>
                        </label>
                        <input type="text" placeholder="Last Name" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-users"></i>
                            <b>Gender</b>
                        </label>
                        <input type="text" placeholder="Gender" class="form-control" name="email" required>
                    </div>
                    <div>
                        <label for="password">
                            <i class="fas fa-lock"></i>
                            <b>password</b>
                        </label>
                        <input type="numbers" placeholder="Enter Password" class="form-control" name="Password"  required>
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
                            <a href="#">sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
