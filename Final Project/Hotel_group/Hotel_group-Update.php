<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Hotel_group-Update-Show.php" method="GET" align="center">
			<h1 style="font-family:Segoe UI;">Choose Hotel Group:  </h1>
				
			<br><br>
			<div>
				<?php

				$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
				if (mysqli_connect_errno())
				{
					die('Could not connect');
				}
				$myquery = "SELECT Hotel_Group_id FROM Hotel_Group;";

				$result = mysqli_query($con,$myquery);
				if ($result != 0) {
					echo '<label for="Hotel_Group_id">Hotel Group: </label>
					<select style= "width:70%" name="Hotel_Group_id" required >
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