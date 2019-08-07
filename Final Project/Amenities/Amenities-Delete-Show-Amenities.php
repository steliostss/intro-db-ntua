<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Amenities-Delete-Make.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">Delete an Amenity </h1> </legend>
			<br><br>
			<legend><h2 style="font-family:Segoe UI;">Choose an Amenity </h2></legend>
			<div align="center">
				
					<?php
					$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
					$Hotel_Room = $_GET ['Room_id'];
						
						$sql = "SELECT Amenity FROM Amenities WHERE Room_id = '$Hotel_Room';";
						$result = mysqli_query($link,$sql);
						if ($result != 0) {
							echo '<label for="Amenity">Room Amenity: </label>
								  <select name="Amenity">
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Amenity'];
									echo '<option value="' .$name. '">' .$name. '</option>';
								}
								echo '</select>';  
						}
						mysqli_close($link);
				    ?>
					
					
				</select>
			</div>
			<br><br>
			<input type="submit" value="Delete">
			<input type="hidden" name="Room_id" value="<?=$Hotel_Room?>" >
		</form>
	</body>

</html>
