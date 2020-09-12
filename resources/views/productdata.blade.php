<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product</h2>
       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Variants Add</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->quantity}}</td>
        <td>
          <form method="Post" action="variants?id={{$data->id}}">
            
            @csrf
          <button type="submit" class="btn btn-warning">Add</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

@if(session()->has('info'))
<div class="alert alert-info">
    {{ session()->get('info') }}
</div>
@endif
</div>

</body>
</html>
