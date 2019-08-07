<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Customer-Update-Show.php" method="GET">
			<legend><h1>Delete a Customer </h1></legend>
			<div>
				<?php
					$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
					$sql = "SELECT IRS_Number, Last_Name, First_Name FROM Customer";
					$result = mysqli_query($link,$sql);
					if ($result != 0) {
						echo '<label for="IRS_Number">Select a Customer: </label>
								<select required  style="width:60%" name="IRS_Number">
								<option value="" disabled selected>
								Select your option</option>';
								$num_results = mysqli_num_rows($result);
								for ($i=0;$i<$num_results;$i++) {
									$row = mysqli_fetch_array($result);
									$IRS_Number = $row['IRS_Number'];
									$Last_Name = $row['Last_Name'];
									$First_Name = $row['First_Name'];
								echo '<option value="' .$IRS_Number. '">' .$IRS_Number. ' - '.$Last_Name.' '.$First_Name.'</option>';
							}
							echo '</select>';  
					}
					mysqli_close($link);
				?>
				</select>
			</div>
			<br><br>
			<input type="submit" value="Update">
		</form>
	</body>

</html>