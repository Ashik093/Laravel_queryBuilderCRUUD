<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Contacts</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
	<h1>Contact List</h1>
	<div><a href="{{ URL::to('/') }}" class="btn btn-primary mr-1">Home</a><a href="{{ URL::to('/add-contact') }}" class="btn btn-primary mr-1">Add Contact</a></div>
	<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($contacts as $contact)
	    <tr>
	      <td>{{ $contact->id }}</td>
	      <td>{{ $contact->name }}</td>
	      <td>{{ $contact->email }}</td>
	      <td>{{ $contact->description }}</td>
	      <td><a href="{{ URL::to('/edit-contact/'.$contact->id) }}" class="btn btn-sm btn-primary mr-1">Edit</a><a href="{{ URL::to('/delete-contact/'.$contact->id) }}" class="btn btn-sm btn-danger mr-1">Delete</a><a href="{{ URL::to('/view-contact/'.$contact->id) }}" class="btn btn-sm btn-success mr-1">View</a></td>
	    </tr>
	@endforeach
 
  </tbody>
</table>
</body>
</html>