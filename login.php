<?php
//start session
session_start();
if (isset($_SESSION['user'])) {
    //already logged in
    //redirect to homepage
    header("Location:netflex.php");

} else {
    //not logged in
    if(isset($_POST['login']))   // checks whether the user clicked login button or not 
	{
		//connect to mysql
		mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('netflex') or die(mysql_error());
	 
		//get entered username and password
		//protect against sql injectin using mysql_real_escape_string()
		//hash password using md5()
		$user = mysql_real_escape_string($_POST['user']);
		$pass = md5(mysql_real_escape_string($_POST['pass']));
	 
		if($user != ''&& $pass != '') //if not empty
		{
			$query = mysql_query("SELECT * FROM users WHERE email='".$user."' AND password ='".$pass."'") or die(mysql_error());
			$result = mysql_fetch_row($query);
			if($result)
			{
				$_SESSION['user'] = $user;
				header('location:netflex.php');
			}
			else
			{
				echo'Username or password is incorrect';
			}
		}
		else
		{
			echo'Enter both username and password';
		}
}
}
?>

<html>
<head>

<title> Login Page   </title>

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
	}

	</script>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

    <table width="200" border="0">
  <tr>
    <td>  Email</td>
    <td> <input type="text" name="user" onblur = "validate('email', this)"> </td>
  </tr>
  <tr>
    <td> Password  </td>
    <td><input type="password" name="pass" onblur = "validate('password', this)"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>