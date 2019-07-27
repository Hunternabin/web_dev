
<!DOCTYPE html>
<html>
<head>
	<title>diplay</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
<div class="container">
	<div class="col-lg-12 m-auto">
		<br>
		<h2 class="text-center text-warning">DISPLAY TABLE DATA</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
			<th>ID</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Reg_Date</th>
			<th>Delete</th>
			<th>Update</th>
			<th>Insert</th>
			</tr>
			<?php
			include "conn.php";

			$sql = "select * from myguests";
			$query = mysqli_query($conn,$sql);
			
			
			while($res =  mysqli_fetch_array($query)){

			?>

			<tr>
				<td> <?php  echo $res['id']; ?></td>
				<td> <?php  echo $res['firstname']; ?></td>
				<td><?php echo $res['lastname']; ?></td>
				<td><?php  echo $res['email']; ?></td>
				<td> <?php echo $res['reg_date']; ?></td>
				<td> <button class="btn btn-danger"> <a href="delete.php?id= <?php echo $res['id']; ?>" class = "text-white" > Delete</a></button></td>
				<td><button class="btn btn-primary"> <a href="update.php?id=<?php echo $res['id']; ?>" class = "text-white" > Update</a></button></td>
				<!-- name value pair ma lina for update and delete update.php?=...?> leko ho and we update and delete on the basis of id  -->
				<td> <button class="btn btn-info" ><a href="insert.php" class = "text-white">Insert</a></button> </td>
			</tr>
			
			<?php
		}

			?>
		</table>




	</div>

</div>

</body>
</html>