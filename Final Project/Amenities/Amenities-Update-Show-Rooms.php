<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<br>
		<form action="Amenities-Update-Show-Amenities.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">
			Select a Room:</h1></legend>
			<br>
			<div align="center">
				
					<?php
						$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
						$Hotel_id = $_GET ['Hotel_id'];
						
						$sql = "SELECT Room_id FROM Hotel_Room WHERE Hotel_id = '$Hotel_id';";
						$result = mysqli_query($link,$sql);
						if ($result != 0) {
							echo '<label for="Room_id">Room: </label>
								  <select name="Room_id" required >
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Room_id'];
									echo '<option value="' .$name. '">Room - ' .$name. '</option>';
								}
								echo '</select>';  
						}
						mysqli_close($link);
				    ?>
			</div>
			<br><br>
			
			<input type="hidden" name="Hotel_id" value="<?$Hotel_id?>" >
			<input type="submit" value="Next">
		</form>
	</body>

</html>
