<?php
 session_start();
 unset($_SESSION["email"]);
 unset($_SESSION["password"]);

 echo '<h4>You have cleaned session</h4>';
 header('Refresh: 2; URL = login.php');
?>