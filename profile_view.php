<html>
<head>
	<title> View Profile </title>
</head>

<body>
	<?php
	session_start();
	//connect to mysql
		$conn = mysql_connect('localhost', 'root', '');
		if(! $conn ) {
			die('Could not connect: ' . mysql_error());
		}
		//connect to netflex database
		mysql_select_db('netflex') or die(mysql_error());
		
		$current_user = $_SESSION['user'];
		//execute the SQL query and return records
        $result = mysql_query("SELECT * FROM users WHERE email = '$current_user'") or die(mysql_error());
		$result_arr = mysql_fetch_array($result);
	?>

    <table width="400" border="0">
		<tr>
			<td> First Name </td>
			<?php echo'<td>'.$result_arr['FirstName'].'</td>';?>
		</tr>
		<tr>
			<td> Last Name </td>
			<?php echo'<td>'.$result_arr['LastName'].'</td>';?>
		</tr>
		<tr>
			<td> Email </td>
			<?php echo'<td>'.$result_arr['Email'].'</td>';?>
		</tr>
		<tr>
			<td> Password  </td>
			<td><a href = "edit_password.php"><i>Edit</i></a></td>
		</tr>
		<tr>
			<td> Billing Address </td>
			<?php echo'<td>'.$result_arr['BillingAdd'].'</td>';?>
		<tr>
			<td> </td>
			<td></td>
		</tr>
	</table>
</body>
</html>