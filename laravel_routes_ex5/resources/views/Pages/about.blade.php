<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <div>
        <a href="{{ url('/') }}">Welcome</a>
        <a href="{{ url('/contact/2/3') }}">Contact</a>
    </div>
    <h1>Je suis sur la page About</h1>
    <p>J'aime des {{ $fruit}}</p>
</body>
</html>