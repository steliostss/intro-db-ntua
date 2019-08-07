<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Phone-Update-Hotel-Make.php" method="GET" align="center">
			<br>
			<h1 style="font-family:Segoe UI;">Update Hotel Phone:  </h1>
			<br>
			<div>
				<?php
					$Phone 	 		=	$_GET['Phone'];	
					$Hotel_id 		=	$_GET['Hotel_id'];
				?>
				<label for="Phone">Phone: </label>
				<input type="number" name="Phone"
				value="<?=$Phone?>" >
			</div>
			<br><br>
			<input type="hidden" name="Hotel_id" value="<?=$Hotel_id?>" >
			<input type="hidden" name="Old_Phone" value="<?=$Phone?>" >
			<input type="submit" value="Update">
		</form>
	</body>

</html>