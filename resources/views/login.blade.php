<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login</title>
</head>
<body>
  <h1>login</h1>
  <div>
    <form action="{{route("login")}}" method="post">
      @csrf
      <div>
        <span>email</span>
        <input type="email" name="email">
      </div>
      <div>
        <span>password</span>
        <input type="password" name="password">
      </div>
      <button type="submit">submit</button>
    </form>
  </div>
</body>
</html>