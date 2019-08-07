<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Email-Update-Hotel-Group-Make.php" method="GET" align="center">
			<br>
			<h1 style="font-family:Segoe UI;">Update Hotel Group Email:  </h1>
			<br>
			<div>
				<?php
					$Email_Address 	 =	$_GET['Email_Address'];	
					$Hotel_Group_id 	=	$_GET['Hotel_Group_id'];
				?>
				<label for="Email">Email: </label>
				<input type="email" name="Email"
				value="<?=$Email_Address?>" >
			</div>
			<br><br>
			<input type="hidden" name="Hotel_Group_id" value="<?=$Hotel_Group_id?>" >
			<input type="hidden" name="Old_Email" value="<?=$Email_Address?>" >
			<input type="submit" value="Update">
		</form>
	</body>

</html>