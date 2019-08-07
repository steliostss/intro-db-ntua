<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}
	
	$Phone 			=	$_GET['Phone'];
	$Old_Phone		=	$_GET['Old_Phone'];
	$Hotel_id 		=	$_GET['Hotel_id'];

	$myquery = "
	UPDATE 
		Hotel_Phone_Number
	SET
		Phone 		= 	'$Phone'
	WHERE
		Hotel_id	= 	'$Hotel_id'
		AND
		Phone 		=	'$Old_Phone'
	";
	
	$result = mysqli_query($con, $myquery);
	
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
		<meta http-equiv="refresh" content="2; ../After-Update.html" />
		<h1 align="center" style="font-family:Segoe UI;">
			<br><br>
			<strong>Redirecting you in 3 seconds...</strong>
		</h1>
	</body>
</html>
