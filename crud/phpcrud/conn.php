<?php

$conn = mysqli_connect("localhost","root","");

mysqli_select_db($conn,"mydb");

if($conn){
	// echo "database conected successfully <br>";
}
else{
	echo "connection failed".$conn ->connect_error;
}
?>