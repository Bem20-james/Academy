@extends('admin.layouts.Admin')
@section('admin_contents')
    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Department</h1>
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
                        <a href="" class="btn btn-success shadow-lg">View Department</a>
                    </div>
                </div>

                <form class="content" action="{{route('store.department')}}" method="POST" enctype="">
                    @csrf
                      <div class="card card-outline card-primary">
                          <div class="card-body">
                            <!-- append input -->
                            <div class="form-group">
                              <label>Department</label>
                              <div class="input-group">
                                <input name="department" type="text" class="form-control float-right" id="reservation" required>
                              </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="course-status"> Status</label>
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                                        <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="form-group px-3">
                                <label>Description</label>
                                <div class="input-group">
                                    <textarea name="desc" class="form-control" placeholder="Describe Department" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                              <!-- /.input group -->
                            </div>
                            <!-- append input -->
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

@endsection
