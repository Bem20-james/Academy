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

    <div class="my-5 ml-3">
        <a href="{{ route('view.slide') }}" class="btn btn-success shadow-lg">View Slides</a>
    </div>

    <form action="{{ route('store.slide') }}" method="POST" class="content" enctype="multipart/form-data">
        @csrf
        <div class="card card-outline card-primary">
            <div class="card-header">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Slide Text</label>
                <input type="text" id="inputName" name="slide_text" class="form-control">
              </div>

              <div class="custom-file">
                <label for="inputName">Slide image</label>
                <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                <input type="file" class="custom-file-input" name="category_img" aria-describedby="inputGroupFileAddon01">
              </div>

              <div class="form-group">
                <label for="inputStatus">Slide Status</label>
                <select id="inputStatus" name="slide_status" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                </select>
              </div>


              <div class=" col-lg-6 col-12 mt-2">
                <div class="col-12 col-lg-12 col-md-12">
                    <label class="pull-left" for="cat_status">Slider Status (Show/Hide slide)</label>
                </div>

                <div class="col-12 col-lg-12 col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="slide_status" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Show</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="slide_status" id="inlineRadio2" value="0">
                        <label class="form-check-label" for="inlineRadio2">Hide</label>
                    </div>
                </div>
            </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="row">
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


