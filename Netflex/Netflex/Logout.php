<?php
   session_start();
   
   unset($_SESSION["user"]);
unset($_SESSION["user_id"]);
   session_destroy();
   header('Refresh: 0; URL = http://www.deberardino.com/Netflex/Netflex');
?>