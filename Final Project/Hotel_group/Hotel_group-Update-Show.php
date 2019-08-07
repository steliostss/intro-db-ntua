<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Hotel_Group-Update-Make.php" method="GET" align="center">
			<h1 style="font-family:Segoe UI;">Hotel Group Details:  </h1>
				<?php
					$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
					if (mysqli_connect_errno())
					{
						die('Could not connect');
					}
					
					$id = $_GET['Hotel_Group_id'];
					
					
					$myquery = "
					SELECT 
						* 
					FROM 
						Hotel_Group
					WHERE
						Hotel_Group_id = '$id'
					";
										
					$result	= mysqli_query($con,$myquery);
					
					if ($result != 0) {
						$row = mysqli_fetch_array($result);

						$Hotel_Group_id 			= 	$row['Hotel_Group_id'];
						$Street 					= 	$row['Street'];
						$City 						= 	$row['City'];
						$Number 					=	$row['Number'];
						$Postal_Code 				=	$row['Postal_Code'];				
					}
					else { 
						echo '<div align="center"> Error, no results </div>';
					}
					mysqli_close($con);
				?>
			<br><br>
			<div>
				<label for="Hotel_Group_id">Hotel Group Name: </label>
				<input type="text" name="Hotel_Group_id"
				value="<?=$Hotel_Group_id?>" >
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
			<input type="hidden" name="oldID" value="<?=$id?>" >
			<input type="submit" value="Update">
		</form>
	</body>

</html>