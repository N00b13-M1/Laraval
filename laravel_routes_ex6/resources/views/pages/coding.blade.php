<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Routes_ex6</title>
</head>
<body>
    <div>
        <p>Test</p>
        @foreach ($prenoms as $noms)
            {{ $noms }}  
        @endforeach
        <br>
        {{ $personne->nom }}
        {{ $personne->prenom }}
        {{ $personne->age }}
    </div>
    
</body>
</html>