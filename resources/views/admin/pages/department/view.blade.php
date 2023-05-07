@extends('admin.layouts.Admin')
@section('admin_contents')
    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Department</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="my-5 ml-3">
                        <a href="{{ route('add.department') }}" class="btn btn-success shadow-lg">Add Department</a>
                    </div>
                </div>

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">

                    <div class="card-body p-0">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Department</th>
                                    <th>Date Added</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($dept->count() > 0)
                                    @foreach ($dept as $dept)
                                        <tr>
                                            <td>{{ $dept->id }}</td>
                                            <td>{{ $dept->department }}</td>
                                            <td>{{ $dept->created_at }}</td>
                                            <td> @if ($dept->status == 1)
                                                    Active
                                                @elseif ($dept->status == 0)
                                                    Not Active
                                                @endif
                                            </td>
                                            <td>{{$dept->desc }}</td>
                                            <td class="project-actions">
                                                <a class="btn btn-primary btn-sm" href="">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                <a class="btn btn-success btn-sm" href="{{route('edit.department', ['id' => $dept->id])}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="{{route('delete.department', ['id' => $dept->id])}}">
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
<!-- main content -->

@endsection




