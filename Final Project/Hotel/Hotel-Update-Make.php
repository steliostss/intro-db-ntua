<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}
	
	$old_hotel_group_id 	=		$_GET['old_hotel_group_id'];
	$old_hotel_id 			=		$_GET['old_hotel_id'];
	
	$Hotel_Group_id			=		$_GET['Hotel_Group_id'];
	$Hotel_id	 			=		$_GET['Hotel_id'];
	$City					=		$_GET['city'];
	$Street					=		$_GET['street'];
	$Number					=		$_GET['street_number'];
	$Postal_Code			=		$_GET['postal_code'];
	$Stars					=		$_GET['Stars'];

	
	$myquery = "UPDATE Hotel
		SET
			Hotel_Group_id			=		'$Hotel_Group_id',
			Hotel_id				=		'$Hotel_id',
			City 					=		'$City',
			Street 					=		'$Street', 
			Number				 	= 		'$Number',
			Postal_Code				= 		'$Postal_Code'
			Stars					=		'$Stars'
		WHERE
			Hotel_id = '$old_hotel_id'
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