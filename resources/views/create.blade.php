@extends('base')
@section('content')
    <form action="{{route('posts.store')}}" method="POST">
        <label for="title">Title</label>
        <input id="title" name="title" type="text">
        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection