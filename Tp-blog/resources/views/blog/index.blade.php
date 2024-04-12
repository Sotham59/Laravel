<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    @foreach($articles as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            <a href="{{ route('article.show', $article->id) }}">Lire la suite</a>
        </div>
    @endforeach

    {{ $articles->links() }}
@endsection

</body>
</html>