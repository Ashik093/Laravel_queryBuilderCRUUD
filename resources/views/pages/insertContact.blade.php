<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Add Contact</h1>
	<form action="{{ url('/insert-contact') }}" method="post">
		@csrf
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name: </label>
	    <input name="name" type="text" class="form-control" placeholder="Enter Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Email</label>
	    <input name="email" type="text" class="form-control" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Description</label>
	    <input name="description" type="text" class="form-control" placeholder="Description">
	  </div>
	  <button type="submit" class="btn btn-primary">ADD</button>
	</form>
	</div>
</body>
</html>