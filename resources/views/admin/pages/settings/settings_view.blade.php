@extends('admin.layouts.admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<section class="content-header bg-dark pinned-2">
    <div class="">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Home Slides</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Home Slide-Create</li>
                </ol>
            </div>
            </div>
        </div>
    </div>
</section>

<div class="p-3">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
</div>

<div class="row">
    <div class="col-12">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>

<!-- main content -->
@if ($settings->count() > 0)
    @foreach ($settings as $setting)
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Web Information</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                </div>

                <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Site Name</label>
                    <input type="text" id="inputName" name="name" value="{{ $setting->name }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Logo</label>
                    <div class="col-12 col-lg-12 col-md-12">
                        <img width="100" style="width: 20%; height: auto;" src="{{ asset( $setting->logo) }}" alt="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputName">Email</label>
                    <input type="email" id="inputName" name="email" value="{{ $setting->email }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Welcome Message</label>
                    <input type="text" id="inputName" name="welc_msg" value="{{ $setting->welc_msg }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Facebook Link</label>
                    <input type="text" id="inputName" name="facebook_link" value="{{$setting->facebook_link }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Instagaram Link</label>
                    <input type="text" id="inputName" name="instagram_link" value="{{ $setting->instagram_link }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Twitter Link</label>
                    <input type="text" id="inputName" name="twitter_link" value="{{ $setting->twitter_link }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Youtube Link</label>
                    <input type="text" id="inputName" name="youtube_link" value="{{ $setting->youtube_link }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Address One</label>
                    <input type="text" id="inputName" name="address_one" value="{{ $setting->address_one}}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Address Two</label>
                    <input type="text" id="inputName" name="address_two" value="{{ $setting->address_two}}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Address Three</label>
                    <input type="text" id="inputName" name="address_three" value="{{ $setting->address_three}}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Country</label>
                    <input type="text" id="inputName" name="country" value="{{ $setting->country}}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Country Code</label>
                    <input type="text" id="inputName"  name="country_code" value="{{ $setting->country_code}}"  class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Postal Code</label>
                    <input type="text" id="inputName"  name="post_code" value="{{ $setting->post_code}}"  class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">About us</label>
                    <textarea class="form-control"  name="about_us"  id="" cols="30" rows="10" readonly>{{ $setting->about_us}}</textarea>
                </div>

                </div>
                <span class="project-actions p-3 text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-eye">
                        </i>
                    </a>
                    <a class="btn btn-success btn-sm" href="{{ route('edit.settings',['id'=>$setting->id]) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{ route('delete.settings',['id'=>$setting->id]) }}">
                        <i class="fas fa-trash">
                        </i>
                    </a>
                </span>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    @endforeach
@endif


@section('script')
    <script>
    $(function () {
        // Summernote
        $('#summernote').summernote()
    })
    </script>
@endsection
@endsection
