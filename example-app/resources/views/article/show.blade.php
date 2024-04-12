<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - {{ $article->title }}</title>
</head>
<body>
<h1>{{ $article->title }}</h1>
<p>{{ $article->content }}</p>

<h2>Commentaires</h2>
<ul>
    @foreach($article->comments as $comment)
        <li>{{ $comment->content }}</li>
    @endforeach
</ul>
</body>
</html>
