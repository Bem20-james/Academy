@extends('admin.layouts.Admin')
@section('admin_contents')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Compose</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Compose</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class=" ml-3 mb-4">
                        <a href="{{ route('view_instructors') }}" class="btn btn-success shadow-lg">View Instructor</a>
                    </div>
                </div>
                <!-- Main content -->
                <section class="content" id="courseAttr">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="card-body">
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
                                </div>
                                @if (session('notification'))
                                    <h3 class="btn btn-primary w-100">
                                        {{ session('notification') }}
                                    </h3>
                                @endif

                                @if (count($errors) > 0)
                                    <ul class="list-group">
                                        @foreach ($errors->all() as $error)
                                            <li class="list-group-item text-danger">
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <form class="px-4 mb-4" action="store.student" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="file">
                                                <i class="fas fa-user"></i>
                                                Profile</label>
                                            <input type="file" class="form-control" name="image" placeholder="image"
                                                max="400">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="first_name">
                                                <i class="fas fa-user"></i>
                                                Student FirstName</label>
                                            <input type="text" class="form-control" name="first_name"
                                                placeholder="FirstName" max="400">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="last_name">
                                                <i class="fas fa-user"></i>
                                                Student LastName</label>
                                            <input type="text" class="form-control" name="last_name"
                                                placeholder="LastName" max="400">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="department">
                                                <i class="fas fa-list"></i>
                                                Department</label>
                                            <input type="text" class="form-control" name="department"
                                                placeholder="Department" max="400">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="class">
                                                <i class="fas fa-home"></i>
                                                Class</label>
                                            <input type="text" class="form-control" name="class" placeholder="class"
                                                max="400">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="post">
                                                <i class="fas fa-arrow"></i>
                                                Post</label>
                                            <input type="text" class="form-control" name="class" placeholder="post"
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
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="number">
                                                <i class="fas fa-count"></i>
                                                <b>Admission Number</b>
                                            </label>
                                            <input type="number" class="form-control" name="admission"
                                                placeholder="admission number" max="400">
                                        </div>
                                    </div>

                                    <input type="hidden" name="role" value="4">

                                    <input class="form-check-input" type="hidden" name="status" value="1">
                                    <div class="form-group col-md-12">
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
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-success float-right mt-5">Submit</button>
                                </form>

                                <div class="row container my-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <a href="{{ route('admin.dashboard') }}" type="button"
                                            class="btn btn-default float-left">
                                            <i class="fa fa-angle-left"></i> Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

    @endsection
