@extends('admin.layouts.Admin')
@section('admin_contents')


 <!-- Main-Hearder -->
 <nav class="navbar navbar-expand-lg navbar-light p-0 m-0 d-flex" style="background-color: #151F4F;">
    <div class="container">
        <a href="></a>
        <button class="navbar-toggler p-0 m-0" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav justify ml-auto homepage-links">
            <li class="nav-item active p-0 m-0">
                <a class="nav-link text-white p-4 mx-2 h-100" href="">JSS 1<span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-4 mx-2" href="">JSS 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-4 mx-2" href="">JSS 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-4 mx-2" href="">SSS 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-4 mx-2" href="">SSS 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-4 mx-2" href="">SSS 3</a>
            </li>
        </ul>
    </div>
</nav>
</header>
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
                            <th><a href=""><button class="btn btn-warning text-dark">Edit</button></a></th>
                            <th><a href=""><button class="btn btn-success text-dark">Update</button></a></th>
                            <th><a href=""><button class="btn btn-danger text-dark">Delete</button></a></th>
                        </tr>
                    </thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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

