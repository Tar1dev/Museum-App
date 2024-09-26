<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valenciennes Museum</title>
</head>
<body>
    <h1>{{ $attributes['name'] }}</h1>
    <img src="" alt="{{ $attributes['name'] }}">
    <p>{{ $attributes['description'] }}</p>

    @auth
        @if(auth()->user()->name === 'admin')

        @endif
    @endauth

</body>
</html>
