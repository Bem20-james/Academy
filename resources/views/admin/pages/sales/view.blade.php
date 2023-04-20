@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Sales-view</li>
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

    <!-- Main content -->
    <section class="content">

        <div class="my-5 ml-3">

        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Admins view</h3>

            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Sale ID</th>
                            <th>Course</th>
                            <th>Currency</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($sales->count() > 0)
                            @foreach ($sales as $sales)
                                <tr>
                                    <td>{{ $sales->payment_id }}</td>
                                    <td>{{ $sales->payment_name }}</td>
                                    <td>{{ $sales->payment_name }}</td>
                                    <td>{{ $sales->code_name }}</td>
                                    <td>{{ $sales->description }}</td>
                                    <td>{{ $sales->created_at }}</td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm" href="{{ route('view.single.order',['id' => $sales->id]) }}">
                                            <i class="fas fa-eye">
                                            </i>
                                        </a>
                                        <a class="btn btn-success btn-sm" href="">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <tr> <th colspan="10" class="text-center"> No Sales yet </th> </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection

