@extends('admin.layouts.Admin')
 @section('admin_contents')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">PROMOTION</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Promotions-View</li>
                </ol>
            </div>
            </div>
        </div>
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

    <div class="my-5 ml-3">
        <a href="{{ route('create.promotion') }}" class="btn btn-success shadow-lg">Add Promotion</a>
    </div>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($promotion->count() > 0)
                        @foreach ($promotion as $promotion)
                            <tr>
                                <td>
                                    {{ $promotion->id }}
                                </td>
                                <td>
                                    <img src="{{ asset($promotion->pro_img)  }}" width="100" height="100" alt="">
                                </td>
                                <td>
                                    {{ $promotion->content }}
                                </td>
                                <td>
                                    {{ $promotion->link }}
                                </td>
                                <td>
                                    @if ($promotion->status == 1)
                                        <span class="badge badge-success">Completed</span>
                                    @elseif ($promotion->status == 0)
                                        <span class="badge badge-danger">Failed</span>
                                    @elseif (!empty($promotion->status))
                                        <span class="badge badge-primary">Pending</span>
                                    @endif
                                </td>
                                <td class="project-actions">
                                    <a class="btn btn-success btn-sm" href="{{ route('edit.promotion', ['id' => $promotion->id]) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('delete.promotion', ['id' => $promotion->id]) }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p class="text-center text-warning"><i>NO promotions at the moment...</i></p>
                    @endif
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
