@extends('base')
@section('content')
    <div class="col-sm-6 mx-auto">
    <form action="{{route('posts.store')}}" method="POST">

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" id="title" name="title" type="text">
        </div>
        <div class="form-group">
            <label for="img_path">Img</label>
            <input class="form-control" id="img_path" name="img_path" type="text">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <input class="btn btn-success" type="submit">
        {{csrf_field()}}
    </form>
    </div>
@endsection