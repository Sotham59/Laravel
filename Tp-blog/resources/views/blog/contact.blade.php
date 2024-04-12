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
    <h1>Contact</h1>

    <!-- formulaire de contact -->
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nom">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Votre message"></textarea>
        <button type="submit">Envoyer</button>
    </form>
@endsection

</body>
</html>