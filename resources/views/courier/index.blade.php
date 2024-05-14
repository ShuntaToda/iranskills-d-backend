<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table>
    <h1>Couriers</h1>
    <a href="{{route("logout")}}">logout</a>
    <div>
      <a href="{{route("admin.courier.create")}}">create courier</a>
    </div>
    <thead>
      <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
        <td>mobile</td>
        <td></td>
      </tr>
    </thead>
    <tbody>
      @foreach($couriers as $courier)
      <tr>
        <td>{{$courier->id}}</td>
        <td>{{$courier->name}}</td>
        <td>{{$courier->email}}</td>
        <td>{{$courier->address}}</td>
        <td>{{$courier->mobile}}</td>
        <td><a href="{{route("admin.courier.show", $courier->id)}}">show orders</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>