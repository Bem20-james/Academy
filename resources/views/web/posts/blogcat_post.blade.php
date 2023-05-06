@extends('web.layout.home')
@section('content')

<div class="btn-dark">
    <div class="container py-5">
        <div class="row w-100">
            @if ($posts->count() > 0)
            @foreach ($posts as $post)
            <div class="col-md-12 col-lg-4 col-sm-12">
                <div class="card border-0 overflow-hidden shadow-lg">
                    <img src="{{ asset($post->image) }}" style="height: 200px; width: 100%; object-fit: cover;">
                    <div class="py-3 px-4 bg-white">
                        <h5>{{ $post->title}}</h5>
                        <p style="font-size: 12px;" class="text-dark">{{ Str::limit( $post->description, 40, '...')}}</p>
                        <a  href="{{ route('view.post', ['title' => $post->title, 'id' => $post->id]) }}" class="btn btn-success mt-4 Readmore">Read More &rarr;</a>
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <h2 class="text-center">
            There are no blog posts in this category.
        </h2>
            @endif

        </div>
    </div>
</div>

@endsection
