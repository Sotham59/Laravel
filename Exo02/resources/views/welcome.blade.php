<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    @extends('layouts.layout')

    @section('title', 'Bienvenue sur mon site')
    
    @section('content')
        <h1>Bienvenue sur mon site</h1>
        <ul>
            @foreach($pages as $page)
                <li>{{ $page }}</li>
            @endforeach
        </ul>
    @endsection
</body>
</html>