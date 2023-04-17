@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
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

    <div class="p-3">
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>

    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="my-5 ml-3">
            <a href="{{ route('create.course') }}" class="btn btn-success shadow-lg">Add Course</a>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Course Name</th>
                            <th>Slug</th>
                            <th>Course Image</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($courses->count() > 0)
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->course_id }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->course_slug }}</td>
                                    <td><img width="50" height="50" src="{{ asset($course->course_img) }}" alt=""></td>
                                    <td> @if ($course->course_status == 1)
                                            Active
                                        @elseif ($course->course_status == 0)
                                            Not Active
                                        @endif
                                    </td>
                                    <td>{!! Str::limit($course->course_description, 200, '...') !!}</td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm" href="">
                                            <i class="fas fa-eye">
                                            </i>
                                        </a>
                                        <a class="btn btn-success btn-sm" href="{{route('edit.course', ['id' => $course->course_id])}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{route('delete.course', ['id' => $course->course_id])}}">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection





