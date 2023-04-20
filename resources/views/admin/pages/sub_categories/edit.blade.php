@extends('admin.layouts.admin')
    @section('admin_contents')

    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <section class="content-header bg-dark ">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sub-Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Sub-Categories-edit</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mt-3 ml-3">
            <a href="{{ route('create.subcategories') }}" class="btn btn-success shadow-lg">Create Sub-Categories</a>
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
        <!-- Main content -->
        <section class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <form action="{{ route('update.subcategories',['id' => $editsubcat->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-row col-12">
                                        <div class="col-md-12 mt-3">
                                            <div class="col-lg-12 col-md-12">
                                                <label class="pull-left" for="name">Sub-Category Name</label>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <input class="form-control" id="name" class="block mt-1 w-full" type="text" name="subcategory_name" value="{{ $editsubcat->subcategory_name}}" maxlength="75" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <div class="col-12 col-md-12">
                                                <label class="pull-left" for="slug">Sub-Category Slug</label>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <input class="form-control" id="slug" class="block mt-1 w-full" type="text" name="subcategory_slug" value="{{ $editsubcat->subcategory_slug}}" maxlength="50" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-12 col-12 mt-3">
                                        <div class="col-12 col-md-12">
                                            <label class="pull-left" for="slug">Parent Category</label>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <select class="form-control" name="parent_category" id="" required>
                                                <option value="" disabled selected>Please select parent category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class=" col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="cat_status">Sub-Category Status</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="subcategory_status" id="inlineRadio1" value="1" @if ($editsubcat->subcategory_status = 1)  checked  @endif>
                                                <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="subcategory_status" id="inlineRadio2" value="0" @if ($editsubcat->subcategory_status = 0)  checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-4">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="slug">Sub-Category Description</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <textarea class="form-control" name="subcategory_description" id="" cols="10" rows="5">{{ $editsubcat->subcategory_description  }}</textarea>
                                        </div>
                                    </div>


                                    <div class="row col-lg-12 col-12 mt-5">
                                        <div class="col-lg-6 col-md-6 mt-5">
                                            <div class="box-footer">
                                                <a href="{{ route('admin.dashboard') }}" type="button" class="btn btn-default"> <i class="fa fa-angle-left"></i> Back</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class=" mt-3 p-3">
                                                <button type="submit" class="btn btn-lg btn-success mb-5 float-right">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
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
