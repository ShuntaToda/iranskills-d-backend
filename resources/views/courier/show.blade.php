<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <h1>Courier Orders</h1>
    <a href="{{route("logout")}}">logout</a>
    <div>
      {{-- <a href="{{route("admin.courier.create")}}">create courier</a> --}}
    </div>
    
  <table>
    <h1>Orders</h1>
    <a href="{{route("logout")}}">logout</a>
    <div>
    </div>
    <thead>
      <tr>
        <td>id</td>
        <td>name</td>
        <td>status</td>
        <td>location</td>
        <td>courier name</td>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->name }}</td>
        <td>{{ $order->status }}</td>
        <td>{{ $order->location }}</td>
        <td>{{ $order->courier->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>