@extends('admin.layouts.Admin')
@section('admin_contents')
    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Classes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="my-5 ml-3">
                        <a href="" class="btn btn-success shadow-lg">View Clases</a>
                    </div>
                </div>

                <form class="content" action="{{route('store.classes')}}" method="POST" enctype="">
                    @csrf
                      <div class="card card-outline card-primary">
                          <div class="card-body">
                            <!-- append input -->
                            <div class="form-group">
                              <label>Class</label>
                              <div class="input-group">
                                <input name="class" type="text" class="form-control float-right" id="reservation">
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- append input -->
                            <div class="form-group">
                              <label>Class Teacher</label>
                              <div class="input-group">
                                <input name="class_teacher" type="text" class="form-control float-right" id="reservation">
                              </div>
                              <!-- /.input group -->
                            </div>

                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

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
            </div>
        </section>



<!-- main content -->

@section('script')
    <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
    })
    </script>
@endsection
@endsection
