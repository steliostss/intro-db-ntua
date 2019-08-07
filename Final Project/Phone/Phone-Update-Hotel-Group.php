<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>


	<body>
		<form action="Phone-Update-Hotel-Group-Show.php" method="GET" align="center">
			<br>
			<legend><h1 style="font-family:Segoe UI;">
			Select a Hotel Group:</h1></legend>
			<br>
			<div>
				<label for="Hotel_Group">Hotel Group: </label>
				<?php
						$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
						$sql = "SELECT Hotel_Group_id FROM Hotel_Group;";
						$result = mysqli_query($con,$sql);
						if ($result != 0) {
								echo '<select required name="Hotel_Group_id">
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Hotel_Group_id'];
									echo '<option value="' .$name. '">' .$name. '</option>';
								}
								echo '</select>';
						}
						mysqli_close($con);
				?>
			</div>
			<br><br>
		
			<input type="submit" value="Next">
		</form>


	</body>
</html>
