<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>
	
	<?php
		$Room_id		=		$_GET['Room_id'];
		$Start_Date		=		$_GET['Start_Date'];
		$Finish_Date	=		$_GET['Finish_Date'];
		$FPrices		=		$_GET['FPrices'];		
	?>
	
	<body>
		<form action="Customer-Insert1 - Copy.php" method="GET" align="center">
			<legend><h1 style="font-family:Segoe UI;">Personal Details: </h1></legend>
			<div>
				<label for="first_name">First Name: </label>
				<input type="text" name="first_name" id="first_name" 
				required autofocus placeholder="First Name" 
				pattern="[a-zA-Z]{3,}" 
				title="Please enter more than 3 letters">
			</div>
			<br><br>
			<div>
				<label for="last_name">Last Name: </label>
				<input type="text" name="last_name" id="last_name" 
				required autofocus placeholder="Last Name"
				pattern="[a-zA-Z]{3,}" 
				title="Please enter more than 3 letters">
			</div>
			<br><br>
			<div>
				<label for="ssn">SSN: </label>
				<input type="text" name="ssn" id="ssn" 
				required autofocus placeholder="Social Security Number"
				pattern="[0-9]{8}" 
				title="Please enter exactly 8 digits">
			</div>
			<br><br>
			<div>
				<label for="irs">IRS: </label>
				<input type="text" name="irs" id="irs" 
				required autofocus placeholder="IRS Number"
				pattern="[0-9]{7}" 
				title="Enter exactly 7 digits">
			</div>
			<br><br>
			<div>
				<label for="city">City: </label>
				<input type="text" name="city" id="city" 
				required autofocus placeholder="City"
				title="Enter more than 3 letters">
			</div>
			<br><br>
			<div>
				<label for="street">Street: </label>
				<input type="text" name="street" id="street" 
				required autofocus placeholder="Street"
				title="Enter more than 3 letters">
			</div>
			<br><br>
			<div>
				<label for="street_number">Street Number: </label>
				<input type="number" name="street_number" style="width:55%"id="street_number" 
				required autofocus placeholder="Street Number"
				pattern="[0-9]{1,}" 
				title="Enter at least 1 digit">
			</div>
			<br><br>
			<div>
				<label for="postal_code">Postal Code: </label>
				<input type="text" name="postal_code" id="postal_code" 
				required autofocus placeholder="Postal Code"
				pattern="[0-9]{5}" 
				title="Enter exactly 5 digits">
			</div>
			<br><br>
			<input type="hidden" name="Room_id" value="<?=$Room_id?>" >
			<input type="hidden" name="Start_Date" value="<?=$Start_Date?>" >
			<input type="hidden" name="Finish_Date" value="<?=$Finish_Date?>" >
			<input type="hidden" name="FPrices" value="<?=$FPrices?>" >
			<input type="submit" value="Submit">
		</form>
	</body>

</html>