@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Students-view</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="my-5 ml-3">
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ( $students->count() > 0)
                            @foreach ( $students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->f_name }}</td>
                                    <td>{{ $student->l_name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <span class="btn btn-success p-2">
                                            Mail
                                            <i class="fab fa-telegram-plane text-white"></i>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr> <th colspan="10" class="text-center"> No Admins </th> </tr>
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

