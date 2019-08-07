<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>


	<body>
	<form action="Email-Insert-H-Make.php" align="center">
		<p style="font-size:70px;text-align:center;color:darked;
		font-family:Segoe UI">Choose Hotel:</p>
	
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
				<label for="Email">Email Address: </label>
				<input type="email" size="32" minlength="5" maxlength="64"
				style="width:55%" name="Email" id="Email" 
				required autofocus placeholder="Hotel's Email Address"
				pattern="[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
	</div>


	<br><br>
	<input type="submit" value="Submit">
	</form>


	</body>
</html>
