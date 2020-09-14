<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
    </script>
</head>
<body>

<div class="container">
  <h2>Add Product</h2>
  <form method="POST" action="productsave" class="was-validated">
    <div class="form-group">
      <label for="uname">Product Name</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter productname" name="productname" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <div class="form-group">
        <label for="uname">Product Price</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter price" name="price" required>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">Please fill out this field.</div>
        <div class="form-group">
            <label for="uname">Product Quantity</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter quantity" name="quantity" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Please fill out this field.</div>
            <div class="form-group">
                <label for="uname">Product Category</label>
                <select name="category" class="browser-default custom-select custom-select-lg mb-3" >
                    <option selected disabled="disabled">Open this select Category</option>
                 @foreach ($data as $data)
                 <option value="{{$data->id}}">{{$data->name}}</option>
                 @endforeach
  
                   
                  </select>
    </div>
    @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      @if (Session::has('message'))

   <div class="alert alert-info">{{ Session::get('message') }}</div>

@endif
@if (Session::has('info'))

<div class="alert alert-info">{{ Session::get('info') }}</div>

@endif
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

</body>
</html>
