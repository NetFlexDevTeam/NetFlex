<?php
session_start();
if(isset($_POST['submit']))   // checks whether the user clicked sumbit button or not 
	{
		//connect to mysql
		$conn = mysql_connect('localhost', 'root', '');
		if(! $conn ) {
			die('Could not connect: ' . mysql_error());
		}
		//connect to netflex database
		mysql_select_db('netflex') or die(mysql_error());
		
		//get entered values
		//hash password using md5()
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = mysql_real_escape_string($_POST['email']);
		$pass = md5(mysql_real_escape_string($_POST['pass']));
		$address = $_POST['address'];
		
		//check if email is already tied to an account
		$sql=mysql_query("SELECT * FROM users WHERE Email='$email'", $conn);
        if(mysql_num_rows($sql)!= 0) {
            echo"Email already linked to account";
        }
        else { //enter into database
            $sql = "INSERT INTO users ".
			"(UserID, FirstName, LastName, Email, Password, BillingAdd) ".
			"VALUES ".
			"(null, '$first_name', '$last_name', '$email', '$pass', '$address' )";
		 
	        $result = mysql_query( $sql, $conn );
   
		    if(! $result ) {
			    die('Could not enter data: ' . mysql_error());
		    }
        }
	}
?>

<html>
<head>
	<title> Create Account   </title>
</head>

<body>
   <script type="text/javascript">
	//alert("js called");
	var asyncRequest; // variable to hold XMLHttpRequest object
	function validate(field, value)
	{
	//alert("ajax");
		// attempt to create XMLHttpRequest object and make the request
      try
      {
         asyncRequest = new XMLHttpRequest(); // create request object
		 //register event handler
		 asyncRequest.onreadystatechange = function() {
			 if (this.readyState == 4 && this.status == 200) {
				 checkTextField(field, value);
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
	function checkTextField(field, valuex) {
	//alert("in check");
    if (valuex.value == '') {
        alert(field + " is empty");
		//field.focus();
    }
	//using regular expression, make sure email is valid
	else if (field == 'email') {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		//if email does not match the format, error message
		if(!valuex.value.match(mailformat)) {
			alert("please enter a valid email (example@domain.com)");
		}
	}
	else if (field == 'password') {
		var passformat = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
		//if password does not match the format, error message
		if (!valuex.value.match(passformat)) {
			alert("password must be at least 8 characters and contain at least one number and uppercase letter");
		}
	}
	else if (field == "passwordVerify") {
	    var firstPassword = document.getElementById("pass").value;
		var confirmPassword = document.getElementById("passVerify").value;
	    if (firstPassword != confirmPassword) {
	        alert("password does not match");
	    }
	}
	}
	</script>
	
	<form action="" method="post">

    <table width="400" border="0">
		<tr>
			<td> First Name </td>
			<td> <input type "text" name = "first_name"></td>
		</tr>
		<tr>
			<td> Last Name </td>
			<td> <input type = "text" name = "last_name"></td>
		</tr>
		<tr>
			<td> Email </td>
			<td> <input type="text" name="email" onblur = "validate('email', this)"> </td>
		</tr>
		<tr>
			<td> Password  </td>
			<td><input type="password" name="pass" id = "pass" onblur = "validate('password', this)"></td>
		</tr>
		<tr>
			<td> Confirm Password </td>
			<td><input type="password" name="passVerify" id = "passVerify" onblur = "validate('passwordVerify', this)"></td>
		</tr>
		<tr>
			<td> Billing Address </td>
			<td> <input type = "text" name = "address"></td>
		<tr>
			<td> <input type="submit" name="submit" value="SUBMIT"></td>
			<td></td>
		</tr>
	</table>
	</form>
</body>
</html>