<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Hotel_group-Delete-Make.php" method="GET">
				<legend><h1 style="font-family:Segoe UI;">Delete a Hotel Group </h1></legend>
			<div>
					
					<?php
						$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
						$sql = "SELECT Hotel_Group_id FROM Hotel_Group;";
						$result = mysqli_query($link,$sql);
						if ($result != 0) {
							echo '<label for="hotel_group">Hotel Group: </label>
								  <select required name="hotel_group">
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Hotel_Group_id'];
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