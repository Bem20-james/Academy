@extends('admin.layouts.Admin')
    @section('admin_layout')

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

        <div class="p-5">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
        <section class="content">
            <form class="px-4">
                <div class="form-group row">
                    <div class="form-group col-12">
                        <label for="inputCategoryName4">Newsletter Tittle</label>
                        <div class="custom-file">
                            <input type="text" class="form-control" value="{{ $result->tittle }}" disabled placeholder="Tittle">
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="editor" disabled type="text" placeholder="message" rows="5">{{ $result->content }}</textarea>
                    </div>
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
