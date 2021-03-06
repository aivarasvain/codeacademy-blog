@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4">
            <h4 class="text-center">What's your drive?</h4>
            <p class="text-center">Explore Inspirational Moments in Sport, Scholarship & Community Service</p>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="#">{{ $post->title }}</a>
                        </div>
                        <div class="card-block">
                            <div class="post-image">
                                <a href="{{ route('posts.show', $post->id) }}"><img src="{{asset('images/' . $post->img_path)}}" alt=""></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a class="btn btn-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection