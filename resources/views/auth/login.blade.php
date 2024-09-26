<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valenciennes Museum</title>
</head>
<body>
    <h1>Se connecter</h1>
    <form method="post">
        @csrf
        <label for="name">Login</label>
        <input type="text" name="name">
        @error("name")
        {{ $message }}
        @enderror
        <br>

        <label for="password">Password</label>
        <input type="password" name="password">
        @error("password")
        {{ $message }}
        @enderror
        <br>

        <input type="submit" value="Log in">

        @if(isset($loginFailedMessage))
            {{ $loginFailedMessage }}
        @endif
    </form>


</body>
</html>
