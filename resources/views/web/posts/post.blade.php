@extends('web.layout.layouts')
@section('content')

    <div class="my-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <h2 class="text-dark">{{ $post->title }}</h2>
                    <b style="font-size: 12px;" class="text-secondary">{{ Str::limit($post->description, 200, '...') }}</b>
                </div>
            </div>
        </div>
        <div class="container my-2">
            <div class="row w-100">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="card border-0 overflow-hidden">
                        <img src="{{ asset($post->image) }}" style="height: 500px; width: 100%; object-fit: cover;">
                        <div class="px-4 bg-white">
                            <h2 class="text-dark">{{ $post->title }}</h2>
                            <p style="font-size: 12px;" class="text-dark">{{ Str::limit($post->description, 200, '...') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-8">
                    <div class="card border-0 overflow-hidden">
                        @foreach ($categories as $blogcategory)
                        <h1 style="font-family:'Trebuchet MS';" class="justify-content-center">Blogcategory</h1>
                            <img src="{{ asset($blogcategory->image) }}"
                                style="height: auto; width: 100%; object-fit: cover;">
                            <div class="px-4 bg-white">
                                <h2 class="text-dark">{{ $blogcategory->name }}</h2>
                                <p style="font-size: 12px;" class="text-dark">
                                    {{ Str::limit($blogcategory->description, 40, '...') }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- COMMENT SECTION -->
            <div class="col-lg-8 col-md-12 col-sm-8 w-100">
                <div class="card border-0">
                    @foreach ($reviews as $review)
                        <div class="py-3 px-4 bg-white w-100 shadow-lg my-3">
                            <img class="rounded-circle" src="{{ asset($review->review_img) }}" style="height: 40px; width: 40px; object-fit: cover;">
                            <b class="text-dark">{{ $review->full_name }}</b>
                            <p style="font-size: 12px;" class="text-dark">{{ Str::limit($review->content, 300, '...') }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
                <div class="col-lg-8 col-md-12 mt-5">
                    <div class="card border-0 overflow-hidden shadow-lg p-3">
                        <h3 class="title">Leave a review</h3>

                        @if (session('notification'))
                            <h3 class="btn btn-primary  text-center w-100">
                                {{ session('notification') }}
                            </h3>
                        @endif

                        @if (count($errors) > 0)
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item text-danger">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ route('review.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $post->id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail">Full Name</label>
                                <input type="text" name="full_name" class="form-control" required min-length="5">
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="review_img">Image</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                                    <input type="file" class="custom-file-input" name="review_img"
                                        aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Content</label>
                                <textarea rows="5" name="content" class="form-control" required min-length="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
