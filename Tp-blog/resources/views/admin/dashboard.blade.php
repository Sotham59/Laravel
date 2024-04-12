<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.admin')

@section('content')
    <h1>Tableau de bord</h1>
    <p>Nombre d'articles : {{ $articleCount }}</p>
    <p>Nombre de commentaires : {{ $commentCount }}</p>
    
@endsection

</body>
</html>