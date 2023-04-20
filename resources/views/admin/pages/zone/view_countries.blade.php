@extends('admin.layouts.admin')
    @section('admin_layout')
        @php
            if ( !empty($results['admin_roles']) ){
                $roles = $results['admin_roles'];
            }else{
                $roles = $common_content['admin_roles'];
            }
        @endphp

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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Countries</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('view.countries') }}">Countries</a></li>
                    <li class="breadcrumb-item active">View</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        @if ( $roles->edit_tax_location == 1 )
                            <div class="col-12 mt-3 mb-3 p-2">
                                <div class="box-footer">
                                    <a href="{{ route('add.zone') }}" type="button" class="btn btn-primary float-left"><i class="fa fa-plus"></i> Add Zone </a>
                                    <a href="{{ route('add.country') }}" type="button" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Add Country</a>
                                </div>
                            </div>
                        @endif

                        <!-- /.card-header -->
                    <div class="card-body p-2">
                        <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($results->count() > 0)
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $result->countries_id }}</td>
                                            <td>{{ $result->countries_name }}</td>
                                            <td>{{ $result->countries_iso_code_2 }}</td>
                                            <td>
                                                @if ( $roles->edit_tax_location == 1 )
                                                    <a href="{{ route('edit.country', ['id' => $result->countries_id]) }}">
                                                        <span class="badge badge-success"><i class="fa fa-edit"></i> Edit/View</span>
                                                    </a>
                                                @endif
                                                @if ( $roles->delete_tax_location == 1 )
                                                    <a href="{{ route('delete.country', ['id' => $result->countries_id]) }}">
                                                        <span class="badge badge-danger"><i class="fa fa-trash"></i> Delete</span>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr> <th colspan="10" class="text-center"> No Country/Zone, please add Country/Zone </th> </tr>
                                @endif
                            </tbody>
                        </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                  <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection
