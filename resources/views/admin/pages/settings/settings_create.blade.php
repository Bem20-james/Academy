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
                        <li class="breadcrumb-item">Home Slide-view</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
    </section>


<!-- main content -->
<div class="col-12">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
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


<div class="my-4 mx-4">
    <a href="{{ route('view.settings') }}" class="btn btn-sm btn-success shadow-lg p-2">View Setting</a>
</div>


<form action="{{route('store.settings')}}" method="POST" class="content" enctype="multipart/form-data">
    @csrf
    <div class="card card-outline card-primary">
        <div class="card-body">
          <div class="form-group">
            <label for="inputName">Site Name</label>
            <input type="text" id="inputName" name="name" class="form-control">
          </div>

          <label for="inputName">Logo</label>
          <div class="custom-file form-group">
            <label class="custom-file-label" for="inputGroupFile01">choose file</label>
            <input type="file" class="custom-file-input" name="category_img" aria-describedby="inputGroupFileAddon01">
          </div>

          <div class="form-group">
            <label for="inputName">Email</label>
            <input type="email" id="inputName" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">phone</label>
            <input type="number" id="inputName" name="phone" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Welcome Message</label>
            <input type="text" id="inputName" name="welc_msg" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Facebook Link</label>
            <input type="text" id="inputName" name="facebook_link" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Instagaram Link</label>
            <input type="text" id="inputName" name="instagram_link" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Twitter Link</label>
            <input type="text" id="inputName" name="twitter_link" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Youtube Link</label>
            <input type="text" id="inputName" name="youtube_link" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Address One</label>
            <input type="text" id="inputName" name="address_one" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Address Two</label>
            <input type="text" id="inputName" name="address_two" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Address Three</label>
            <input type="text" id="inputName" name="address_three" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Country</label>
            <input type="text" id="inputName" name="country" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Country Code</label>
            <input type="text" id="inputName" name="country_code" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">Postal Code</label>
            <input type="text" id="inputName" name="postal_code" class="form-control">
          </div>

          <div class="form-group">
            <label for="inputName">About us</label>
            <textarea class="form-control"  name="about_us"  id="" cols="30" rows="10"></textarea>
        </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <div class="row p-3">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <button type="submit" value="Create" class="btn btn-success float-right">Create</button>
      </div>
    </div>
</form>
@section('script')
    <script>
    $(function () {
        // Summernote
        $('#summernote').summernote()
    })
    </script>
@endsection
@endsection
