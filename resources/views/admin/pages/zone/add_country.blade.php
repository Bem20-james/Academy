@extends('admin.layouts.admin')
    @section('admin_layout')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <!-- Content Header (Page header) -->
       <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Countries</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('view.countries') }}">Countries</a></li>
                <li class="breadcrumb-item active">View</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('store.country') }}" method="POST">
                        @csrf
                        <div class="col-12 card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Country Name</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="countries_name" value="" maxlength="250" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Country Iso Code 1</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="countries_iso_code_2" value="" maxlength="2" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Country Iso Code 2</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="countries_iso_code_3" value="" maxlength="2" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Address_format_id</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="address_format_id" value="" maxlength="2" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 mt-3 mb-3">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <button type="submit" class="btn btn-success float-right">Submit</button>
                                            </div>
                                            <div class="box-footer">
                                                <a href="{{ route('view.countries') }}" type="button" class="btn btn-default float-left"> <i class="fa fa-angle-left"></i> Back</a>
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





