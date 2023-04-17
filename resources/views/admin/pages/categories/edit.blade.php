@extends('admin.layouts.Admin')
    @section('admin_contents')

    <div class="">
        <!-- Content Header (Page header) -->
        <section class="content-header bg-dark pinned-2">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Categories-edit</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="my-3 ml-3">
            <a href="{{ route('create.categories') }}" class="btn btn-success shadow-lg">Create Categories</a>
        </div>

        <div class="p-5">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <section class=" px-5 ">
            <form action="{{ route('update.categories',['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputCategoryName4">Category Name</label>
                        <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}" placeholder="category name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputSlug4">Slug</label>
                        <input type="text" class="form-control" name="category_slug" value="{{ $category->category_slug }}"  placeholder="slug">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <div class="form-group col-lg-6 col-12 mt-2">
                        <img src="{{ asset($category->category_img)  }}" width="100" height="100" alt="">
                        <div class="col-12 col-lg-12 col-md-12">
                            <label class="pull-left" for="image">Category Image</label>
                        </div>

                        <div class="col-12 col-lg-12 col-md-12">
                            <input value="{{ $category->category_img  }}" type="hidden"  name="old_cat_img" />
                            <input value="{{ $category->id  }}" type="hidden" name="id" />

                            <input class="form-control" id="image" class="block mt-1 w-full" type="file" name="categories_image" />
                        </div>
                    </div>

                    <div class=" col-lg-6 col-12 mt-2">
                        <div class="col-12 col-lg-12 col-md-12">
                            <label class="pull-left" for="category_status">Category Status</label>
                        </div>

                        <div class="col-12 col-lg-12 col-md-12">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category_status" id="inlineRadio1" value="1" @if ($category->category_status = 1)  checked  @endif>
                                <label class="form-check-label" for="inlineRadio1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category_status" id="inlineRadio2" value="0" @if ($category->category_status = 0)  checked @endif>
                                <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Category Description</label>
                    <textarea class="form-control" type="text" name="category_description" placeholder="describe category" rows="5">{{ $category->category_description }}</textarea>
                </div>
                <div class=" mt-3 p-3">
                <button type="submit" class="btn btn-lg btn-success mb-5 float-right">Submit</button>
                </div>
            </form>
            <div class="row  p-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="{{ route('admin.dashboard') }}"><button type="submit" class="btn btn-default " style="font-size: 13px"><i class="fa fa-angle-left"></i> Back</button></a>
                </div>
            </div>
        </section>
    </div>


    @endsection
