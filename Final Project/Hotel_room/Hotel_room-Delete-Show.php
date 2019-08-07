<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Hotel_room-Delete-Make.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">Delete a Hotel Room </h1> </legend>
			<br><br>
			<legend><h2 style="font-family:Segoe UI;">Choose a Room </h2></legend>
			<div align="center">
				
					<?php
					$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
					$hotel = $_GET ['hotel'];
					
						
						$sql = "SELECT Room_id FROM Hotel_Room WHERE Hotel_id = '$hotel';";
						$result = mysqli_query($link,$sql);
						if ($result != 0) {
							echo '<label for="hotelroom">Hotel Room: </label>
								  <select name="hotelroom" required >
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Room_id'];
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
		</form>
	</body>

</html>