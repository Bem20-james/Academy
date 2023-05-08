@extends('web.layout.blog')
@section('content')
        <div class="row">
            <div class="col-12 text_on_image">
                <img class="first-img d-block" src="{{ asset('assets/images/4.jpg')}}">
                <div class="centered text-white">
                    <h1 class="h1"><b>Blogs</b></h1>
                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="col-lg-12 col-md-6 col-sm-12 mt-5">
                <h4 class="text-center HEADING mt-5">
                    LATEST BLOGS
                </h4><hr class="hr1"><hr class="hr2"><hr class="hr3">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p class="justify-content-center text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, sint
                         animi? Nulla non consequuntur, magni aut obcaecati laudantium porro magni aut obcaecati laudantium,
                    </p>
                </div>
            </div>
        </div>
    <div class="">
        <div class="container py-5">
            <div class="row w-100">
                @foreach ($posts as $post)
                    <div class="col-md-12 col-lg-4 col-sm-12">
                        <div class="card border-0 overflow-hidden shadow-lg my-4">
                            <img src="{{ asset($post->image) }}" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="py-3 px-4 bg-white">
                                <h5>{{ $post->title}}</h5>
                                <p style="font-size: 12px;" class="text-dark">{{ Str::limit( $post->description, 40, '...')}}</p>
                                <a  href="{{ route('view.post', ['title' => $post->title, 'blogcategory' => $post->blogcategory, 'id' => $post->id]) }}" class="btn btn-success mt-4 Readmore">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
