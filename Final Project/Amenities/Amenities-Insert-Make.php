<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}
	
	$Room_id				 =	 $_GET['Room_id'];
	$Amenity				 =	 $_GET['Amenity'];	

	if (	$Amenity				===		'' 
		or $Room_id			===		''	)

		{
			header('Location:Amenities-Insert-Make.php');
			exit;
		}
	
	$result = mysqli_query($con, "INSERT INTO `Amenities`(`Room_id`,`Amenity`) VALUES ('$Room_id','$Amenity')");
		
	if($result === FALSE) {
		die(mysqli_error($con)); 
	}
	mysqli_close($con);
?>	

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>
	
	<body>
		<meta http-equiv="refresh" content="2; ../After-Insert.html" />
		<h1 align="center" style="font-family:Segoe UI;">
			<br><br>
			<strong>Redirecting you in 3 seconds...</strong>
		</h1>
	</body>
</html>
