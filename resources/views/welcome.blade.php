<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valenciennes Museum</title>
</head>
<body>
    <h1>Bienvenue au musée de Valenciennes !</h1>
    <p>Scannez le QR-Code pour accéder à la description de nos oeuvres d'art sur notre site !</p>
    @auth()
        Bienvenue {{ \Illuminate\Support\Facades\Auth::user()->name }} !
        <form action="{{ route('auth.logout') }}" method="post">
            @method("delete")
            @csrf
            <button type="submit">Se déconnecter</button>
        </form>
    @endauth
    <a href="{{ route('auth.login') }}">Se connecter</a>
</body>
</html>
