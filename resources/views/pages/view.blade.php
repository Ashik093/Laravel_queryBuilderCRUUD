<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
		<h1>View Contact</h1>
		<a href="{{ URL::to('/') }}" class="btn btn-primary">Home</a>
		<a href="{{ route('all.contacts') }}" class="btn btn-primary">Back to Previous Page</a>
		<p>ID: <b>{{ $data->id }}</b></p>
		<p>Name: <b>{{ $data->name }}</b></p>
		<p>Email: <b>{{ $data->email }}</b></p>
		<p>Description: <b>{{ $data->description }}</b></p>
	</div>
	
</body>
</html>