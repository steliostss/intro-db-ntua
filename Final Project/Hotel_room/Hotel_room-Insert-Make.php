<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}

	$Hotel_id				=		$_GET['Hotel_id'];
	$Capacity				=		$_GET['capacity'];
	$View					=		$_GET['view'];
	$Expandable				=		$_GET['expandable'];
	$Price					=		$_GET['price'];
	$Repairs_Need				=		$_GET['repairs_need'];

	if (
		$Hotel_id					===	''
		or $Capacity					===	''
		or $View					===	'' 
		or $Expandable					===	'' 
		or $Price					===	'' 
		or $Repairs_Need				===	'' )
		{
			header('Location:Hotel_room-Insert-Make.php');
			exit;
		}
	
	$result = mysqli_query($con, "INSERT INTO `Hotel_Room`(
		`Hotel_id`,
		`Capacity`, 
		`View`, 
		`Expandable`, 
		`Price`, 
		`Repairs_Need` 
	) VALUES (
		'$Hotel_id',
		'$Capacity', 
		'$View', 
		'$Expandable', 
		'$Price', 
		'$Repairs_Need'
	)");
		
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
