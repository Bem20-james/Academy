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
                <h1 class="m-0">Country\Zone</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('view.zones') }}">Zones</a></li>
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
                    <form action="{{ route('store.zone') }}" method="POST">
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

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Select Country</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <select name="zone_country_id" id="" class="form-control" required>
                                                <option value="" selected disabled>Please select country</option>
                                                @foreach ($results as $result)
                                                    <option value="{{ $result->countries_id }}">{{ $result->countries_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name One</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_1" maxlength="50" required />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code One</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_1" maxlength="3" required />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_1" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Two</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_2" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Two</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_2" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_2" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Three</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_3" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Three</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_3" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_3" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Four</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_4" value="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Four</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_4" value="" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_4" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Five</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_5" value="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Five</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_5" value="" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_5" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Six</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_6" value="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Six</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_6" value="" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_6" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Seven</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_7" value="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Seven</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_7" value="" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_7" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Eight</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_8" value="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Eight</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_8" value="" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_8" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Nine</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_9" value="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Nine</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_9" value="" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_9" maxlength="20" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Name Ten</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_name_10" value="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Code Ten</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_code_10" value="" maxlength="3" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Zone Shipping Price</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="" class="block mt-1 w-full" type="text" name="zone_shipping_price_10" maxlength="20" required />
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





