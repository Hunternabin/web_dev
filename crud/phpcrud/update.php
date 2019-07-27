
<?php
include('conn.php');


if (isset($_POST['done'])) {
$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$sql = "update myguests set firstname = '$firstname',lastname = '$lastname' , email = '$email' where id = $id ";

$query =mysqli_query($conn,$sql);
if ($query) {

	echo "data updated successfully";
	
}
else{
	echo "data isnot updated"	;
}

header('location:display.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>update operation</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
<div class="container">
	
	<div class="col-lg-6 ">
		<br><br>
		<div class="card">
			<div class="card-hearder bg-dark">

			<h1 class="text-white text-centers">UPDATE OPERATION</h1>
			<form method="post">
			</div>
			
			<br>
				<label>FirstName:</label>
				<input type="text" name="firstname" class="form-control">
				<br>
				<label>LastName:</label>
				<input type="text" name="lastname" class="form-control">
				<br>
				<label>E-mail:</label>
				<input type="text" name="email" class="form-control">
				<br>
				<button class="btn btn-success" name="done">Update</button>
			</form>
		
	</div>
</div>
</body>

</html>


