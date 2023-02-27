<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Reader</title>
</head>
<body>
    @if (count($articles) == 0)
        <p>No articles found!</p>
    @endif
    @foreach ($articles as $article)
    <h1>{{$article['title']}}</h1>
    <p>{{$article['content']}}</p>
    @endforeach
</body>
</html>