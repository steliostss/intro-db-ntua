<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Hotel-Insert-Make.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">Hotel Details: </h1></legend>
			<div>
			<label for="Hotel_Group">Hotel Group: </label>
	
		<?php
			$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
			$sql = "SELECT Hotel_Group_id FROM Hotel_Group;";
			$result = mysqli_query($con,$sql);
			if ($result != 0) {
		    		echo '<select name="Hotel_Group_id">';
		     		$num_results = mysqli_num_rows($result);
				echo '<option value="" disabled selected>Select your option</option>';
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
				<label for="Hotel_id">Hotel Name: </label>
				<input type="text" name="Hotel_id" id="Hotel_id" 
				required autofocus placeholder="Hotel Name" 
				pattern="[a-zA-Z]{3,}" 
				title="Please enter more than 3 letters">
			</div>
			<br><br>
			<div>
				<label for="Stars">Stars: </label>
				<select name="Stars">
				<option value="" disabled selected>Select your option</option>';
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				</select>
			</div>
			<br><br>
			<div>
				<label for="city">City: </label>
				<input type="text" name="city" id="city" 
				required autofocus placeholder="City"
				title="Enter more than 3 letters">
			</div>
			<br><br>
			<div>
				<label for="street">Street: </label>
				<input type="text" name="street" id="street" 
				required autofocus placeholder="Street"
				title="Enter more than 3 letters">
			</div>
			<br><br>
			<div>
				<label for="street_number">Street Number: </label>
				<input type="number" name="street_number" style="width:55% "id="street_number" 
				required autofocus placeholder="Street Number"
				pattern="[0-9]{1,}" 
				title="Enter at least 1 digit">
			</div>
			<br><br>
			<div>
				<label for="postal_code">Postal Code: </label>
				<input type="text" name="postal_code" id="postal_code" 
				required autofocus placeholder="Postal Code"
				pattern="[0-9]{5}" 
				title="Enter exactly 5 digits">
			</div>
			<br><br>
			<br><br>
			<input type="submit" value="Submit">
		</form>
	</body>

</html>
