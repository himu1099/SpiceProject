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
</head>
<body>

<div class="container">
  <h2>Add Category</h2>
  <form method="POST" action="categoryadd" class="was-validated">
    <div class="form-group">
      <label for="uname">Category Name</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter categoryname" name="cname" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
      @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

</body>
</html>
