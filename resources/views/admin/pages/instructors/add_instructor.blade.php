@extends('admin.layouts.Admin')
@section('admin_contents')
    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <section class="content-header bg-dark pinned-2">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Courses</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Courses-view</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="my-5 ml-3">
            <a href="{{ route('view_instructors') }}" class="btn btn-success shadow-lg">View Instructor</a>
        </div>

        <!-- Main content -->
        <section class="content" id="courseAttr">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        {{-- <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    @if (count($errors) > 0)
                                        <ul class="list-group">
                                            @foreach ($errors->all() as $error)
                                                <li class="list-group-item text-danger">
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div> --}}

                        <form class="px-4 mb-4" action="{{ route('store_instructor') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="first_name">
                                        <i class="fas fa-user"></i>
                                        Instructor FirstName</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="FirstName"
                                        max="400">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="last_name">
                                        <i class="fas fa-user"></i>
                                        Instructor LastName</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="LastName"
                                        max="400">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="department">
                                        <i class="fas fa-list"></i>
                                        Department</label>
                                    <input type="text" class="form-control" name="department" placeholder="Department"
                                        max="400">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="subject">
                                        <i class="fas fa-book"></i>
                                        Subject</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Department"
                                        max="400">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="class">
                                        <i class="fas fa-home"></i>
                                        Class</label>
                                    <input type="text" class="form-control" name="class" placeholder="Department"
                                        max="400">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="phone">
                                        <i class="fas fa-phone"></i>
                                        Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Department"
                                        max="400">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="email">
                                        <i class="fas fa-envelope"></i>
                                        <b>Instructor Email</b>
                                    </label>
                                    <input type="text" class="form-control" name="email" placeholder="Email"
                                    max="400">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="Gender">
                                        <i class="fas fa-users"></i>
                                        <b>Gender</b>
                                    </label>
                                    <select id="" class="form-control" name="gender">
                                        <option selected value="">choose gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                   </select>
                                </div>
                            </div>

                            <input type="hidden" name="role" value="3">

                            <input class="form-check-input" type="hidden" name="status" value="1">
                            {{-- <div class="form-group col-md-12">
                                <label for="course-status">Instructor Status</label>
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                            value="1">
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                            value="0">
                                        <label class="form-check-label" for="inlineRadio2">Inactivate</label>
                                    </div>
                                </div>
                            </div> --}}

                            <button type="submit" class="btn btn-lg btn-success float-right mt-5">Submit</button>
                        </form>

                        <div class="row container my-3">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <a href="{{ route('admin.dashboard') }}" type="button" class="btn btn-default float-left">
                                    <i class="fa fa-angle-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
