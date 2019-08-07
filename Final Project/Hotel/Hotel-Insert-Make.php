<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}

	$Hotel_id				=		$_GET['Hotel_id'];
	$Hotel_Group_id				=		$_GET['Hotel_Group_id'];
	$Stars					=		$_GET['Stars'];
	$City					=		$_GET['city'];
	$Street					=		$_GET['street'];
	$Number					=		$_GET['street_number'];
	$Postal_Code				=		$_GET['postal_code'];

	if (
		$Hotel_Group_id					===	'' 
		or $Hotel_id					===	''
		or $Stars					===	''
		or $City					===	'' 
		or $Street					===	'' 
		or $Number					===	'' 
		or $Postal_Code					===	'' )
		{
			header('Location:Hotel-Insert-Make.php');
			exit;
		}
	
	$result = mysqli_query($con, "INSERT INTO `Hotel`(
		`Hotel_Group_id`,
		`Hotel_id`,
		`Stars`, 
		`City`, 
		`Street`, 
		`Number`, 
		`Postal_Code` 
	) VALUES (
		'$Hotel_Group_id',
		'$Hotel_id',
		'$Stars', 
		'$City', 
		'$Street', 
		'$Number', 
		'$Postal_Code'
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
