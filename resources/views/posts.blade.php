<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <div class="body">{{ $post->body }}</div>
        </article>
    @endforeach
</body>
</html>