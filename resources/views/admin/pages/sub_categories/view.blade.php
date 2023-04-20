@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sub-Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Sub-Categories-view</li>
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
            <a href="{{ route('create.subcategories') }}" class="btn btn-success shadow-lg">Add Sub-Category</a>
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
                            <th>Parent Category</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($subcat->count() > 0)
                            @foreach ( $subcat as  $subcategory)
                                <tr>
                                    <td>{{  $subcategory->id }}</td>
                                    <td>{{  $subcategory->subcategory_name }}</td>
                                    <td>{{  $subcategory->subcategory_slug }}</td>
                                    <td>{{  $subcategory->parent_category }}</td>
                                    <td><img src="{{ asset( $subcategory->subcategory_img)  }}" width="100" height="100" alt=""></td>
                                    <td>
                                        @if ( $subcategory->subcategory_status == 1)
                                            <span class="p-2 text-bold badge badge-success">active</span>
                                        @elseif ( $subcategory->subcategory_status == 0)
                                            <span class="p-2 text-bold badge badge-warning">not active</span>
                                        @endif
                                    </td>
                                    <td>{{  $subcategory->subcategory_description }}</td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm" href="">
                                            <i class="fas fa-eye">
                                            </i>
                                        </a>
                                        <a class="btn btn-success btn-sm" href="{{ route('edit.subcategories', ['id' =>  $subcategory->id]) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('delete.subcategories', ['id' =>  $subcategory->id]) }}">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                        <tr> <th colspan="10" class="text-center"> No Sub-Categories yet, click add to add Sub-Categories</th> </tr>
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


