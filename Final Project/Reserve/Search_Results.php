<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
		<form action="../Customer/Customer-Verification.php" method="GET" align="center">
			<h1>Select Room:  </h1>
			<?php	
				$con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
				if (mysqli_connect_errno())
				{
					die('Could not connect');
				}
				
				$City					=		$_GET['City'];
				$Start_Date				=		$_GET['start_date'];
				$Finish_Date			=		$_GET['end_date'];
				$Hotel_Group_id			=		$_GET['Hotel_Group_id'];
				$stars_min				=		$_GET['stars_min'];
				$stars_max				=		$_GET['stars_max'];
				$Capacity				=		$_GET['capacity'];
				$price_min				=		$_GET['price-min'];
				$price_max				=		$_GET['price-max'];
				$wifi					=		$_GET['wifi'];
				$tv						=		$_GET['tv'];
				$view 					=		$_GET['view'];

				
				$myquery = "
				SELECT
					Hotel_Room.*
				FROM
					Hotel_Room
				WHERE
						(Hotel_Room.Capacity+Hotel_Room.Expandable) >= '$Capacity'
					AND
						Hotel_Room.Price BETWEEN '$price_min' AND '$price_max'
					AND
						Hotel_Room.View like '%'
					AND
						Hotel_Room.Hotel_id IN
						(
							SELECT
								Hotel.Hotel_id
							FROM
								Hotel
							WHERE
								Hotel.Stars BETWEEN '$stars_min' AND '$stars_max'
						)
					AND
						Hotel_Room.Repairs_Need = 0
					AND
						Hotel_Room.Hotel_id IN
						(
							SELECT
								Hotel.Hotel_id
							FROM 
								Hotel
							WHERE
								Hotel.City like '$City'
						)
					AND
						Hotel_Room.Hotel_id IN
						( 
							SELECT
								Hotel.Hotel_id
							FROM
								Hotel
							WHERE
								Hotel.Hotel_Group_id like '$Hotel_Group_id'
						)
					AND
						( 
							Hotel_Room.Room_id NOT IN
							(
								SELECT
									Room_id
								FROM
									Reserves
								WHERE
									Reserves.Room_id = Hotel_Room.Room_id
							)
							
						OR
							Hotel_Room.Room_id IN
							( 
								SELECT
									Reserves.Room_id
								FROM 
									Reserves
								WHERE
								
								(
									Reserves.Finish_date <= '$Start_Date'
									OR
									Reserves.Start_date >= '$Finish_Date'
								)
							)
						)
				";
				
				$result = mysqli_query($con, $myquery);
				
				
				$num_results = mysqli_num_rows($result);
				
				echo '<div style="width:60%">';
					echo '<label for="Rooms">Rooms: </label>
						<select required style= "width:80%" name="Rooms">
						<option value="" disable selected>Select your option</option>';

				for ($i=0;$i<$num_results;$i++) {
					$row = mysqli_fetch_array($result);
					
					$FRoom_id 		= 		$row['Room_id'];
					$FPrices		=		$row['Price'];
					$FCapacity		=		$row['Capacity'];
					$FHotel_id		=		$row['Hotel_id'];
									
					$sql = "
						SELECT Distinct
							City, Hotel_Group_id
						FROM
							Hotel
						WHERE
							Hotel.Hotel_id = '$FHotel_id' 
					";
					
					
					$result2 = mysqli_query($con, $sql);
					
					$num_results2 = mysqli_num_rows($result); 
					
					$counter = 0;
					
					for ($k=0;$k<$num_results2;$k++) {
						$row2 = mysqli_fetch_array($result2);
						
						$FCity				=		$row2['City'];
						$FHotel_Group_id	=		$row2['Hotel_Group_id'];
						$counter++;
						if($counter%$num_results == 1) {
							echo '<option value="' .$FRoom_id. '">	Group: '.$FHotel_Group_id.' --- City: '.$FCity.' --- Hotel: '.$FHotel_id.' --- Capacity: '.$FCapacity.' --- '.$FPrices.'€ per night</option>';
						}
					}
					
					
				
				}
					echo '</select>';	
				echo '</div>';
				
				
				mysqli_free_result($result);
				
				mysqli_close($con);
			?>	
			
			<br><br>
			<input type="hidden" name="Start_Date" value="<?=$Start_Date?>" >
			<input type="hidden" name="Finish_Date" value="<?=$Finish_Date?>" >
			<input type="hidden" name="FPrices" value="<?=$FPrices?>" >
			<input type="submit" value="Select Room">
		</form>
	</body>
</html>
