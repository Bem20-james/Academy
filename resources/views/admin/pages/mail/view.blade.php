@extends('admin.layouts.Admin')
@section('admin_contents')
    <div class="">
        <section class="content-header bg-dark pinned-2">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Mail-View</li>
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

        <div class="col-6 p-2  butt-div">
            <div class="ml-4 ">
                <a href="{{ route('create.mail') }}" type="button" class="text-decoration-none btn-color float-left">Add Mail</a>
            </div>
        </div>

        <section class="content mt-5">
            <div class="container-fluid mt-5">
                <div class="">
                    <div class="table-responsive ">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Mail ID</th>
                                    <th>Tittle</th>
                                    <th>Content</th>
                                    <th>Date Sent</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mails as $mails)
                                    <tr>
                                        <td>{{ $mails->id }}</td>
                                        <td>{{ $mails->mail_title }}</td>
                                        <td>{!! Str::limit($mails->mail_content, 200, '...') !!}</td>
                                        <td>{{ $mails->created_at }}</td>
                                        <td class="project-actions">
                                            <a class="btn btn-primary btn-sm" href="{{ route('view.singlemail',['id' => $mails->id]) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-success btn-sm" href="{{ route('edit.mail', ['id' => $mails->id]) }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

