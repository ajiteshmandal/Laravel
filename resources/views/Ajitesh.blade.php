<!DOCTYPE html>
<html>
<body>
<form action="{{URL::to('/')}}" method="POST">
	{{ csrf_field() }} 

  First name:<br>
  <input type="text" name="name">
  <br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
