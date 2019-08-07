<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Customer-Update-Make.php" method="GET" align="center">
			<h1 style="font-family:Segoe UI;">Customer Details:  </h1>
				<?php
					$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
					if (mysqli_connect_errno())
					{
						die('Could not connect');
					}
					
					$IRS = $_GET['IRS_Number'];
					
					
					$myquery = "
					SELECT 
						* 
					FROM 
						Customer
					WHERE
						IRS_Number = '$IRS'
					";
										
					$result	= mysqli_query($con,$myquery);
					
					if ($result != 0) {
						$row = mysqli_fetch_array($result);

						$Last_Name 				= 	$row['Last_Name'];
						$First_Name 			= 	$row['First_Name'];
						$Social_Security_Number =	$row['Social_Security_Number'];
						$Street 				= 	$row['Street'];
						$IRS_Number 			= 	$row['IRS_Number'];
						$City 					= 	$row['City'];
						$Number 				=	$row['Number'];
						$Postal_Code 			=	$row['Postal_Code'];				
					}
					else { 
						echo '<div align="center"> Error, no results </div>';
					}
					mysqli_close($con);
				?>
			<br><br>
			<div>
				<label for="first_name">First Name: </label>
				<input type="text" name="first_name" 
				style="width:70%"
				value="<?=$First_Name?>" >
			</div>
			<br><br>
			<div>
				<label for="last_name">Last Name: </label>
				<input type="text" name="last_name" 
				style="width:70%"
				value="<?=$Last_Name?>" >
			</div>
			<br><br>
			<div>
				<label for="IRS_Number">IRS: </label>
				<input type="number" name="IRS_Number"
				value="<?=$IRS_Number?>" >
			</div>
			<br><br>
			<div>
				<label for="ssn">SSN: </label>
				<input type="number" name="ssn"
				value="<?=$Social_Security_Number?>" >
			</div>
			<br><br>
			<div>
				<label for="city">City: </label>
				<input type="text" name="city"
				style="width:70%"
				value="<?=$City?>" >
			</div>
			<br><br>
			<div>
				<label for="street">Street: </label>
				<input type="text" name="street"
				style="width:70%"
				value="<?=$Street?>" >
			</div>
			<br><br>
			<div>
				<label for="street_number">Street Number: </label>
				<input type="number" name="street_number"
				value="<?=$Number?>" >
			</div>
			<br><br>
			<div>
				<label for="postal_code">Postal Code: </label>
				<input type="number" name="postal_code"
				value="<?=$Postal_Code?>" >
			</div>
			<br><br>
			<input type="hidden" name="oldIRS" value="<?=$IRS?>" >
			<input type="submit" value="Update">
		</form>
	</body>

</html>