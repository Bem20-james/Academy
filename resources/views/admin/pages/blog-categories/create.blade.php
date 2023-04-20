@extends('admin.layouts.Admin')
@section('admin_contents')

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
                            <li class="breadcrumb-item">Blogs Categories-Create</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="my-5 ml-3">
            <a href="{{ route('view.blogcategories') }}" class="btn btn-success shadow-lg">View Blog Category</a>
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

        <section class="content">
            <form class="px-4 mb-4" action="{{ route('store.blogcategories') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCategoryName4">Blog Category Name</label>
                    <input type="text" class="form-control" name="blogcat_name" placeholder="Blog category name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSlug4">Blog Category Slug</label>
                    <input type="text" class="form-control" name="blogcat_slug" placeholder="slug">
                </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="inputCategoryName4">Blog Category Image</label>
                        <div class="custom-file">
                            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                            <input type="file" class="custom-file-input" name="blogcat_image" aria-describedby="inputGroupFileAddon01">
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="inputCategoryName4">Blog Category Status</label>
                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="blogcat_status" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="blogcat_status" id="inlineRadio2" value="0">
                                <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Category Description</label>
                    <textarea class="form-control" type="text" name="blogcat_description" placeholder="Blog category Description" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </form>
            <div class="row mt-5 pb-2">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="{{ route('admin.dashboard') }}"><button type="submit" class="btn btn-default" style="font-size: 13px"><i class="fa fa-angle-left"></i> Back</button></a>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection

