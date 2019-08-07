<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Amenities-Update-Make.php" method="GET" align="center">
			<br>
			<h1 style="font-family:Segoe UI;">Update Amenity:  </h1>
			<br>
			<div>
				<?php
					$Amenity 	 =	$_GET['Amenity'];	
					$Room_id 		=	$_GET['Room_id'];
				?>
				<label for="Amenity">Amenity: </label>
				<input type="text" name="Amenity"
				value="<?=$Amenity?>" >
			</div>
			<br><br>
			<input type="hidden" name="Room_id" value="<?=$Room_id?>" >
			<input type="hidden" name="Old_Amenity" value="<?=$Amenity?>" >
			<input type="submit" value="Update">
		</form>
	</body>

</html>
