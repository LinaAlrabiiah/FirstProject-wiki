<?php
	$conn = mysqli_connect('localhost','root','','secondpage');
	$id = $_POST["id"];
	$sec = $_POST["sec"];
	$q = "insert into student(id,section)values('$id','$sec')";
	if(!$mq = mysqli_query($conn,$q)){echo mysqli_error($conn);}
	header("Location: page2.php");
?>