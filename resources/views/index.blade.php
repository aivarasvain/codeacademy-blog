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
                                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                            </div>
                            <div class="card-block">
                                <div class="post-image">
                                    <a href="#"><img src="{{asset($post->img_path)}}" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer">
                                @if(Auth()->user()->id == $post->user->id )
                                <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a class="btn btn-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                @else
                                {{ $post->user->name }}
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection