<?php
include "conn.php"; //included of connection in insert.php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];


if (isset($_POST['done'])) { //only insert value from form only if user click submit buttono

	$sql = "insert into myguests(firstname,lastname,email) values('$firstname','$lastname','$email')";
	
	$query = mysqli_query($conn,$sql);
	if ($query) {
		echo "value inserted sucessfully";
	}
	else{
		echo "value insertion failed";
	}

	header("location:display.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>insert operation in php</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
<div class="constainer"> 
	<div class="col-lg-6 m-auto"> <!-- m-auto (margin-auto)specifies the text is in center -->
	<form method="post">

		<div class="card">
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">INSERT OPERATION</h1>
			</div>
			<br>
			<label>Firstname:</label>
			<input type="text" name="firstname" class="form-control"><br>

			<label>Lastname:</label>
			<input type="text" name="lastname" class="form-control"><br>

			<label>E-mail:</label>
			<input type="text" name="email" class="form-control"><br>
			<button class="btn btn-primary" type="submit" name="done">Submit</button>
		</div>
	</form>
		
	</div> 
</div>


</body>
</html>

