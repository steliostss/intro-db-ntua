<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Phone-Delete-Hotel-Show.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">Delete a Phone Number of a Hotel </h1> </legend>
			<br><br>
			<legend><h2 style="font-family:Segoe UI;">Choose a Hotel </h2></legend>
			<div align="center">
				
					<?php
						$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
						$sql = "SELECT Hotel_id FROM Hotel;";
						$result = mysqli_query($link,$sql);
						if ($result != 0) {
							echo '<label for="hotel">Hotel : </label>
								  <select name="hotel" required>
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