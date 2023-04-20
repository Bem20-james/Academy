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
                    <form action="{{ route('update.country', ['id' => $results['country']->countries_name]) }}" method="POST">
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
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="countries_name" value="{{ $results['country']->countries_name }}" maxlength="250" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Country Iso Code 1</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="countries_iso_code_2" value="{{ $results['country']->countries_iso_code_2 }}" maxlength="2" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Country Iso Code 2</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="countries_iso_code_3" value="{{ $results['country']->countries_iso_code_3 }}" maxlength="2" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Address_format_id</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="address_format_id" value="{{ $results['country']->address_format_id }}" maxlength="2" required />
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

                    <div class="col-12">
                        <!-- /.card-header -->
                        <div class="card card-body p-2">
                            @if ($results['country_zones']->count() > 0)
                                @foreach ($results['country_zones'] as $result)
                                        <form action="{{ route('update.zone', ['id' => $result->zone_id ]) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-12 mt-2">
                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <label class="pull-left" for="color_name">Zone Name</label>
                                                    </div>

                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name" value="{{ $result->zone_name }}" maxlength="50" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-12 mt-2">
                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <label class="pull-left" for="color_name">Zone Code</label>
                                                    </div>

                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code" value="{{ $result->zone_code }}" maxlength="3" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-12 mt-2">
                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                                    </div>

                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price" value="{{ $result->zone_shipping_price }}" maxlength="20" required />
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-3 col-12 mt-2">
                                                    <div class="col-12 mt-3 mb-3">
                                                        <div class="col-12 col-lg-12 col-md-12">
                                                            <button style="width: 100%;" type="submit" class="btn btn-success">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                @endforeach
                            @endif
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
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





