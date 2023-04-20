@extends('admin.layouts.admin')
    @section('admin_contents')

    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <section class="content-header bg-dark pinned-2">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home Slides</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home Slide-Edit</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="my-4 mx-4">
            <a href="{{ route('create.slide') }}" class="btn btn-sm btn-success shadow-lg p-2">Add Slide</a>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('update.slide', ['id' =>$slides->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Slide Text</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="slide_text" value="{{$slides->slide_text }}" maxlength="250" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Slide Image</label>
                                        </div>
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                                            <input type="file" class="custom-file-input" name="category_img" aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>

                                    <div class=" col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="cat_status">Active Slider (Make slide to show first on visit site)</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="active_slide" id="inlineRadio1" value="1" @if ($slides->active_slide == 1)  checked  @endif >
                                                <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="active_slide" id="inlineRadio2" value="0" @if ($slides->active_slide == 0)  checked  @endif>
                                                <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="cat_status">Slider Status (Show/Hide slide)</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="slide_status" id="inlineRadio1" @if ($slides->slide_status == 1) checked @endif value="1" >
                                                <label class="form-check-label" for="inlineRadio1">Show</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="slide_status" id="inlineRadio2" @if ($slides->slide_status == 0)  checked  @endif value="0">
                                                <label class="form-check-label" for="inlineRadio2">Hide</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-5">
                                        <div class="col-12 mt-3 mb-3">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <button type="submit" class="btn btn-success float-right">Submit</button>
                                            </div>
                                            <div class="box-footer">
                                                <a href="{{ route('view.slide') }}" type="button" class="btn btn-default float-left"> <i class="fa fa-angle-left"></i> Back</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
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





