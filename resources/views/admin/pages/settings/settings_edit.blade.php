@extends('admin.layouts.admin')
@section('admin_contents')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header bg-dark pinned-2">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Web Settings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Web Settings-view</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="row w-100  butt-div">
            <div class="col-6 mb-3 p-2">
                <div class="ml-4 ">
                    <a href="{{ route('create.settings') }}" type="button" class="text-decoration-none btn-color float-right"><i class="fa fa-plus"></i>Create Settings</a>
                </div>
            </div>
            <div class="col-6 mb-3 p-2">
                <div class="ml-4 ">
                    <a href="" type="button" class="text-decoration-none btn-color float-left"><i class="fa fa-plus"></i>Update Settings</a>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        @if (session('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div class="col-12">
                                        @if(count($errors) > 0)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-danger">
                                                    {{ $error }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_name">Site Name</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" class="block mt-1 w-full" type="text" name="name" value="{{$settings}}" maxlength="25" required />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_name">Logo</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <img style="width: 100%; height: auto;" src="" alt="">
                                                <input class="form-control" type="file" name="logo" id="">
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Welcome Message</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <textarea name="welc_msg" id="" cols="10" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Email</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="email" name="email" value="" maxlength="100" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Facebook Link</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="url" name="facebook_link" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Youtube Link</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="url" name="youtube_link" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Instagram Link</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="url" name="instagram_link" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Twitter Link</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="url" name="twitter_link" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Address One</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="text" name="address_one" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Address Two</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="text" name="address_two" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Address Three</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="text" name="address_three" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Phone</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="text" name="contact" value="" maxlength="250" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Post Code</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="text" name="post_code" value="" maxlength="30" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Country</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="text" name="country" value="" maxlength="30" />
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <label class="pull-left" for="color_code">Country Code</label>
                                            </div>

                                            <div class="col-12 col-lg-12 col-md-12">
                                                <input class="form-control" id="color_code" class="block mt-1 w-full" type="text" name="country_code" value="" maxlength="30" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group col-lg-12 col-12 mt-2">
                                                <div class="col-12 col-lg-12 col-md-12">
                                                    <label class="pull-left" for="prdt_info">About Us</label>
                                                </div>

                                                <div class="col-12 col-lg-12 col-md-12">
                                                    <textarea id="editor" class="form-control" name="about_us" id="about_us" cols="10" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-12 mt-2">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <button type="submit" class="btn btn-success float-right">Submit</button>
                                            </div>
                                            <div class="col-12 mt-5 mb-3">
                                                <div class="box-footer">
                                                    <a href="" type="button" class="btn btn-default float-left">
                                                        <i class="fa fa-angle-left"></i> Back
                                                    </a>
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

    @section('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    @endsection
