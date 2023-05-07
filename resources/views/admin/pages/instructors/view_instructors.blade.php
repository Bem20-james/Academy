@extends('admin.layouts.Admin')
@section('admin_contents')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 mb-1">
                        <h1>Compose</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Compose</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="ml-3">
                                <a href="{{ route('add_instructor') }}" class="btn btn-success shadow-lg">Add Instructor</a>
                            </div>
                        </div>
                    </div>
              {{-- Main content --}}
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
                                            <th>#</th>
                                            <th>Profile</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($instructors->count() > 0)
                                        @foreach ($instructors as $instructor)
                                            <tr>
                                                <td>{{ $instructor->id }}</td>
                                                <td>{{ $instructor->first_name }}</td>
                                                <td>{{ $instructor->last_name }}</td>
                                                <td>{{ $instructor->email }}</td>
                                                <td>
                                                    @if ($instructor->user_status == 1)
                                                    <span class="p-2 text-bold badge badge-success"> active </span>
                                                    @elseif ($instructor->user_status == 0)
                                                        <span class="p-2 text-bold badge badge-warning"> not active </span>
                                                    @endif
                                                </td>
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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><img src="{{ asset('assets/images/jacob.jpg')}}" alt="" style="height: 76px"></td>
                                            <td>Elder</td>
                                            <td>Jacob</td>
                                            <td>1</td>
                                            <td><span class="btn btn-success p-2">
                                                    View
                                                    <i class="fab fa-eye text-white"></i>
                                                </span>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </section>
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
    </div>
@endsection
