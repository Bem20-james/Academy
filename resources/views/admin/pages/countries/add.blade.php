@extends('admin.layouts.Admin')
@section('admin_contents')
    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <section class="content-header bg-dark pinned-2">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Countries</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Countries-Create</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="my-5 ml-3">
            <a href="{{ route('view.country') }}" class="btn btn-success shadow-lg">View Countries</a>
        </div>

<!-- main content -->
<form class="content" action="{{ route('store.country') }}" method="POST" enctype="multipart/form-data">
  @csrf

  @if ($errors->count() > 0)
    @foreach ($errors->all() as $err)
    <div class="card card-warning shadow">
      <div class="card-header">
        <h3 class="card-title">Opps!</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body text-capitalize">
        {{ $err }}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    @endforeach
  @endif

  @if (session('status'))
  <div class="card card-success shadow">
    <div class="card-header">
      <h3 class="card-title">Tadah!!!</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body text-capitalize">
      {{ session('status') }}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  @endif
    <div class="card card-outline card-primary">
        <div class="card-body">
          <div class="form-group">
            <label>Name</label>

            <div class="input-group">
              <input name="countries_name" type="text" class="form-control float-right" id="reservation">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          <!-- append input -->
          <div class="form-group">
            <label>Code</label>

            <div class="input-group">
              <input name="country_code" type="text" class="form-control float-right" id="reservation">
            </div>
            <!-- /.input group -->
          </div>
          <!-- append input -->
          <div class="form-group">
            <label>Iso Code Two</label>
            <div class="input-group">
              <input name="countries_iso_code_2" type="text" class="form-control float-right" id="reservation">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          <div class="form-group">
            <label>Country Iso Code Three</label>

            <div class="input-group">
              <input name="countries_iso_code_3" type="text" class="form-control float-right" id="reservation">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          <div class="form-group">
            <label for="inputStatus">Status</label>
            <select name="status" id="inputStatus" class="form-control custom-select">
              <option selected disabled>Select Status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
              <option value="2">Pending</option>
            </select>
          </div>
          <!-- Custom file -->
          <div class="form-group">
            <label for="inputCategoryName4">Flag</label>
            <div class="custom-file">
                <label class="custom-file-label" for="inputGroupFile01">choose image</label>
                <input name="flag" type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
            </div>
          </div>
          <!-- /Custom file -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <div class="row p-3">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Create" class="btn btn-primary float-right">
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