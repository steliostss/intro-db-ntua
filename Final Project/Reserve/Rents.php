<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	
	<?php
		  $con = mysqli_connect("localhost:3306","root","PROJECT","Basic");
        if (mysqli_connect_errno())
        {
            die('Could not connect: ' . mysqli_error($con));
        }
		
        $IRS_Number			=		$_GET['IRS_Number'];
        $Start_Date			=		$_GET['Start_Date'];
        $Finish_Date		=		$_GET['Finish_Date'];
        $amount				=		$_GET['pay'];
        $method				=		$_GET['method'];
		$employee			=		$_GET['employee'];
		$Room_id			=		$_GET['Room_id'];
		
		$sql = "SELECT distinct Hotel_id FROM Hotel_Room WHERE Room_id='$Room_id')";
		$result = mysqli_query($con,$sql);
		
		$num_results = mysqli_num_rows($result);
		for ($i=0;$i<$num_results;$i++) {
			$row = mysqli_fetch_array($result);		
			$Hotel_id = $row['Hotel_id'];
		}
		
		$result =  "INSERT INTO `Rents` (`Room_id`, `Hotel_id`, `Customer_IRS_Number`,`Employee_IRS_Number`, `Start_Date, `Finish_Date`) VALUES 
		('$Room_id', '$Hotel_id','$IRS_Number','$employee','$Start_Date','$Finish_Date')";
		
			


if ($con->query($result) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $result . "<br>" . $conn->error;
}


		echo '<p style="font-size:24px"> Logged in as ' .$IRS_Number. 
		'. Booking room: '.$Room_id. ' from: '.$Start_Date. 
		' to: '.$Finish_Date. ' costing: ' .$FPrices. '€ per day. </p>';
$con->close();		
		?>
</head>
		<form action="MakePay.php" align="center">
<		
<input type="Submit" value="Continue to Pay">
		
</html>
		