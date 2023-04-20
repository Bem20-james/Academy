@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Language</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Language-view</li>
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

        <div class="mt-3 ml-3">
            <a href="{{ route('create.languages') }}" class="btn btn-success shadow-lg">Add Language</a>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Admins view</h3>

            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($viewlang->count() > 0)
                            @foreach ($viewlang as $language)
                                <tr>
                                    <td>{{ $language->id }}</td>
                                    <td>{{ $language->language_name }}</td>
                                    <td>{{ $language->language_code }}</td>
                                    <td><?php if( $language->language_default == 0 ){ echo "Notdefault"; }else{ echo "Default"; } ?></td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm" href="">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-success btn-sm" href="{{ route('edit.languages', ['id' => $language->id]) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('delete.languages', ['id' => $language->id]) }}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            @else
                                <tr> <th colspan="10" class="text-center"> No Colors, please click add languages to add languages </th> </tr>
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


