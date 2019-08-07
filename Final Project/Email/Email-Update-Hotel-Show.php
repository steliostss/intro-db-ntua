<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>


	<body>
		<form action="Email-Update-Hotel-Show-Info.php" method="GET" align="center">
			<br>
			<legend><h1 style="font-family:Segoe UI;">
			Select a Hotel:</h1></legend>
			<br>
			<div>
				<label for="Email_Address">Email Address: </label>
				<?php
						$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");	
						
						$Hotel_id 	=	$_GET['Hotel_id'];
	
						$myquery = "
						SELECT
							*
						FROM 
							Hotel_Email_Address
						WHERE
							Hotel_id = '$Hotel_id'
						";
						
						$result = mysqli_query($con,$myquery);
						
						if ($result != 0) {
								echo '<select required name="Email_Address">
								  <option value="" disabled selected>Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$name = $row['Email'];
									echo '<option value="' .$name. '">' .$name. '</option>';
								}
								echo '</select>';
						}
						mysqli_close($con);
				?>
			</div>
			<br><br>
		
			<input type="hidden" name="Hotel_id" value="<?=$Hotel_id?>" >
			<input type="submit" value="Next">
		</form>


	</body>
</html>
