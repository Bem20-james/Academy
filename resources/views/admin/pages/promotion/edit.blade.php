@extends('admin.layouts.Admin')
 @section('admin_contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PROMOTION</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Promotion-Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="my-5 ml-3">
        <a href="{{ route('create.promotion') }}" class="btn btn-success shadow-lg">Add Promotion</a>
    </div>

    <!-- Main content -->
    <section class="content">
        <!-- /.box-body -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 card">
                    <form action="{{ route('update.promotion', ['id' => $promotion->id]) }}" method="POST" enctype="multipart/form-data">
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

                                <div class="form-group col-lg-4 col-12 mt-2">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <label class="pull-left" for="image">Image</label>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12">
                                        <input class="form-control" id="pro_img" class="block mt-1 w-full" value="{{ $promotion->pro_img }}" type="file" name="image"/>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12">
                                        <img style="width: 150px; height: auto;" src="{{ asset($promotion->pro_img) }}" alt="post_media">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-12 mt-2">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <label class="pull-left" for="link">Promotion Link</label>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12">
                                        <input type="text" class="form-control" name="link"  placeholder="Promotion Link" value="{{ $promotion->link }}" max="400">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-12 mt-2">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <label class="pull-left" for="layout">Promotion Layout</label>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12">
                                        <select class="form-control" name="layout" id="prdt_cat">
                                            <option value="" disabled selected>
                                                Select Promotion Layout
                                            </option>
                                            <option value="1">Portrait</option>
                                            <option value="2">Landscape</option>
                                        </select>
                                    </div>
                                </div>

                                <div class=" col-lg-4 col-12 mt-2">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <label class="pull-left" for="cat_status">Promotion Status</label>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" @if ($promotion->status = 1)  checked  @endif>
                                            <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" @if ($promotion->status = 0)  checked  @endif>
                                            <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group col-lg-12 col-12 mt-2">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <label class="pull-left" for="slug">Promotion Content</label>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12">
                                        <textarea id="editor" class="form-control" name="content" cols="10" rows="5" placeholder="Promotion Content here">{{ $promotion->content }}</textarea>
                                    </div>
                                </div>


                                <div class="form-group col-lg-12 col-12 mt-2">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                    <div class="col-12 mt-3 mb-3">
                        <div class="box-footer">
                            <a href="{{ route('view.promotion') }}" type="button" class="btn btn-default float-left"> <i class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection

    @section('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace('editor');
    </script>
    @endsection
