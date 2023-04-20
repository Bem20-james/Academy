@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Payments Methods</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Payments Method-view</li>
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

    <!-- Main content -->
    <section class="content">

        <div class="my-5 ml-3">
            <a href="{{ route('create.paymethod') }}" class="btn btn-success shadow-lg">Add Payment method</a>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Code name</th>
                            <th>Logo</th>
                            <th>description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $paymethods as  $paymethods)
                            <tr>
                                <td>{{  $paymethods->id }}</td>
                                <td>{{  $paymethods->paymethod_name }}</td>
                                <td>{{  $paymethods->code_name }}</td>
                                <td>
                                    <img src="{{ asset($paymethods->paymethod_img)}}" alt="">
                                </td>
                                <td>{{  $paymethods->paymethod_description }}</td>
                                <td>{{  $paymethods->created_at }}</td>
                                <td class="project-actions">
                                    <a class="btn btn-primary btn-sm" href="">
                                        <i class="fas fa-eye">
                                        </i>
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{ route('edit.paymethod', ['id' => $paymethods->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{  route('delete.paymethod', ['id' => $paymethods->id])  }}">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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

