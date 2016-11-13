<html>
<head>
	<title> Edit Password </title>
</head>

<body>
	<script type="text/javascript">
	//alert("js called");
	var asyncRequest; // variable to hold XMLHttpRequest object
	function editPass_validate(field, value)
	{
	//alert("ajax");
		// attempt to create XMLHttpRequest object and make the request
      try
      {
         asyncRequest = new XMLHttpRequest(); // create request object
		 //register event handler
		 asyncRequest.onreadystatechange = function() {
			 if (this.readyState == 4 && this.status == 200) {
				 editPass_checkTextField(field, value);
			 }
		 };
		 asyncRequest.open( "GET", "", true ); // prepare the request
		 asyncRequest.send( null ); // send the request
      } // end try
      catch ( exception )
      {
         alert( "Request Failed" );
      } // end catch
	}

	//validate the fields
	function editPass_checkTextField(field, valuex) {
	//alert("in check");
    if (valuex.value == '') {
        alert(field + " is empty");
		//field.focus();
    }
	//using regular expression, make sure password is valid
	else if (field == 'newpass') {
		var passformat = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
		//if password does not match the format, error message
		if (!valuex.value.match(passformat)) {
			alert("password must be at least 8 characters and contain at least one number and uppercase letter");
		}
	}
	else if (field == "confirm_newpass") {
	    var firstPassword = document.getElementById("newpass").value;
		var confirmPassword = document.getElementById("confirm_newpass").value;
	    if (firstPassword != confirmPassword) {
	        alert("password does not match");
	    }
	}
	}
	</script>
	<form action="" method="post">
		<?php
		if(isset($_POST['submit'])) {
			session_start();
			//$_SESSION['user'] = 'acowan_321@uga.edu';
			//connect to mysql
			$conn = mysql_connect('localhost', 'root', '');
			if(! $conn ) {
				die('Could not connect: ' . mysql_error());
			}
			//connect to netflex database
			mysql_select_db('netflex') or die(mysql_error());
			
			$current_user = $_SESSION['user'];
			
			$oldpass = md5(mysql_real_escape_string($_POST['oldpass']));
			$newpass = md5(mysql_real_escape_string($_POST['newpass']));
			
			//execute the SQL query and return records
			$result = mysql_query("UPDATE users SET Password = '".$newpass."' WHERE Password = '".$oldpass."' AND Email = '".$current_user."'") or die(mysql_error());
			
		}
		?>
    <table width="400" border="0">
		<tr>
			<td> Old Password </td>
			<td><input type="password" name="oldpass" id = "oldpass" onblur = "editPass_validate('oldpass', this)"></td>
		</tr>
		<tr>
			<td> New Password </td>
			<td><input type="password" name="newpass" id = "newpass" onblur = "editPass_validate('newpass', this)"></td>
		</tr>
		<tr>
			<td> Confirm New Password </td>
			<td><input type="password" name="confirm_newpass" id = "confirm_newpass" onblur = "editPass_validate('confirm_newpass', this)"></td>
		</tr>
		<tr>
			<td> <input type="submit" name="editPass_submit" value="SUBMIT"></td>
			<td></td>
		</tr>

	</table>
	</form>
</body>
</html>