<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="Hotel-Room-Update-Make.php" method="GET" align="center">
			<br>
			<h1 style="font-family:Segoe UI;">Hotel Room Details:  </h1>
				<?php
					$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
					if (mysqli_connect_errno())
					{
						die('Could not connect');
					}
					
					$Room_id 	=	$_GET['Room_id'];
					$Hotel_id 	=	$_GET['Hotel_id'];
					
					$myquery = "
					SELECT 
						* 
					FROM 
						Hotel_Room
					WHERE
						Room_id 	= '$Room_id'
					";
										
					$result	= mysqli_query($con,$myquery);
					
					if ($result != 0) {
						$row = mysqli_fetch_array($result);

						$Capacity 			= 		$row['Capacity'];
						$View				=		$row['View'];
						$Expandable			= 		$row['Expandable'];
						$Repairs_Need		= 		$row['Repairs_Need'];
						$Price 				=		$row['Price'];				
					}
					else { 
						echo '<div align="center"> Error, no results </div>';
					}
					mysqli_close($con);
				?>
			<br>
			<div>
				<label for="Price">Price: </label>
				<input type="number" name="Price"
				value="<?=$Price?>" >
			</div>
			<br><br>
			<div>
				<label for="Capacity">Capacity: </label>
				<input type="number" name="Capacity"
				value="<?=$Capacity?>" >
			</div>
			<br><br>
			<div>
				<label for="View">Street View: </label>
				<input type="text" name="View"
				value="<?=$View?>" >
			</div>
			<br><br>
			<div>
				<label for="Expandable">Expandable: </label>
				<input type="number" name="Expandable"
				value="<?=$Expandable?>" >
			</div>
			<br><br>
			<div>
				<label for="Repairs_Need">Repairs Need: </label>
				<input type="number" name="Repairs_Need"
				value="<?=$Repairs_Need?>" >
			</div>
			<br><br>
			<input type="hidden" name="Hotel_id" value="<?=$Hotel_id?>" >
			<input type="hidden" name="Room_id" value="<?=$Room_id?>" >
			<input type="submit" value="Update">
		</form>
	</body>

</html>