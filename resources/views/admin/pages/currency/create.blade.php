@extends('admin.layouts.Admin')
    @section('admin_contents')

    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <section class="content-header bg-dark pinned-2">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Currency</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Currency-Create</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="my-5 ml-3">
            <a href="{{ route('view.currencies') }}" class="btn btn-success shadow-lg">View Currency</a>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('store.currencies') }}" method="POST">
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

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Currency Name</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="currency_name" class="block mt-1 w-full" type="text" name="currency_name" :value="old('currency_name')" maxlength="25" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Currency Code</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="currency_code" class="block mt-1 w-full" type="text" name="currency_code" :value="old('currency_code')" maxlength="25" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Currency Symbol</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="currency_symbol" class="block mt-1 w-full" type="text" name="currency_symbol" :value="old('currency_symbol')" maxlength="25" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-12 col-12 mt-2 d-flex">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Make Default</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="form-check">
                                                <input type="hidden" name="status" value="{{ $editcurrency->currency_default }}">
                                                <input class="form-check-input position-static" name="currency_default" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <button type="submit" class="btn btn-success float-right">Submit</button>
                                        </div>
                                        <div class="col-12 mt-5 mb-3">
                                            <div class="box-footer">
                                                <a href="{{ route('admin.dashboard') }}" type="button" class="btn btn-default float-left"> <i class="fa fa-angle-left"></i> Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
