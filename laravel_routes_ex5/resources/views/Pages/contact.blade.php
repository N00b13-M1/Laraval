<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <div>
        <a href="{{ url('/') }}">Welcome</a>
        <a href="{{ url('/about') }}">About</a>
    </div>
    <h1>Je suis sur la page Contact</h1> 
    <p>Bonjour c'est {{ $nom }} {{ $prenom }} et mon numméro est le 
        {{$tel}}</p>
</body>
</html>