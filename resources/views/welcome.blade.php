<x-layout>
  <x-slot:title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@auth
  <p>Sveiks, {{ Auth::user()->first_name}}</p>
  <form method="POST" action="/logout">
    @csrf
  <button type="submit">logout</button>
</form>
@endauth

@guest
  <p>Sveiks, viesi!</p>
  <a href="/login">Ielogoties!</a>
@endguest
</body>
</html>
</x-layout>