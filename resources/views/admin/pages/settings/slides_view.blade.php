@extends('admin.layouts.admin')
@section('admin_contents')
    <!-- Content Header (Page header) -->
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home Slides</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home Slide-view</li>
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

    <div class="my-4 mx-4">
        <a href="{{ route('create.slide') }}" class="btn btn-sm btn-success shadow-lg p-2">Add Slide</a>
    </div>

    <div class="col-12">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    @if ($slides->count() > 0)
        @foreach ($slides as $slide)
    <section class="content">
        <!-- /card -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">SLIDES</h3>
            </div>
            <div class="card-body">
                <div class="mt-3">
                    <label for="slide_status">Slide Image</label>
                    <div class="col-12 col-lg-12 col-md-12">
                        <img width="100" style="width: 30%; height: auto;" src="{{ asset(  $slide->slide_img) }}" alt="">
                    </div>
                </div>

                <div>
                    <label for="slide_status">Slide Text</label>
                    <input type="text" class="form-control text-capitalize" name="slide_text" value="{{ $slide->slide_text }}" readonly>
                </div>

                <div class="mt-3">
                    <label for="slide_status">Slide Status</label>
                    @if ($slide->slide_status == 1)
                        <span class="p-2 text-bold badge badge-success">ACTIVE</span>
                        @elseif ($slide->slide_status == 0)
                        <span class="p-2 text-bold badge badge-warning">INACTIVE</span>
                    @endif
                </div>
            </div>
            <span class="project-actions p-3 text-right">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-eye">
                    </i>
                </a>
                <a class="btn btn-success btn-sm" href="{{ route('edit.slide',['id'=> $slide->id]) }}">
                    <i class="fas fa-pencil-alt">
                    </i>
                </a>
                <a class="btn btn-danger btn-sm" href="{{ route('delete.slide',['id'=> $slide->id])}}">
                    <i class="fas fa-trash">
                    </i>
                </a>
            </span>

        <!-- /.card-body -->
        </div>
        <!-- /card -->

        <!-- /card -->
    </section>
        @endforeach
    @else
        <h3 colspan="10" class="text-center"> No Slides yet</h3>
    @endif
    @endsection
