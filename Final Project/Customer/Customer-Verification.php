<!DOCTYPE html>

<html style="background-image:url(../Images/background.jpg);">

	<head>
		<title> DB 2017-18 </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../CSS/stylesheet_general.css"/>
		<link rel="icon" href="../Images/favicon.png"/>
		
	</head>

	<body>
			<?php
					$Finish_Date	=		$_GET['Finish_Date'];
					$Start_Date		=		$_GET['Start_Date'];
					$FPrices		=		$_GET['FPrices'];
					$Room_id		=		$_GET['Rooms'];
			?>
			
			<p style="font-size:70px;text-align:center;color:darked;
			font-family:Segoe UI">Customer Verification:</p>
			<table align="center">
				<tr>
					<td>
						<a href="../Customer/Customer-Update - Copy.php
							?Room_id=<?=$Room_id?>&
							Start_Date=<?=$Start_Date?>&
							Finish_Date=<?=$Finish_Date?>&
							FPrices=<?=$FPrices?>"  
						button class="hover_button" 
						style="vertical-align:middle">
						Existing User</a>
					</td>
					<td>
						<a href="Customer-Insert - Copy.php
							?Room_id=<?=$Room_id?>&
							Start_Date=<?=$Start_Date?>&
							Finish_Date=<?=$Finish_Date?>&
							FPrices=<?=$FPrices?>" 
						button class="hover_button" 
						style="vertical-align:middle">
						New User</a>
					</td>
				</tr>
			</table>
	</body>
		
</html>
