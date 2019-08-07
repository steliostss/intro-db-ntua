<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Search_Results.php" method="GET" align="center">
			<h1 style="font-family:Segoe UI;">Booking Details:  </h1>
			<div>
				<?php

				$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
				if (mysqli_connect_errno())
				{
					die('Could not connect');
				}
				$myquery = "SELECT Distinct City FROM Hotel;";

				$result = mysqli_query($con,$myquery);
				if ($result != 0) {
					echo '<label for="City">City: </label>
						<select style= "width:70%" name="City">
						<option value="%" selected>All</option>';
					$num_results = mysqli_num_rows($result);
					for ($i=0;$i<$num_results;$i++) {
						$row = mysqli_fetch_array($result);
						$name = $row['City'];
						echo '<option value="' .$name. '">' .$name. '</option>';
					}
					
					echo '</select>';
				  
				}

				mysqli_close($con);

				?>
			</div>
			<br><br>
			<div>
				<label for="start_date">Start date: </label>
				<input type="date" name="start_date" min="2018-06-01"
				required autofocus placeholder="mm/dd/yyyy">
			</div>
			<br><br>
			<div>
				<label for="end_date">End date: </label>
				<input type="date" name="end_date" min="2018-06-02"
				required autofocus placeholder="mm/dd/yyyy">
			</div>
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
						<select style= "width:70%" name="Hotel_Group_id">
						<option value="%" selected>All</option>';
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
			<div>
				<label for="stars_min">Min Stars: </label>
				<input required type="number" style="width:15%" name="stars_min" 
				value="1" min="1" max="5">
				&nbsp; &nbsp;
				<label for="stars_max">Max Stars:</label>
				<input required type="number" style="width:15%" name="stars_max"
				value="5" min="1" max="5">
			</div>
			<br><br>
			<div>
				<label for="capacity">Room Capacity: </label>
				<select required name="capacity">
					<option value="" disabled selected>Select your option</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<br><br>
			<div>
				<label for="price-min">Min Price (€):</label>
				<input type="number" style="width:15%" name="price-min" step=10 id="price-min" 
				value="10" min="10" max="1000">
				&nbsp; &nbsp;
				<label for="price-max">Max Price (€):</label>
				<input type="number" style="width:15%" name="price-max" step=10 id="price-max"
				value="200" min="50" max="1000">
			</div>
			<br><br>
			<div>
				<label for="wifi">WiFi:</label>
				<input type="checkbox" name="wifi" value="wifi">
				<label for="tv">TV:</label>
				<input type="checkbox" name="tv" value="tv">
				<label for="tv">AC:</label>
				<input type="checkbox" name="AC" value="AC">
				<label for="tv">Fridge:</label>
				<input type="checkbox" name="Fridge" value="Fridge">
			</div>
			<br><br>
			<div>
				<label for="view">View: </label>
				<select name="view">
					<option value="%" selected>All</option>'
					<option value="sea">SEA</option>
					<option value="sea">POOL</option>
				</select>
			</div>
			<br><br>
			<input type="submit" value="Search">
		</form>
	</body>

</html>