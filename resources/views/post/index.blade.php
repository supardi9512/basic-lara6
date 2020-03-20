@foreach($posts as $post)
    <h1>{{ $post->title }}</h1>
    <p>{{ \Illuminate\Support\Str::limit($post->content, 100, ' ...') }}</p>
@endforeach