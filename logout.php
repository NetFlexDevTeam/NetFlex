<?php
   session_start();
   
   unset($_SESSION["user"]);
   session_destroy();
   
   echo 'You have successfully logged out';
   header('Refresh: 3; URL = nextflex.php');
?>
