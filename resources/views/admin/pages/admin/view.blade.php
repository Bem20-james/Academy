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
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">View</li>
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
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-12 mt-3 mb-3 p-2">
                            <div class="box-footer mr-1">
                                <a href="{{ route('add.admin.user') }}" type="button" class="btn btn-primary float-right"> Add Admins <i class="fa fa-plus"></i></a>
                            </div>
                        </div>

                        <!-- /.card-header -->
                    <div class="card-body p-2">
                        <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($admins->count() > 0)  
                                    @foreach ($admins as $admin)
                                        @if ( $admin->role !== 3 )
                                            <tr>
                                                <td>{{ $admin->id }}</td>
                                                <td>{{ $admin->f_name }} {{ $admin->l_name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
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
                                                </td>
                                                <td>
                                                    @if ($admin->status == 1)
                                                            Active
                                                        @elseif ($admin->status == 0)
                                                            Suspended
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ( Auth::user()->id == 1)
                                                        <a href="{{ route('edit.admin.user', ['id' => $admin->id]) }}">
                                                            <span class="badge badge-success"><i class="fa fa-edit"></i></span>
                                                        </a>
                                                        @if ( $admin->id !== 1)
                                                            <a href="{{ route('delete.admin.user', ['id' => $admin->id]) }}">
                                                                <span class="badge badge-danger"><i class="fa fa-trash"></i></span>
                                                            </a>
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @else
                                        <tr> <th colspan="10" class="text-center"> No Admins </th> </tr>
                                @endif
                            </tbody>
                        </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                  <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
