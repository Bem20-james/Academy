@extends('admin.layouts.Admin')
    @section('admin_contents')

    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <section class="content-header bg-dark ">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Payment Methods</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Payment Methods-edit</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mt-3 ml-3">
            <a href="{{ route('create.paymethod') }}" class="btn btn-success shadow-lg">Add Payment Methods</a>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('update.paymethod',['id' =>$editpaymethod->id ]) }}" method="POST">
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
                                            <label class="pull-left" for="color_name">Payment Method Name</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="paymethod_name" class="block mt-1 w-full" type="text" name="paymethod_name" value="{{ $editpaymethod->paymethod_name }}" maxlength="25" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="color_name">Method Code</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <input class="form-control" id="paymethod_code" class="block mt-1 w-full" type="text" name="paymethod_code" value="{{ $editpaymethod->code_name }}" maxlength="25" required />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <label for="paymethod-img">Payment Method Image</label>
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                                            <input type="file" class="custom-file-input" name="paymethod_img" aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>

                                    <div class=" col-lg-6 col-12 mt-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <label class="pull-left" for="cat_status">Payment Method Status</label>
                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="subcategory_status" id="inlineRadio1" value="1" @if ($editpaymethod->paymehthod_status = 1)  checked  @endif>
                                                <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="subcategory_status" id="inlineRadio2" value="0" @if ($editpaymethod->paymehthod_status = 0)  checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">Inactivate</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12 mt-2">
                                        <label for="exampleFormControlTextarea1">Payment Method Description</label>
                                        <textarea class="form-control" type="text" name="paymethod_description" placeholder="describe Payment method" rows="5">{{ $editpaymethod->paymethod_description }}</textarea>
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
