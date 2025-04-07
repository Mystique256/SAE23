<?php 
require('C_config.php');
session_start();

if (isset($_POST['email'])){
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $username);
  $_SESSION['email'] = $email;
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' 
  and password= $password;
  
  $result = mysqli_query($conn,$query) or die(mysql_error());
}
?>