<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}
	
	$Old_IRS 				=		$_GET['oldIRS'];
	
	$First_Name				=		$_GET['first_name'];
	$Last_Name				=		$_GET['last_name'];
	$Social_Security_Number	=		$_GET['ssn'];
	$IRS_Number				=		$_GET['IRS_Number'];
	$City					=		$_GET['city'];
	$Street					=		$_GET['street'];
	$Number					=		$_GET['street_number'];
	$Postal_Code			=		$_GET['postal_code'];

	if (
		$IRS_Number					===	'' 
		or $Last_Name				===	'' 
		or $First_Name				===	'' 
		or $Social_Security_Number	===	'' 
		or $First_Registration		===	'' 
		or $City					===	'' 
		or $Street					===	'' 
		or $Number					===	'' 
		or $Postal_Code				===	'' )
		{
			header('Location:Customer-Update.html');
			exit;
		}
	
	$myquery = "UPDATE Customer
		SET
			IRS_Number				=	'$IRS_Number', 
			Last_Name 				= 	'$Last_Name', 
			First_Name 				= 	'$First_Name',
			Social_Security_Number 	= 	'$Social_Security_Number',
			City 					=	'$City',
			Street 					=	'$Street', 
			Number				 	= 	'$Number',
			Postal_Code				= 	'$Postal_Code'
		WHERE
			IRS_Number = '$Old_IRS'
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