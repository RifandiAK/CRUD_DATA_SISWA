<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ibupedia</title>
</head>
<body style="background-color: white;">
    <div class="container mt-5 mb-5">
        <div class="mt-5 p-4 bg-primary text-white rounded">
            <img src="{{asset('storage/posts/'.$post->image)}}" class="w-100 rounded" alt="">
            <hr>
            <h4>{{$post->title}}</h4>
            <p class="tmt-3">
                {!! $post->content !!}
            </p>
            <a href="/posts" class="btn btn-dark">BACK</a>
        </div>
    </div>
</body>
</html>