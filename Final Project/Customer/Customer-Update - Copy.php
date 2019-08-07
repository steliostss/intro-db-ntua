<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<?php
		$Finish_Date	=		$_GET['Finish_Date'];
		$Start_Date		=		$_GET['Start_Date'];
		$FPrices		=		$_GET['FPrices'];
		$Room_id		=		$_GET['Room_id'];
	?>
	<body>
		<form action="../Reserve/PayNow.php" method="GET">
			<legend><h1>Select Your IRS</h1></legend>
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
			
			<input type="hidden" name="Room_id" value="<?=$Room_id?>" >
			<input type="hidden" name="Start_Date" value="<?=$Start_Date?>" >
			<input type="hidden" name="Finish_Date" value="<?=$Finish_Date?>" >
			<input type="hidden" name="FPrices" value="<?=$FPrices?>" >
			<input type="submit" value="Update">
		</form>
	</body>

</html>