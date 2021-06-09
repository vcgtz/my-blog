<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Experimental</title>
</head>
<body>
    @if ($user)
        <h1>{{ $user->name }}</h1>
    @else
        <h1>Guest</h1>
    @endif
</body>
</html>