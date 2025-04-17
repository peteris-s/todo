<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/login">
@csrf
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<label>email</label> <input name="email" type="email" required>
<label>password</label> <input name="password" type="password" required>


    <button type="submit">Ienakt</button>

</form>
</body>
</body>
</html>