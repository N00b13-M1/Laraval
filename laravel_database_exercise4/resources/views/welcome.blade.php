<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        @foreach ($role as $role)
        {{ $role }}
        @endforeach
        @foreach ($comment as $comment)
        {{ $comment }}
        @endforeach
        @foreach ($user as $user)
        {{ $user }}
        @endforeach
    </p>
</body>
</html>