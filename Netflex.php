<?php
session_start();
if(isset($_POST['submit'])){

}
?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Netflex - and chill</title>
		<link href="NetflexStyle.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="http://deberardino.com/favicon.ico" />
 <script src="NetflexJS.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<link rel="stylesheet" href="carousel.css">
<script src="carousel.js"></script>
 
	</head>
<body>
<div class="wrap">
<header>
<?php 

if(!isset($_SESSION['user'])){
?>
<a class="button" style="float:right;margin-left:15px; " href="#signup"> SIGN-UP</a>
<a class="button" style="float:right; " href="#login"> LOGIN</a>
<?php }else { ?>

<a class="button" style="float:right;margin-left:15px; " href="Logout.php"> LOGOUT</a>
<a class="button" style="float:right; " href="#profile"> PROFILE</a>

<?php } ?>
<img src="Netflex.png"></img>
</header>
<?php 

if(!isset($_SESSION['user'])){
?>
<br/>
<br/>
<br/>
<a class="button" href="#freetrial"> TRY A FREE MONTH TRIAL</a><br/><br/><br/>
<input style="position:absolute;bottom:0;" class="toggle-box" id="header1" type="checkbox" >
<label for="header1">View Current Project Todolist </label>
<div>
<todolist>
<font style="color:black">Registration Process </font>(Email confirmation/Text based confirmation still to be done)<br/>
<font style="color:black">Login Process (PHP Session Store - @Ryan suggestion we can do something else)</font> - Still needs a little work, and css/styling work<br/>
Forgot Password Process (Email/Text code confirmation modal page)<br/>
<font style="color:black">Logout Process (easy with php, simply .php function you call then loop back to main home page</font><br/>
<font style="color:black">Code Video Sliders (Javascript/AJAX enabled)</font><br/>
Code Video Players (Will research a few AJAX video based APIS and we can like fill every video with rick roll or something<br/>
Code Administrative Pages:<br/>
&nbsp&nbsp&nbsp&nbspAdd Title/ Edit Title/ Delete Title<br/>
&nbsp&nbsp&nbsp&nbspEdit Users/ Delete Users<br/>
Code Client Pages:<br/>
&nbsp&nbsp&nbsp&nbspEdit Account Settings/ Delete Account<br/>
Design the clients header while both logged in and logged out<br/>
Design the footer while both logged in and out<br/>
Design the Footer info filler pagers ( About us/ Contact Us/ etc)<br/>
<font style="color:black">HTACCESS file to remove file extensions</font><br/>
<font style="color:black">Design site Favicon (Icon in user tabs)</font><br/>
More to come.
</todolist>
</div>
<?php } ?>

<?php 

if(isset($_SESSION['user'])){
?>

<script>
    $(document).ready(function(){
  $('.loop').owlCarousel({
    items:8,
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
center:true
});

});
</script>

<div style="min-width:1000px; max-height:320px; overflow:hidden;">
<div class="loop" style="margin-top:20px;">
  <div style=" height:auto; width:auto;"> <img  src="http://netdna.webdesignerdepot.com/uploads/2011/02/jurassicpark.jpg" alt="Movie1" ></div>
   <div style=" height:auto; width:auto;">  <img  src="http://imgc.allpostersimages.com/images/P-473-488-90/21/2126/GJJED00Z/posters/pulp-fiction-cover-with-uma-thurman-movie-poster.jpg" alt="Movie2" > </div>
   <div style=" height:auto; width:auto;">  <img src="http://graphicdesignjunction.com/wp-content/uploads/2011/12/grey-movie-poster.jpg" alt="Movie3" > </div>
 <div style=" height:auto; width:auto;">  <img src="https://s-media-cache-ak0.pinimg.com/564x/de/c0/d5/dec0d52330241d9fe1fa4f666c607935.jpg" alt="Movie4" > </div>
 <div style=" height:auto; width:auto;">  <img src="http://www.impawards.com/2013/posters/thor_the_dark_world_ver5_xxlg.jpg" alt="Movie5" > </div>
 <div style=" height:auto; width:auto;">  <img src="http://www.tqsmagazine.co.uk/wp-content/uploads/2012/02/warhorse.jpg" alt="Movie6" > </div>
 <div style=" height:auto; width:auto;">  <img src="https://doublefeature.fm/images/covers/mad-max-fury-road.jpg" alt="Movie7" > </div>
 <div style=" height:auto; width:auto;">  <img src="https://images-na.ssl-images-amazon.com/images/I/91U0TwNG23L._SL1500_.jpg" alt="Movie8" > </div>
</div>
</div>
</div>

<script>
    $(document).ready(function(){
  $('.loop2').owlCarousel({
    items:8,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
center:true
});

});
</script>

<div style=" margin-top:10px;min-width:1000px; max-height:320px; overflow:hidden;">
<div class="loop2" style="">
  <div style=" height:auto; width:auto;"> <img  src="http://netdna.webdesignerdepot.com/uploads/2011/02/jurassicpark.jpg" alt="Movie1" ></div>
   <div style=" height:auto; width:auto;">  <img  src="http://imgc.allpostersimages.com/images/P-473-488-90/21/2126/GJJED00Z/posters/pulp-fiction-cover-with-uma-thurman-movie-poster.jpg" alt="Movie2" > </div>
   <div style=" height:auto; width:auto;">  <img src="http://graphicdesignjunction.com/wp-content/uploads/2011/12/grey-movie-poster.jpg" alt="Movie3" > </div>
 <div style=" height:auto; width:auto;">  <img src="https://s-media-cache-ak0.pinimg.com/564x/de/c0/d5/dec0d52330241d9fe1fa4f666c607935.jpg" alt="Movie4" > </div>
 <div style=" height:auto; width:auto;">  <img src="http://www.impawards.com/2013/posters/thor_the_dark_world_ver5_xxlg.jpg" alt="Movie5" > </div>
 <div style=" height:auto; width:auto;">  <img src="http://www.tqsmagazine.co.uk/wp-content/uploads/2012/02/warhorse.jpg" alt="Movie6" > </div>
 <div style=" height:auto; width:auto;">  <img src="https://doublefeature.fm/images/covers/mad-max-fury-road.jpg" alt="Movie7" > </div>
 <div style=" height:auto; width:auto;">  <img src="https://images-na.ssl-images-amazon.com/images/I/91U0TwNG23L._SL1500_.jpg" alt="Movie8" > </div>
</div>
</div>
</div>
<br/>
</div>
<?php } ?>
<div id="signup" class="modalDialog">
   <div> <a href="#close" title="Close" class="close">X</a>

        	<center>Welcome to Netflex!</center>
<center><font style="font-size:11">Sign-Up Here</font></center><br/>

<?php 
if(isset($_POST['passVerify'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$pass = md5(($_POST['pass']));
		$address = $_POST['address'];
		//check if email is already tied to an account
		$sql="SELECT * FROM users WHERE Email='$email'";

$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");
if ($mysqli->connect_errno) {
    						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					} else {
if(!$result = $mysqli->query($sql)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {
							$row = $result->fetch_assoc();
							if($row != null){
echo '<center><font style="color:red";>Email already in use, please try again</font></center>';
}else {
$sql = "INSERT INTO users ".
			"(UserID, FirstName, LastName, Email, Password, BillingAdd) ".
			"VALUES ".
			"(null, '$first_name', '$last_name', '$email', '$pass', '$address' )";
if(!$result = $mysqli->query($sql)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {
echo"success!";
}
}
}

}
               
		
}
?>
 <script type="text/javascript">
var user = 0;
var pass = 0;
var confPass = 0;
	//alert("js called");
	var asyncRequest; // variable to hold XMLHttpRequest object
	function validate2(field, value)
	{
	//alert("ajax");
		// attempt to create XMLHttpRequest object and make the request
      try
      {
         asyncRequest = new XMLHttpRequest(); // create request object
		 //register event handler
		 asyncRequest.onreadystatechange = function() {
			 if (this.readyState == 4 && this.status == 200) {
				 checkTextField2(field, value);
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
	function checkTextField2(field, valuex) {
	//alert("in check");
    if (valuex.value == '') {

if(field=='email'){
$('.emailValidator').html('<img src="Images/redx.png" alt="Email must be entered" height="23" title="Email must be entered" width="23"> ');
user =0;
}else if(field=='password'){
pass = 0;
$('.firstPasswordValidator').html('<img src="Images/redx.png" alt="Password must be entered" height="23" title="Password must be entered" width="23"> ');
}else if(field=='passwordVerify'){
$('.secondPasswordValidotr').html('<img src="Images/redx.png" alt="Confirmation password must be entered" height="23" title="Confirmation  password must be entered" width="23"> ');
confPass = 0;
}

		//field.focus();
    }
	//using regular expression, make sure email is valid
	else if (field == 'email') {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		//if email does not match the format, error message
		if(!valuex.value.match(mailformat)) {

$('.emailValidator').html('<img src="Images/redx.png" alt="Email must be valid" height="23" title="Email must be valid" width="23"> ');
user =0;
		}else {
$('.emailValidator').html('<img src="Images/greencheck.png" alt="Email valid!" height="23" title="Email valid!" width="23"> ');
user =1;
}
	}
	else if (field == 'password') {
		var passformat = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
		//if password does not match the format, error message
		if (!valuex.value.match(passformat)) {

$('.firstPasswordValidator').html('<img src="Images/redx.png" alt="Password must be at least 8 characters and contain at least one number and uppercase letter" height="23" title="Password must be at least 8 characters and contain at least one number and uppercase letter" width="23"> ');
	pass = 0;	
}else{
$('.firstPasswordValidator').html('<img src="Images/greencheck.png" alt="Password valid!" height="23" title="Password valid!" width="23"> ');
pass = 1;
}
	}
	else if (field == "passwordVerify") {
	    var firstPassword = document.getElementById("pass").value;
		var confirmPassword = document.getElementById("passVerify").value;
	    if (firstPassword != confirmPassword) {

$('.secondPasswordValidotr').html('<img src="Images/redx.png" alt="Passwords do not match" height="23" title="Passwords do not match" width="23"> ');
confPass = 0;	   
 }else {
$('.secondPasswordValidotr').html('<img src="Images/greencheck.png" alt="Password matches!" height="23" title="Password matches!" width="23"> ');
confPass = 1;
}
	}

document.getElementById("signupSubmit").disabled = true;
if(confPass == 1){
if(pass==1){
if(user=1){
document.getElementById("signupSubmit").disabled = false;
}
}
}
	}
	</script>
	
	<form action="" method="post">
<center>
    <table  border="0">
		<tr>
			<td> First Name </td>
			<td style="padding-left:25px;"> <input type "text" name = "first_name"></td>

		</tr>
		<tr>
			<td> Last Name </td>
			<td style="padding-left:25px;"> <input type = "text" name = "last_name"></td>
		</tr>
		<tr>
			<td> Email </td>
			<td style="padding-left:25px;"> <input type="text" name="email" onblur = "validate2('email', this)"> </td>
<td><span class="emailValidator"> </span>  </td>
		</tr>
		<tr>
			<td> Password  </td>
			<td style="padding-left:25px;"><input type="password" name="pass" id = "pass" onblur = "validate2('password', this)"></td>
<td><span class="firstPasswordValidator"> </span>  </td>
		</tr>

		<tr>
			<td> Confirm Password </td>
			<td style="padding-left:25px;"><input type="password" name="passVerify" id = "passVerify" onblur = "validate2('passwordVerify', this)"></td>
<td><span class="secondPasswordValidotr"> </span>  </td>
		</tr>
		<tr>
			<td> Billing Address </td>
			<td style="padding-left:25px;"> <input type = "text" name = "address"></td>
		
	</table><br/>
<center> <input type="submit" id="signupSubmit" name="submit" value="SUBMIT"> </center>
	</form>
</center>
</div>
</div>



<div id="login" class="modalDialog">
   <div> <a href="#close" title="Close" class="close">X</a>

        	<center>Welcome back to Netflex!</center>
<center><font style="font-size:11">Client Log In</font></center>

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
if(field=='email'){
$('.loginEmailValidator').html('<img src="Images/redx.png" alt="Email must be entered" height="23" title="Email must be entered" width="23"> ');
}else if(field=='password'){
$('.loginPassValidator').html('<img src="Images/redx.png" alt="Password must be entered" height="23" title="Password must be entered" width="23"> ');
}
		//field.focus();
    }
	//using regular expression, make sure email is valid
	else if (field == 'email') {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		//if email does not match the format, error message
		if(!valuex.value.match(mailformat)) {
$('.loginEmailValidator').html('<img src="Images/redx.png" alt="Email must be valid!" height="23" title="Email must be valid!" width="23"> ');
		}else {
$('.loginEmailValidator').html('<img src="Images/greencheck.png" alt="Email valid!" height="23" title="Email valid!" width="23"> ');
}
	}
	}
	</script>

<?php
if(!isset($_SESSION['user'])){
if(isset($_POST['loginEmail'])){
$email = $_POST['loginEmail'];
$pass = md5($_POST['loginPass']);
$sql="SELECT * FROM users WHERE Email='$email'";

$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");
if ($mysqli->connect_errno) {
    						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					} else {
if(!$result = $mysqli->query($sql)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {
							$row = $result->fetch_assoc();
							if($row != null){
if($pass == $row['Password']){
$_SESSION['user'] = $email;
$_SESSION['user_id'] = $row['UserID'];
echo '<META HTTP-EQUIV="Refresh" Content="0; Netflex" > ';
}else {
echo "Incorrect Password!"; 
}
}
}
}
}


}

?>
<br/>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<center>
    <table  border="0">
  <tr>
    <td>  Email</td>
    <td style="padding-left:25px;"> <input type="text" name="loginEmail" onblur = "validate('email', this)"> </td>
<td><span class="loginEmailValidator"> </span> </td>
  </tr>
  <tr>
    <td> Password  </td>
    <td style="padding-left:25px;"><input type="password" name="loginPass" onblur = "validate('password', this)"></td>
<td><span class="loginPassValidator"> </span> </td>
  </tr>
</table>
Forget password? <a href="#accountRecover">Recover account here.</a><br/>
<center>  <input type="submit" style="margin-top:5px;" name="login" value="LOGIN"> </center>
</center>
</form>
    </div></div>

<div id="freetrial" class="modalDialog">
   <div> <a href="#close" title="Close" class="close">X</a>

        	<center>Free Trial</center>
<center><font style="font-size:11">Sign up for free trial</font></center>

        <br/>		 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	 <br/>	
    </div></div>
</body>
</html>