@extends('base')
@section('content')
    <div class="col-sm-6 mx-auto">
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" id="title" name="title" type="text">
        </div>
        <div class="form-group">
            <label for="img_path">Img</label>
            <input onchange="readURL(this);" class="form-control" id="img_path" name="img_path" type="file">
            <br>
            <img id="blah" src="#" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <input class="btn btn-success" type="submit">
        {{csrf_field()}}
    </form>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection