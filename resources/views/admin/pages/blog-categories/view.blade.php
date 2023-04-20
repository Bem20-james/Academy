@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blog Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Blogs Categories-view</li>
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
            <a href="{{ route('create.blogcategories') }}" class="btn btn-success shadow-lg">Add Blog Category</a>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogcat as  $blogcat)
                            <tr>
                                <td>{{$blogcat->id}}</td>
                                <td>{{$blogcat->blogcat_name}}</td>
                                <td>{{$blogcat->blogcat_slug}}</td>
                                <td><img src="{{ asset($blogcat->blogcat_image)  }}" width="100" height="100" alt=""></td>
                                <td>
                                    @if ($blogcat->blogcat_status == 1)
                                        active
                                    @elseif ($blogcat->blogcat_status == 0)
                                        not active
                                    @endif
                                </td>
                                <td>{{$blogcat->blogcat_description}}</td>
                                <td class="project-actions">
                                    <a class="btn btn-primary btn-sm" href="">
                                        <i class="fas fa-eye">
                                        </i>
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{ route('edit.blogcategories', ['id' =>$blogcat->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('delete.blogcategories', ['id' =>$blogcat->id]) }}">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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



