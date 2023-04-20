@extends('admin.layouts.Admin')
    @section('admin_contents')

    <!-- Content Wrapper. Contains page content -->
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

        <div class="my-5 ml-3">
            <a href="{{ route('create.blogs') }}" class="btn btn-success shadow-lg">Add Blog</a>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <form action="{{ route('update.blogs', ['id' =>  $editblog->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">

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

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="title">Blog title</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="title" class="block mt-1 w-full" type="text" name="blog_title" value="{{  $editblog->blog_title }}" placeholder="Blog title" maxlength="100" />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="slug">Slug</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="slug" class="block mt-1 w-full" type="text" name="slug" value="{{$editblog->slug}}" placeholder="slug" maxlength="200" />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="image">Blog Image</label>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <img style="width: 150px; height: auto;" src="{{ asset($editblog->blog_image) }}" alt="blog_image">
                                        </div>
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                                            <input type="file" class="custom-file-input" name="category_img" aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="image">Blog Category</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <select class="form-control" name="blog_category" id="cat" required>
                                                {{-- <option value="{{$categories->id}}" selected>{{ $categories->category_name}}</option> --}}
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 d-flex mt-2">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="col-lg-12">
                                                <label for="media_type">media Type</label>
                                                <span style="font-size: 11px;"><span style="color: red;">*</span>choose media type</span>
                                            </span>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="dropdown">
                                                    <select class="form-control" name="media type" id="image">
                                                        <option value=""  disabled selected>{{$editblog->media_type}}</option>
                                                        <option value="">image</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-lg-4 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="blog_status">Blog Status</label>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="blog_status" id="inlineRadio1" value="1"@if ($editblog->blog_status = 0)  checked  @endif>
                                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="blog_status" id="inlineRadio2" value="0"@if ($editblog->blog_status = 1)  checked  @endif>
                                                    <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-3">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="slug">Blog Description</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <textarea  class="form-control" name="blog_description" cols="10" rows="5" placeholder="Blog Description">{{$editblog->blog_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="slug">Blog Content</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <textarea id="editor" class="form-control" name="blog_content" cols="10" rows="10" placeholder="Blog Content">{{$editblog->blog_content}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <button type="submit" class="btn btn-success float-right">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <div class="col-12 mt-3 mb-3">
                            <div class="box-footer">
                                <a href="{{ route('admin.dashboard') }}" type="button" class="btn btn-default float-left"> <i class="fa fa-angle-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection

    @section('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace('editor');
    </script>
    @endsection
