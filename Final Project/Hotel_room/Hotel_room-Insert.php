<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Hotel_room-Insert-Make.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">Room Details: </h1></legend>
			<div>
			<label for="Hotel">Hotel: </label>
	
			<?php
				$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
				$sql = "SELECT Hotel_id FROM Hotel;";
				$result = mysqli_query($con,$sql);
				if ($result != 0) {
			    		echo '<select name="Hotel_id">';
			     		$num_results = mysqli_num_rows($result);
					echo '<option value="" disabled selected>Select your option</option>';
			    		for ($i=0;$i<$num_results;$i++) {
			        	$row = mysqli_fetch_array($result);
			        	$name = $row['Hotel_id'];
			        	echo '<option value="' .$name. '">' .$name. '</option>';
			    		}
			    		echo '</select>';
				}
				mysqli_close($con);
			?>

			</div>
			<br><br>
			<div>
				<label for="capacity">Capacity: </label>
				<input type="number" name="capacity" id="capacity" 
				required autofocus placeholder="Number of People"
				pattern="[0-9]{1,}" 
				title="Enter at least 1 digit">
			</div>
			<br><br>
			<div>
				<label for="view">View: </label>
				<input type="text" name="view" id="view" 
				required autofocus placeholder="e.g. Sea,Pool,etc."
				pattern="[a-zA-z]{2,}" 
				title="Enter at least 2 letters">
			</div>
			<br><br>
			<div>
				<label for="expandable">Expandable: </label>
				<input type="bool" name="expandable" id="expandable" 
				required autofocus placeholder="1 = Yes , 0 = No">
			</div>
			<br><br>
			<div>
				<label for="Price">Price: </label>
				<input type="number" name="price" id="price" step=10
				required autofocus placeholder="Price per night"
				pattern="[0-9]{1,}" 
				title="Enter at least 1 digit">
			</div>
			<br><br>
			<div>
				<label for="Repairs_Need">Repairs Need: </label>
				<input type="bool" name="repairs_need" id="repairs_need" 
				required autofocus placeholder="1 = Yes , 0 = No">
			</div>
			<br><br>
			<input type="submit" value="Submit">
		</form>
	</body>

</html>
