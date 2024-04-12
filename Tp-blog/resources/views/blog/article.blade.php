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
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>

    <h2>Commentaires</h2>
  
    <form action="{{ route('comment.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nom">
        <input type="email" name="email" placeholder="Email">
        <textarea name="content" placeholder="Votre commentaire"></textarea>
        <button type="submit">Soumettre</button>
    </form>
@endsection

</body>
</html>