<?php	
	$con = mysqli_connect("localhost:3306","root","PROJECT","basic");
	if (mysqli_connect_errno())
	{
		die('Could not connect');
	}
	
	$phone = $_GET['phone'];
	
        if ($phone===''){header('Location:Hotel-Delete.php');exit;}
		
		$myquery = "
		DELETE FROM 
			Hotel_Phone_Number 
		WHERE 
			Phone = '$phone';";
			
        $result = mysqli_query($con, $myquery);
			
        if($result === FALSE) {
            die(mysqli_error($con)); 
        }
 
        mysqli_close($con);
    ?>   



<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>
	
	<body>
		<meta http-equiv="refresh" content="2; ../After-Delete.html" />
		<h1 align="center" style="font-family:Segoe UI;">
			<br><br>
			<strong>Redirecting you in 3 seconds...</strong>
		</h1>
	</body>
</html>
