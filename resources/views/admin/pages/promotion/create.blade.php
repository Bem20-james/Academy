@extends('admin.layouts.Admin')
 @section('admin_contents')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 mt-3">
                    <div class="col-sm-6">
                        <h1 class="m-0">PROMOTION</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Promotion</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <div class="mt-3 ml-3">
            <a href="{{ route('view.promotion') }}" class="btn btn-success shadow-lg">View Promotions</a>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 card mt-3">
                        <form action="{{ route('store.promotion') }}" method="POST" enctype="multipart/form-data">
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

                                    <div class="form-group col-lg-6 col-12 mt-3">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="image">Promotion Image</label>
                                        </div>
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                                            <input type="file" class="custom-file-input" name="paymethod_img" aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="cat_status">Status</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                                                <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                                                <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="slug">Promotion Content</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <textarea id="editor" class="form-control" name="content" cols="10" rows="5"></textarea>
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

                        <div class="col-12 my-3">
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
