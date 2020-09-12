<html lang="en">
<head>
  <title>Bootstrap Jquery Add More Field Example</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Add variant</div>
    <div class="panel-body">


        <form method="post" action="variantsave" >


      	<div class="input-group control-group">
          <input type="text" name="name[]" class="form-control" placeholder="Enter Name Here">
          <input type="text" name="price[]" class="form-control" placeholder="Enter price Here" required>
          <input type="text" name="quantity[]" class="form-control" placeholder="Enter quantity Here" required>
          <input type="text" name="size[]" class="form-control" placeholder="Enter size Here">
          <input type="text" name="color[]" class="form-control" placeholder="Enter color Here">
          <input type="hidden" name="id" value="{{$id}}">
        </div>
        <div class="input-group control-group after-add-more">
        </div>
        <div class="input-group-btn"> 
            @csrf
        <input  class="btn btn-success" type="submit" value="Save">
        </div>
        </form>
       

      
       

        <div class="input-group-btn"> 
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          </div>
        


        <!-- Copy Fields -->
        <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="text" name="name[]" class="form-control" placeholder="Enter Name Here">
            <input type="text" name="price[]" class="form-control" placeholder="Enter price Here" required>
            <input type="text" name="quantity[]" class="form-control" placeholder="Enter quantity Here" required>
            <input type="text" name="size[]" class="form-control" placeholder="Enter size Here">
            <input type="text" name="color[]" class="form-control" placeholder="Enter color Here">
            <input type="hidden" name="id" value="{{$id}}">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
          
        </div>


    </div>
  </div>
</div>


<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>


</body>
</html>