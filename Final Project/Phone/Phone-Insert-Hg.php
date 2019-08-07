<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>


	<body>
	<form action="Phone-Insert-Hg-Make.php" align="center">
		<p style="font-size:70px;text-align:center;color:darked;
		font-family:Segoe UI">Choose Hotel Group:</p>
	
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
			<label for="Phone">Phone Number: </label>
			<input type="text" name="Phone" style="width:55%" id="Phone" 
			required autofocus placeholder="Hotel Group's Phone Number"
			pattern="[0-9]{10}" 
			title="Enter exactly 10 digits">
	</div>
	<br><br>
	<input type="submit" value="Submit">
	</form>


	</body>
</html>


