<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}
	
	$oldID 					=		$_GET['oldID'];
	
	$Hotel_Group_id			=		$_GET['Hotel_Group_id'];
	$City					=		$_GET['city'];
	$Street					=		$_GET['street'];
	$Number					=		$_GET['street_number'];
	$Postal_Code			=		$_GET['postal_code'];

	if (
		$Hotel_Group_id					===	'' 
		or $City					===	'' 
		or $Street					===	'' 
		or $Number					===	'' 
		or $Postal_Code				===	'' )
		{
			header('Location:Employee-Update.html');
			exit;
		}
	
	$myquery = "UPDATE Hotel_Group
		SET
			Hotel_Group_id			=	'$Hotel_Group_id',
			City 					=	'$City',
			Street 					=	'$Street', 
			Number				 	= 	'$Number',
			Postal_Code				= 	'$Postal_Code'
		WHERE
			Hotel_Group_id = '$oldID'
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
