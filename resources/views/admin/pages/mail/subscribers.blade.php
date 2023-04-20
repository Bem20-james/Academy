@extends('admin.layouts.Admin')
@section('admin_contents')
<!-- Content Header (Page header) -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">blogcategories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Blogs-view</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="my-5 ml-3">
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <div class="card-body p-0">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Subscriber ID</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscriber as $subscriber)
                            <tr>
                                <td>{{$subscriber->id }}</td>
                                <td>{{$subscriber->email }}</td>
                                <td>{{$subscriber->created_at }}</td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="{{ route('delete.Subscribers', ['id' => $subscriber->id]) }}">
                                        <i class="fab fa-telegram-plane">Mail</i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('delete.Subscribers', ['id' => $subscriber->id]) }}">
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
