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
<!-- Include the core jQuery and jQuery UI -->
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>


<link rel="stylesheet" href="carousel.css">
<script src="carousel.js"></script>

	</head>

<?php 
if(isset($_SESSION['user'])){
echo '<body style="background-color:red;">';
}
if(!isset($_SESSION['user'])){
echo '<body style="background-color:black;">';
}
?>



<?php 
if(isset($_SESSION['user'])){
?>
<div class="wrap2">
<header>
<?php
}
if(!isset($_SESSION['user'])){
?>
<div class="wrap">
<header>
<a class="button" style="float:right;margin-left:15px; " href="?freetrial=false#signup"> SIGN-UP</a>
<a class="button" style="float:right; " href="#login"> LOGIN</a>
<?php }else { ?>

<a class="button" style="float:right;margin-left:15px; " href="Logout.php"> LOGOUT</a>
<a class="button" style="float:right; " href="#profile"> PROFILE</a>

<?php } ?>


<?php 
if(isset($_SESSION['user'])){
?>
<img src="NetflexTest.png" style="margin-left:60px;margin-top:20px;"></img>
<?php
}
if(!isset($_SESSION['user'])){
?>
<img src="NetflexTest.png" style="margin-left:160px;margin-top:20px;"></img>
<?php 
}
?>

</header>
<?php 

if(!isset($_SESSION['user'])){
?>
<br/>
<br/>
<br/>
<a class="button" href="?freetrial=true#signup" style="margin-left:160px;"> TRY A FREE MONTH TRIAL</a><br/><br/><br/>

</div>


<?php } ?>

<?php 

if(isset($_SESSION['user'])){
?>
<br/><br/><br/>
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

<div style="min-width:1000px; width:100%; max-height:350px; overflow:hidden;">
<div class="loop" style="margin-top:20px;max-height:350px;" >
<div style=" height:auto; width:auto;"><a href="?id=1#movieInfo"><img  src="http://netdna.webdesignerdepot.com/uploads/2011/02/jurassicpark.jpg" alt="Jurassic Park" ></a></div>
   <div style=" height:auto; width:auto;"> <a href="?id=2#movieInfo"> <img  src="http://imgc.allpostersimages.com/images/P-473-488-90/21/2126/GJJED00Z/posters/pulp-fiction-cover-with-uma-thurman-movie-poster.jpg" alt="Pulp Fiction" ></a> </div>
   <div style=" height:auto; width:auto;"> <a href="?id=3#movieInfo"> <img src="http://graphicdesignjunction.com/wp-content/uploads/2011/12/grey-movie-poster.jpg" alt="The Grey" > </a></div>
 <div style=" height:auto; width:auto;">  <a href="?id=4#movieInfo"><img src="https://s-media-cache-ak0.pinimg.com/564x/de/c0/d5/dec0d52330241d9fe1fa4f666c607935.jpg" alt="Keanu" ></a> </div>
 <div style=" height:auto; width:auto;"><a href="?id=5#movieInfo">  <img src="http://www.impawards.com/2013/posters/thor_the_dark_world_ver5_xxlg.jpg" alt="Thor: Dark World" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=6#movieInfo"> <img src="http://www.tqsmagazine.co.uk/wp-content/uploads/2012/02/warhorse.jpg" alt="War Horse" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=7#movieInfo"> <img src="https://doublefeature.fm/images/covers/mad-max-fury-road.jpg" alt="Mad Max: Fury Road" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=8#movieInfo"> <img src="https://images-na.ssl-images-amazon.com/images/I/91U0TwNG23L._SL1500_.jpg" alt="Willie Wonka" ></a> </div>
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

<div style="min-width:1000px; width:100%; max-height:350px; overflow:hidden;">
<div class="loop2" style="margin-top:20px;max-height:350px;" >
<div style=" height:auto; width:auto;"><a href="?id=1#movieInfo"><img  src="http://netdna.webdesignerdepot.com/uploads/2011/02/jurassicpark.jpg" alt="Jurassic Park" ></a></div>
   <div style=" height:auto; width:auto;"> <a href="?id=2#movieInfo"> <img  src="http://imgc.allpostersimages.com/images/P-473-488-90/21/2126/GJJED00Z/posters/pulp-fiction-cover-with-uma-thurman-movie-poster.jpg" alt="Pulp Fiction" ></a> </div>
   <div style=" height:auto; width:auto;"> <a href="?id=3#movieInfo"> <img src="http://graphicdesignjunction.com/wp-content/uploads/2011/12/grey-movie-poster.jpg" alt="The Grey" > </a></div>
 <div style=" height:auto; width:auto;">  <a href="?id=4#movieInfo"><img src="https://s-media-cache-ak0.pinimg.com/564x/de/c0/d5/dec0d52330241d9fe1fa4f666c607935.jpg" alt="Keanu" ></a> </div>
 <div style=" height:auto; width:auto;"><a href="?id=5#movieInfo">  <img src="http://www.impawards.com/2013/posters/thor_the_dark_world_ver5_xxlg.jpg" alt="Thor: Dark World" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=6#movieInfo"> <img src="http://www.tqsmagazine.co.uk/wp-content/uploads/2012/02/warhorse.jpg" alt="War Horse" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=7#movieInfo"> <img src="https://doublefeature.fm/images/covers/mad-max-fury-road.jpg" alt="Mad Max: Fury Road" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=8#movieInfo"> <img src="https://images-na.ssl-images-amazon.com/images/I/91U0TwNG23L._SL1500_.jpg" alt="Willie Wonka" ></a> </div>
</div>
</div>
<script>
    $(document).ready(function(){
  $('.loop3').owlCarousel({
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

<div style="min-width:1000px; width:100%; max-height:350px; overflow:hidden;">
<div class="loop3" style="margin-top:20px;max-height:350px;" >
<div style=" height:auto; width:auto;"><a href="?id=1#movieInfo"><img  src="http://netdna.webdesignerdepot.com/uploads/2011/02/jurassicpark.jpg" alt="Jurassic Park" ></a></div>
   <div style=" height:auto; width:auto;"> <a href="?id=2#movieInfo"> <img  src="http://imgc.allpostersimages.com/images/P-473-488-90/21/2126/GJJED00Z/posters/pulp-fiction-cover-with-uma-thurman-movie-poster.jpg" alt="Pulp Fiction" ></a> </div>
   <div style=" height:auto; width:auto;"> <a href="?id=3#movieInfo"> <img src="http://graphicdesignjunction.com/wp-content/uploads/2011/12/grey-movie-poster.jpg" alt="The Grey" > </a></div>
 <div style=" height:auto; width:auto;">  <a href="?id=4#movieInfo"><img src="https://s-media-cache-ak0.pinimg.com/564x/de/c0/d5/dec0d52330241d9fe1fa4f666c607935.jpg" alt="Keanu" ></a> </div>
 <div style=" height:auto; width:auto;"><a href="?id=5#movieInfo">  <img src="http://www.impawards.com/2013/posters/thor_the_dark_world_ver5_xxlg.jpg" alt="Thor: Dark World" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=6#movieInfo"> <img src="http://www.tqsmagazine.co.uk/wp-content/uploads/2012/02/warhorse.jpg" alt="War Horse" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=7#movieInfo"> <img src="https://doublefeature.fm/images/covers/mad-max-fury-road.jpg" alt="Mad Max: Fury Road" ></a> </div>
 <div style=" height:auto; width:auto;"> <a href="?id=8#movieInfo"> <img src="https://images-na.ssl-images-amazon.com/images/I/91U0TwNG23L._SL1500_.jpg" alt="Willie Wonka" ></a> </div>
</div>
</div>
</div>
</div>

</div>

</div>


<br/></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
			echo '<META HTTP-EQUIV="Refresh" Content="0; Netflex?CreatedAccount=true#login" > ';				
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
document.getElementById("signupSubmit").disabled = true;
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

if(confPass == 1){
if(pass==1){
if(user=1){
document.getElementById("signupSubmit").disabled = false;
}
}
}
	}
	</script>
	<?php
if(isset($_GET['freetrial'])){
if($_GET['freetrial']=='true'){
echo '<center><font style="color:Green; font-size:15;">Signing up for one month free trial!</font><br/><br/></center> ';
}
}

?>
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
<center> <input type="submit" id="signupSubmit" name="submit" value="SUBMIT" enabled="false"> </center>
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

if(isset($_GET['CreatedAccount'])){
if($_GET['CreatedAccount']=="true"){
echo '<br/><center> Account succesfully created! Please login here: </center><br/>';
}
}
?>

<form action="Netflex" method="post">
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
<div id="accountRecover" class="modalDialog">
   <div style=""> <a href="#close" title="Close" class="close">X</a>
<?php 
$isSet = false;
if(isset($_POST['recoverEmail'])){
$isEmailSet = $_POST['recoverEmail'];
$sql="SELECT * FROM users WHERE Email='$isEmailSet '";

$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");
if ($mysqli->connect_errno) {
    						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					} else {
if(!$result = $mysqli->query($sql)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {
							$row = $result->fetch_assoc();
							if($row != null){

$theCode = generateRandomString();
$query3 = "UPDATE users SET recoveryCode= '$theCode ' WHERE Email= '$isEmailSet'";
if(!$result3 = $mysqli->query($query3)){
						    die('');
						} else {
}
$msg = "Thankyou for recovering your Netflex Account!\nHeres your code: ".$theCode." \nYou may enter it at http://www.deberardino.com/Netflex/Netflex?set=yes#accountRecover";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("".$isEmailSet,"Netflex Recovery Code!",$msg);
echo '<center>Code sent too: '.$isEmailSet.'</center>';
$isSet = true;
}else {
echo '<center>No associated account found to: '.$isEmailSet.'. Please try again.</center>';
}
}
}
}

if(isset($_POST['recCode'])){
$postedCode = $_POST['recCode'];
$newPasswordRec = $_POST['newPass'];
$newPasswordRecConfirm = $_POST['newPassConfirm'];

if($newPasswordRec != $newPasswordRecConfirm || $newPasswordRec == ""){
if($newPasswordRec == ""){
echo '<center><font style=\"color:red;\">Password not entered!</font></center>';
}else {
echo '<center><font style=\"color:red;\">Passwords do not match!</font></center>';
}
}else {
if($postedCode != ""){
$sql="SELECT * FROM users WHERE recoveryCode='$postedCode'";

$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");

if(!$codeReulst= $mysqli->query($sql)){die('There was an error running the query asdfasdf[' . $mysqli->error . ']');} else {
	$codeRow= $codeReulst->fetch_assoc();
}
if($codeRow['Email']!=null){
$name = $codeRow['Email'];
$isReset = true;
$query3 = "UPDATE users SET recoveryCode= '' WHERE email= '$name'";
if(!$result3 = $mysqli->query($query3)){
						    die('');
						} else {
}
$newPass = md5($newPasswordRec);
$query3 = "UPDATE users SET password='$newPass' WHERE email= '$name'";
if(!$result3 = $mysqli->query($query3)){
						    die('');
						} else {
}
$updated = true;
echo '<center><font style=\"color:green;\">Updated password on account: '.$codeRow['Email'].'!</font></center><br/>';
?><center><font style="font-size:11"><a href="#openModal">Log In Here </a></font></center><br/><?php
}else{
echo '<center><font style=\"color:red;\">Recovery Code Incorrect!</font></center>';
}

}else{
echo '<center><font style=\"color:red;\">No recovery code entered!</font></center>';

}
}
}
?>

	

<?php 
if(!$updated){
if($isSet || isset($_GET['set'])){

?>
<form action="?set=true#accountRecover" method="post">
<p><b>Recovery code: &nbsp;</b><input type="text" name="recCode" style="float:right; margin-right:20px;"face="Arial"size="25"value="" placeholder="Code Here"/></p>
					<p><b>New Password:&nbsp;</b> <input type="password"  style="float:right; margin-right:20px;"size="25"placeholder="*********" face="Arial"name="newPass" /></p><p style="text-align:justify;">
<p><b>Confirm new Password:&nbsp;</b> <input type="password" style="float:right; margin-right:20px;" size="25"placeholder="*********" face="Arial"name="newPassConfirm" /></p><p style="text-align:justify;">
					<center>Please enter the code we sent to your email and then enter the new password you wish to update your account too.</center></p>
<center><font style="font-size:11">No recovery code? <a href="http://www.deberardino.com/Netflex/Netflex#accountRecover">Start Over Here</a></font></center>
					<center><font style="font-size:11">No Account? <a href="#signup">Sign Up Here </a></font></center>
                                        <center><font style="font-size:11">Have your password? <a href="#login">Log In Here </a></font></center><br/>
					<center><input type="submit"  name="submit" value="Update Password"><br></center>
					


<?php
}else {

?>
<form action="" method="post">
<center><p><b>EMAIL: &nbsp;</b><input type="text" name="recoverEmail" face="Arial"size="25"value="" placeholder="email@gmail.com"/></p></center>
					
					<center>Please enter your email so we can send you a password reset code. Make sure it's the correct email connected to your account.</center></p>
<center><font style="font-size:11">Already have recovery code? <a href="http://www.deberardino.com/Netflex/Netflex?set=yes#accountRecover">Use it Here</a></font></center>
					<center><font style="font-size:11">No Account? <a href="#signup">Sign up here </a></font></center>
                                        <center><font style="font-size:11">Have your password? <a href="#login">Log In Here </a></font></center><br/>
					<center><input type="submit"  name="submit" value="Request Code"><br></center>

<?php 
}
}
?>
					</form></p>
</div></div>
<div id="movieInfo" class="modalDialog">
   <div style="width:40%"> <a href="#close" title="Close" class="close">X</a>

        	<center>Movie Information Page</center>

<?php
$movieID = $_GET['id'];

 $query = "SELECT * FROM movies WHERE MovieID= '$movieID'";
		
$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");
if ($mysqli->connect_errno) {
    						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					} else {
if(!$result = $mysqli->query($query)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {
							$result_arr= $result->fetch_assoc();

}
}
?>
<br/>
 <table  border="0">
		<tr>
			<td> <b>Title: </b></td>
			<td> <?php echo ''.$result_arr['Title']; ?> </td>
		</tr>
<tr>
			<td> <b>Description: </b></td>
			<td> <?php echo ''.$result_arr['Description']; ?> </td>
		</tr>
<tr>
			<td> <b>Rating: </b></td>
			<td> <?php echo ''.$result_arr['Rating']; ?> </td>
		</tr>
<tr>
			<td> <b>Stars:</b> </td>
			<td> <?php 
for ($x = 0; $x <= $result_arr['Stars']; $x++) {
  echo '<img src="Images/icon_star.png" alt="Star" height="23" title="password must be at least 8 characters and contain at least one number and uppercase letter" width="23">';
} 

?> </td>
		</tr>

	</table>
<br/>
<center><a class="button" href="?id=1#movieplayer" > Play  <?php echo ''.$result_arr['Title']; ?> </a></center><br/><br/><br/>



    </div></div>
<div id="movieplayer" class="modalDialog" style="background-color:black;">
   <div style="margin-top:0px;padding-top:25px; width:90%; height:100%; background-color:black;" > 
<a href="Netflex.php" style="margin-top:20px;" title="Close" class="close" >X</a>
<center><div id="player" style=""></div></center>

 <script>
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      var player;
      var wid = screen.width;
      var heit = screen.height;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '780',
          width: '1280',
          videoId: 'dQw4w9WgXcQ',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      function onPlayerReady(event) {
        //event.target.playVideo();
      }
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>

    </div></div>
<div id="freetrial" class="modalDialog">
   <div> <a href="#close" title="Close" class="close">X</a>

        	<center>Free Trial</center>
<center><font style="font-size:11">Sign up for free trial</font></center>

    </div></div>

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
       //  alert( "Request Failed" );
      } // end catch
	}
	//validate the fields
	function editPass_checkTextField(field, valuex) {
	//alert("in check");
    if (valuex.value == '') {
        //alert(field + " is empty");
		//field.focus();
    }
	//using regular expression, make sure password is valid
	else if (field == 'newpass') {
		var passformat = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
		//if password does not match the format, error message
		if (!valuex.value.match(passformat)) {
			//alert("password must be at least 8 characters and contain at least one number and uppercase letter");
$('.newpassvalid').html('<img src="Images/redx.png" alt="Email must be valid!" height="23" title="password must be at least 8 characters and contain at least one number and uppercase letter" width="23"> ');
		
		}else {
$('.newpassvalid').html('<img src="Images/greencheck.png" alt="Email valid!" height="23" title="Password valid!" width="23"> ');

}
	}
	else if (field == "confirm_newpass") {
	    var firstPassword = document.getElementById("newpass").value;
		var confirmPassword = document.getElementById("confirm_newpass").value;
	    if (firstPassword != confirmPassword) {
	       $('.newpassmatches').html('<img src="Images/redx.png" alt="Email must be valid!" height="23" title="Passwords Must Match" width="23"> ');
	    }else {
$('.newpassmatches').html('<img src="Images/greencheck.png" alt="Email valid!" height="23" title="Password valid!" width="23"> ');
}
	}
	}
	</script>

<div id="editPassword" class="modalDialog">
   <div> <a href="#close" title="Close" class="close">X</a>

        	<center>Edit Password</center>
<center>
<form action="" method="post">
		<?php
		if(isset($_POST['oldpass'])) {
			session_start();
			
			
			$current_user = $_SESSION['user'];
			
			$oldpass = md5($_POST['oldpass']);
			$newpass = md5($_POST['newpass']);
$query1 = 'SELECT * FROM users WHERE password="'.md5($_POST['oldpass']).'" AND email ="'.$current_user.'"';
$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");
if ($mysqli->connect_errno) {
    						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					} else {
if(!$result = $mysqli->query($query1)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {
			$row = $result->fetch_assoc();


}}
if($row['Email']!=null){
$query = 'UPDATE users SET password="'.md5($_POST['newpass']).'" WHERE password= "'.md5($_POST['oldpass']).'" AND email ="'.$current_user.'"';


$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");
if ($mysqli->connect_errno) {
    						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					} else {
if(!$result = $mysqli->query($query)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {

			echo '<META HTTP-EQUIV="Refresh" Content="0; Netflex#passwordUpdated" > ';				

}
}
}else {
echo'Old password incorrect';
}
			
		}
		?>
    <table width="400" border="0">
		<tr>
			<td> Old Password </td>
			<td><input type="password" name="oldpass" id = "oldpass" onblur = "editPass_validate('oldpass', this)"></td>
<td><span class="oldpassvalid"> </span>  </td>
		</tr>
		<tr>
			<td> New Password </td>
			<td><input type="password" name="newpass" id = "newpass" onblur = "editPass_validate('newpass', this)"></td>
<td><span class="newpassvalid"> </span>  </td>
		</tr>
		<tr>
			<td> Confirm New Password </td>
			<td><input type="password" name="confirm_newpass" id = "confirm_newpass" onblur = "editPass_validate('confirm_newpass', this)"></td>
<td><span class="newpassmatches"> </span>  </td>
		</tr>
		<tr>
			<td> <input type="submit" name="editPass_submit" value="SUBMIT"></td>
			<td></td>
		</tr>

	</table>
	</form>

</center>
    </div></div>
<div id="passwordUpdated" class="modalDialog">
   <div> <a href="#close" title="Close" class="close">X</a>

        	<center>Password Updated!</center><br/>
<center> Password succesfully updated! </center>

</div>
</div>
<div id="TOS" class="modalDialog">
   <div style="width:75%; height:70%; overflow:scroll;"> <a href="#close" style="margin-right:20px; margin-top:20px;" title="Close" class="close">X</a>

        	<center>
<h1>Terms of Service ("Terms")</h1></center>
<p>Last updated: November 28, 2016</p>
<p>Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the www.deberardino.com website (the "Service") operated by Netflex ("us", "we", or "our").</p>
<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. This Terms of Service was created based on <a href="https://termsfeed.com/terms-conditions/">the Terms and Conditions from TermsFeed</a>.</p>
<p><strong>Accounts</strong></p>
<p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>
<p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>
<p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
<p><strong>Links To Other Web Sites</strong></p>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Netflex.</p>
<p>Netflex has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Netflex shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
<p><strong>Termination</strong></p>
<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>
<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<p><strong>Governing Law</strong></p>
<p>These Terms shall be governed and construed in accordance with the laws of Georgia, United States, without regard to its conflict of law provisions.</p>
<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
<p><strong>Changes</strong></p>
<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
<p><strong>Contact Us</strong></p>
<p>If you have any questions about these Terms, please contact us.</p>

</div>
</div>
<div id="profile" class="modalDialog">
   <div> <a href="#close" title="Close" class="close">X</a>

        	<center>User Profile</center>
<center>
<?php
$current_user = $_SESSION['user'];
		//execute the SQL query and return records
        $query = "SELECT * FROM users WHERE email = '$current_user'";
		
$mysqli = new mysqli("localhost", "deberar9_group", "grouppass", "deberar9_netflex");
if ($mysqli->connect_errno) {
    						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					} else {
if(!$result = $mysqli->query($query)){
						    die('There was an error running the query [' . $mysqli->error . ']');
						} else {
							$result_arr= $result->fetch_assoc();

}
}


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
			<td><a href = "#editPassword"><i>Edit</i></a></td>
		</tr>
		<tr>
			<td> Billing Address </td>
			<?php echo'<td>'.$result_arr['BillingAdd'].'</td>';?>
		<tr>
<tr>
			<td> Active Free Trial? </td>
			<?php echo'<td>No</td>';?>
		<tr>
			<td> </td>
			<td></td>
		</tr>
	</table>
</center>
    </div></div>

<?php 
if(isset($_SESSION['user'])){
?>

<div class="footer"> <a href="#profile" style="color:white;">Profile</a> |<a href="#aboutUs" style="color:white;">About Us</a> | <a href="#TOS" style="color:white;">Terms of Service</a>| <a href="Logout.php" style="color:white;">Logout</a><br/> Bold Business Solutions © 2016</div>
<?php
}
if(!isset($_SESSION['user'])){
?>
<div class="footer"><a href="?freetrial=true#signup" style="color:white;">Free Trial</a> | <a href="#login" style="color:white;">Login</a> | <a href="#signup" style="color:white;">Sign-Up</a> | <a href="#aboutUs" style="color:white;">About Us</a> | <a href="#TOS" style="color:white;">Terms of Service</a><br/> Bold Business Solutions © 2016</div>
<?php 
}
?>


</body>
</html>
<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>