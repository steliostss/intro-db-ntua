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
		
		
		//$result = mysqli_query($con, "INSERT INTO Rents 
		//(Room_id, Hotel_id, Customer_IRS_Number,
		//Employee_IRS_Number, Start_Date, Finish_Date) 
		//VALUES 
		//('$Room_id', '$Hotel_id','$IRS_Number','$employee','$Start_Date','$Finish_Date');");
		
		// $my_result = mysqli_query($con,"SELECT LAST_INSERT_ID()");
		
		// $row = mysqli_fetch_array($result);
		// $id=$row['LAST_INSERT_ID()']; 
		
		// $id = "SELECT Renting_Number from rents where (Room_id = '$Room_id' AND Customer_IRS_Number = '$IRS_Number' AND Start_Date = '$Start_Date')";
		
		// $result = mysqli_query($con, "INSERT INTO `Payment_Transaction`
		// ( Payment_Amount, Payment_Method, Renting_Number) 
		// VALUES 
		// ('$amount','$method','$id')");
        //`2
		//if ($result === FALSE) {
        //    die(mysqli_error($con)); 
        //}
		//
		//$result=mysqli_query($con, "
		//SELECT DISTINCT 
		//	Hotel_id
		//FROM 
		//	Hotel_Room
		//WHERE
		//	Hotel_Room.Room_id = '$Room_id'
		//");
		//$row = mysqli_fetch_array($result);
		//
		//$Hotel_id 	=	$row['Hotel_id'];
		//
		//
		//if($result === FALSE) {
		//	die(mysqli_error($con)); 
		//}
		//
		//$result = mysqli_query($con, "
		//UPDATE  Reserves 
		//SET
		//	Start_Date 			=	'$Start_Date',
		//	Finish_Date 		=	'$Finish_Date',
		//	Paid				=	1 
		//WHERE 
		//	Customer_IRS_Number = 	'$IRS_Number' 
		//AND 
		//	Room_id				=	'$Room_id'
		//");
		
	//	if($result === FALSE) {
	//		die(mysqli_error($con)); 
	//	}
	//	mysqli_close($con);
    //?>  
<html style="background-image:url(../Images/background.jpg);">
	<head>
		<title>Redirecting</title>
	</head>
	
	<body>
        <meta http-equiv="refresh" content="2; url=../Homepage.html" />
        <h1 align="center"><strong>Redirecting you in 3 seconds...</strong></h1>
	</body>
</html>