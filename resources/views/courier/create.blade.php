<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>create courier</h1>

  <form action="{{route("admin.courier.create")}}" method="POST">
    @csrf
    <div>
      <span>name</span>
      <input type="name" name="name">
    </div>
    <div>
      <span>email</span>
      <input type="email" name="email">
    </div>
    <div>
      <span>password</span>
      <input type="password" name="password">
    </div>
    <div>
      <span>address</span>
      <input type="text" name="address">
    </div>
    <div>
      <span>mobile</span>
      <input type="text" name="mobile">
    </div>
    <button type="submit">submit</button>
</body>
</html>