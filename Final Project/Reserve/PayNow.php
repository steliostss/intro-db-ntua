<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<?php
	
		$Finish_Date	=	$_GET['Finish_Date'];
		$Start_Date		=	$_GET['Start_Date'];
		$FPrices		=	$_GET['FPrices'];
		$Room_id		=	$_GET['Room_id'];
		$IRS_Number		=	$_GET['IRS_Number'];
		
		echo '<p style="font-size:24px"> Logged in as ' .$IRS_Number. 
		'. Booking room: '.$Room_id. ' from: '.$Start_Date. 
		' to: '.$Finish_Date. ' costing: ' .$FPrices. '€ per day. </p>';
	?>
		
	<body>
		<form action="MakePay.php" align="center">
			<div>
				<label for="method">Payment Method: </label>
					<select name="method" required >
						<option value="" disabled selected>Select your option</option>
						<option value="CARD">Card</option>
						<option value="CASH">Cash</option>
					</select>
			</div>
			<br><br>
			
			<div>
				<label for="pay">Payment Amount: </label>
				<input type="number" min="<?=$FPrices?>" max="<?=$FPrices?>" 
				name="pay" value="<?=$FPrices?>" >
			</div>
			<br><br>
			<div>
			<?php
				$link = mysqli_connect("localhost:3306","root","PROJECT","Basic");
				$sql = "SELECT IRS_number, First_Name, Last_Name FROM Employee;";
				$result = mysqli_query($link,$sql);
				if ($result != 0) {
						echo 'Employee IRS <select required name="employee" >
						<option value="" disabled selected>Select your option</option>';
						$num_results = mysqli_num_rows($result);
						for ($i=0;$i<$num_results;$i++) {
						$row = mysqli_fetch_array($result);
						$IRS_number 	=	 $row['IRS_number'];
						$First_Name 	= 	$row['First_Name'];
						$Last_Name 		= 	$row['Last_Name'];
						echo '<option value="' .$IRS_number. '">' .$IRS_number. ' - '.$Last_Name.' '.$First_Name.'</option>';
					}
					echo '</select>'; 
				}
				?>
			</div>
			<br><br>
			<input type="hidden" name="IRS_Number" value="<?=$IRS_Number?>" >
			<input type="hidden" name="Room_id" value="<?=$Room_id?>" >
			<input type="hidden" name="Start_Date" value="<?=$Start_Date?>" >
			<input type="hidden" name="Finish_Date" value="<?=$Finish_Date?>" >
			<input type="hidden" name="FPrices" value="<?=$FPrices?>" >
			<input type="Submit" value="Pay">
		</form>
	</body>
</html>