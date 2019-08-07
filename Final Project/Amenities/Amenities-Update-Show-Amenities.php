<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>


	<body>
		<form action="Amenities-Update-Show-Amenities-Info.php" method="GET" align="center">
			<br>
			<legend><h1 style="font-family:Segoe UI;">
			Select Amenity:</h1></legend>
			<br>
			<div>
				<label for="Amenity">Amenity: </label>
				<?php
						$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");	
						
						$Room_id 	=	$_GET['Room_id'];
	
						$myquery = "
						SELECT
							*
						FROM 
							Amenities
						WHERE
							Room_id = '$Room_id'
						";
						
						$result = mysqli_query($con,$myquery);
						
						if ($result != 0) {
								echo '<select required name="Amenity">
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Amenity'];
									echo '<option value="' .$name. '">' .$name. '</option>';
								}
								echo '</select>';
						}
						mysqli_close($con);
				?>
			</div>
			<br><br>
		
			<input type="hidden" name="Room_id" value="<?=$Room_id?>" >
			<input type="submit" value="Next">
		</form>


	</body>
</html>
