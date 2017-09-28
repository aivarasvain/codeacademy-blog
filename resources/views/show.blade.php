@extends('base')

@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <a href="#">{{ $post->title }}</a>
            </div>
            <div class="card-block">
                <div class="post-image">
                    <a href="#"><img src="{{asset('images/' . $post->img_path)}}" alt=""></a>
                </div>
            </div>
            <div class="post-card-footer card-footer text-muted">
                {{ $post->description }}
            </div>
        </div>
    </div>
@endsection