<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Accueil</title>
</head>
<body>
<h1>Liste des articles</h1>
<ul>
    @foreach($articles as $article)
        <li>{{ $article->title }}</li>
    @endforeach
</ul>
{{ $articles->links() }}
</body>
</html>
