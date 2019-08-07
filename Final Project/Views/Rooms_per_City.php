<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
	</head>
	
	
	<body>
	<br><br>

	<form align="center">
	<?php

		$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
		if (mysqli_connect_errno())
		{
			die('Could not connect');
		}

		$result = mysqli_query($con,"SELECT * FROM Rooms_per_City");

		echo "
			<table border='1' align=center style=background:#f2f2f2>
			<tr>
			<th>City</th>
			<th>Available Rooms</th>
			</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['City'] . "</td>";
			echo "<td>" . $row['Rooms'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);


	?>
	<br><br>	
			<a href = "../Homepage.html" button class="hover_button"
				style="width:20%"> Back to Homepage</a>
	</form>
	</body>
</html>



