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
		<form action="Amenities-Rooms-And-Insert.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">
			Select a Hotel:</h1></legend>
			<br>
			<div align="center">
				
					<?php
						$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
						$Hotel_Group_id = $_GET ['Hotel_Group_id'];
					
						$sql = "SELECT Hotel_id FROM Hotel WHERE Hotel_Group_id = '$Hotel_Group_id';";
						$result = mysqli_query($link,$sql);
						if ($result != 0) {
							echo '<label for="Hotel_id">Hotel: </label>
								  <select name="Hotel_id" required >
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Hotel_id'];
									echo '<option value="' .$name. '">' .$name. '</option>';
								}
								echo '</select>';  
						}
						mysqli_close($link);
				    ?>
			</div>
			<br><br>
			<input type="submit" value="Next">
		</form>
	</body>

</html>
