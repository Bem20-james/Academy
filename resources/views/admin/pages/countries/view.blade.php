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
                            <li class="breadcrumb-item">countries-View</li>
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

        <div class="my-5 ml-3">
            <a href="{{ route('create.country') }}" class="btn btn-success shadow-lg">Add Country</a>
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>

                        <!-- /.card-header -->
                    <div class="card-body p-2">
                        <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Iso_Code1</th>
                                    <th>Iso_Code2</th>
                                    <th>Country code</th>
                                    <th>Flag</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($countries->count() > 0)
                                    @foreach ($countries as $countries)
                                        <tr>
                                            <td>{{ $countries->countries_id}}</td>
                                            <td>{{ $countries->countries_name }}</td>
                                            <td>{{ $countries->countries_iso_code_2 }}</td>
                                            <td>{{ $countries->countries_iso_code_3 }}</td>
                                            <td>{{ $countries->country_code }}</td>
                                            <td>{{ $countries->flag }}</td>
                                            <td>{{ $countries->status }}</td>
                                            <td class="project-actions">
                                                <a class="btn btn-primary btn-sm" href="">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                <a class="btn btn-success btn-sm" href="{{ route('edit.country', ['id' =>$countries->countries_id]) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="{{ route('delete.country', ['id' =>$countries->countries_id]) }}">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr> <th colspan="10" class="text-center"> No currencies, please click add languages to add currencies </th> </tr>
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
