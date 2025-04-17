<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/register">
@csrf
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<label>first name</label> <input name="first_name" required>
<label>lastname</label> <input name="last_name" required>
<label>email</label> <input name="email" type="email" required>
<label>password</label> <input name="password" type="password" required>
<label>confirm password</label> <input name="password_confirmation" type="password" required>

    <button type="submit">Saglabāt</button>

</form>
</body>
</html>