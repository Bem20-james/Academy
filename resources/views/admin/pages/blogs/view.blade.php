@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blogs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Blogs-view</li>
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
            <a href="{{ route('create.blogs') }}" class="btn btn-success shadow-lg">Add Blog</a>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Blog ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($return->count() > 0)
                        @foreach ($return as $return)
                            <tr>
                                <td>{{$return->id }}</td>
                                <td>{{$return->blog_title }}</td>
                                <td>
                                    {{-- @if ($return->media_type == "img" ) --}}
                                        <img style="width: 150px; height: auto;" src="{{ asset($return->blog_image) }}" alt="">
                                    {{-- @endif --}}
                                </td>
                                <td>
                                    @if ($return->blog_status == 1)
                                        Active
                                    @elseif ($return->blog_status == 0)
                                        Not Active
                                    @endif
                                </td>
                                <td>{!! Str::limit($return->blog_content, 30, '...') !!}</td>
                                <td class="project-actions">
                                    <a class="btn btn-primary btn-sm" href="">
                                        <i class="fas fa-eye">
                                        </i>
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{ route('edit.blogs', ['id' =>$return->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('delete.blogs', ['id' =>$return->id]) }}">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr> <th colspan="10" class="text-center"> No Blog Posts, please click add Blog Posts to add Blog Posts </th> </tr>
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




