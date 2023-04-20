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
                            <li class="breadcrumb-item">Mail-Create</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mt-3 ml-3">
            <a href="{{ route('view.languages') }}" class="btn btn-success shadow-lg">view Language</a>
        </div>

        <div class="p-5">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <section class="content con-mt">
            <form class="px-4" action="{{ route('store.mail') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="form-group col-12">
                        <label for="mail_title">Mail title</label>
                        <div class="custom-file">
                            <input type="text" class="form-control" name="mail_title" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="mail_content">Contents</label>
                        <textarea class="form-control" id="editor" type="text" name="mail_content" placeholder="message" rows="5"></textarea>
                    </div>

                    <a href="" class="">
                        <button type="submit" class="btn btn-success mb-5">
                            Send
                            <i class="fab fa-telegram-plane text-white"></i>
                        </button>
                    </a>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
