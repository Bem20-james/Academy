@extends('admin.layouts.Admin')
    @section('admin_contents')

    <!-- Content Wrapper. Contains page content -->
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
                            <li class="breadcrumb-item">Blogs Categories-Edit</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row butt-div ml-5">
            <a href="{{ route('create.blogcategories') }}" type="button" class="btn-color"> Add Blog Category <i class="fa fa-plus"></i></a>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <form action="{{ route('update.blogcategories',['id' => $editblogcat->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        @if(count($errors) > 0)
                                            <div class="p-5">
                                                @if(count($errors) > 0)
                                                    @foreach($errors->all() as $error)
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $error }}
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="name">Blog Category Name</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control block mt-1 w-full" name="blogcat_name" value="{{ $editblogcat->blogcat_name}}" type="text"  maxlength="25"  required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="slug">Slug</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="slug"  value="{{ $editblogcat->blogcat_slug  }}" class="block mt-1 w-full" type="text" name="blogcat_slug" maxlength="25" />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 mt-2">
                                        <img src="{{ asset($editblogcat->blogcat_image)  }}" width="100" height="100" alt="">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="image">Category Image</label>
                                        </div>

                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                                            <input type="file" class="custom-file-input" name="category_img" aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>

                                    <div class=" col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="blogcat_status">Category Status</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">


                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="blogcat_status" id="inlineRadio1" value="1" @if ($editblogcat->blogcat_status = 1)  checked  @endif>
                                                <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="blogcat_status" id="inlineRadio2" value="0" @if ($editblogcat->blogcat_status = 0)  checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-4">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="blogcat_description">Blog Category Description</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <textarea class="form-control" name="blogcat_description" id="" cols="10" rows="5">{{ $editblogcat->blogcat_description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <button type="submit" class="btn btn-success float-right">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 p-3">
                                <div class="box-footer p-3">
                                    <a href="{{ route('view.blogcategories') }}" type="button" class="btn btn-default float-left"> <i class="fa fa-angle-left"></i> Back</a>
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
