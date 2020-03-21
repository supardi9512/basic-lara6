<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    @if($posts->count())
        @foreach($posts as $post)
            <h1>{{ $post->title }}</h1>
        @endforeach

        <!-- {{ $posts->appends([
            'per-page' => Request::get('per-page'),
            'order' => Request::get('order'),
        ])->render() }} -->

        <!-- PERSINGKAT -->
        <!-- {{ $posts->appends([
            'per-page' => request('per-page'),
            'order' => request('order'),
        ])->render() }} -->

        <!-- LEBIH PERSINGKAT -->
        {{ $posts->appends(request()->only('per-page', 'only'))->render() }}
    @endif
</body>
</html>