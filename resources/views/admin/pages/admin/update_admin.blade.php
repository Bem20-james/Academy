@extends('admin.layout.admin')
    @section('contents')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin - {{ $admin->f_name }} {{ $admin->l_name }}</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                        @if(count($errors) > 0)
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item text-danger">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="box-footer mr-1">
                            <a href="{{ route('view.admin.users') }}" type="button" class="btn btn-primary float-right"> View Admins <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <form action="{{ route('update.admin.user', ['id' => $admin->id]) }}" method="POST" class="bg-white p-4 mb-5">
                            @csrf
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="formGroupExampleInput">First Name</label>
                                    <input type="text" name="f_name" value="{{ $admin->f_name }}" class="form-control" placeholder="First name" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="formGroupExampleInput">Last Name</label>
                                    <input type="text" name="l_name" value="{{ $admin->l_name }}" class="form-control" placeholder="Enter Last Name" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="formGroupExampleInput">Email</label>
                                    <input type="email" name="email" value="{{ $admin->email }}" class="form-control" placeholder="Enter Email" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="formGroupExampleInput">Phone</label>
                                    <input type="text" name="phone" value="{{ $admin->phone }}" class="form-control" placeholder="Enter Phone" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="formGroupExampleInput">Admin Type</label>
                                    <select name="role" id="" class="form-control" required>
                                        <option value="{{ $admin->role }}" selected>
                                            @if ( $admin->role == 1 )
                                                    Super Admin
                                                @elseif ($admin->role == 2)
                                                    Store Staff
                                                @elseif ($admin->role == 4)
                                                    Admin Staff
                                                @elseif ($admin->role == 5)
                                                    Delivery Staff
                                                @elseif ($admin->role == 6)
                                                    Developer
                                            @endif
                                        </option>
                                        <option value="2">Store Staff</option>
                                        <option value="4">Admin Staff</option>
                                        <option value="5">Delivery Staff</option>
                                        <option value="6">Developer</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="formGroupExampleInput">Admin Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_status" id="inlineRadio1" value="1" @if ($admin->status = 1)  checked @endif>
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_status" id="inlineRadio2" value="0" @if ($admin->status = 0)  checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary form-control"><h5>UPDATE ADMIN INFO</h5></button>
                                </div>
                            </div>
                        </form>

                        <form action="{{ route('update.admin.pass', ['id' => $admin->id]) }}" method="POST" class="bg-white p-4 mt mb-5">
                            @csrf
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="formGroupExampleInput">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary form-control"><h5>UPDATE PASSWORD</h5></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection