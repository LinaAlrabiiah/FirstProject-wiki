<?php
	$conn = mysqli_connect('localhost','root','','secondpage');
	$q = "select * from lasttime";
	if(!$mq = mysqli_query($conn,$q)){echo mysqli_error($conn);}
	$r = mysqli_fetch_array($mq);
	$t=date("H:i");
	$d=date("m/d/y");

	$i = "update lasttime set time='$t',date='$d' where id=1";
	if(!$mq = mysqli_query($conn,$i)){echo mysqli_error($conn);}


	$qn = "select count(id) from student";
	if(!$mm = mysqli_query($conn,$qn)){echo mysqli_error($conn);}
	$rr = mysqli_fetch_array($mm);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page2</title>
	<style type="text/css">
		input[type="text"]{
			width: 10%;
			margin-top: 5%;
		}
		a{
			float: left;
			margin-right: 30%;
			margin-top: 50%;
			text-decoration: none;
		}
		.slist{
			width: 10%;
			height: 300px;
			background-color:#eee;
			float: left;
		}
		.lTime{
			width: 50%;
			height: 100px;
			background-color: #0099ff;
			margin-top: 5%;
			position: absolute;
			margin-left: 20%;
		}
		form{
			position: absolute;
			top:50%;
			left: 30%;

		}
		input[type="text"]{
			width: 30%;	
		}
		.pp{
			position: absolute;
			top:70%;
		}

	</style>
</head>
	<script type="text/javascript">
		
	</script>
<body>
	<div class="slist">
		<a href="page1.html">First Page</a>
		<a href="page2.php">Second Page</a>
		<a href="page3.html">Third Page</a>
	</div>
<div class="lTime">
	<p>Your last visit was -<?php echo $r[1] ;?> - <?php echo $r[2];?></p>
</div>
<br><br>
<form method="post" action="ins.php">
	<label>ID</label>
	<input type="text" name="id" id="id">

	<label>ISection</label>
	<input type="text" name="sec" id="sec">
	<input type="submit" value="Send">
</form>
<br><br>
<p class="pp">Number of students is: <?php echo $rr[0];?></p>

	

</body>
</html>