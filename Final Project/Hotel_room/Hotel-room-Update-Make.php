<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}
	
	$Room_id 				=		$_GET['Room_id'];
	$Hotel_id 				=		$_GET['Hotel_id'];
	
	$Capacity				=		$_GET['Capacity'];
	$View					=		$_GET['View'];
	$Price					=		$_GET['Price'];
	$Expandable				=		$_GET['Expandable'];
	$Repairs_Need			=		$_GET['Repairs_Need'];

	
	$myquery = "
	UPDATE 
		Hotel_Room
	SET
		Capacity		=		'$Capacity',
		View			=		'$View',
		Price 			=		'$Price',
		Expandable 		=		'$Expandable', 
		Repairs_Need	=		'$Repairs_Need'
	WHERE
		Room_id = '$Room_id'
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
