<?php 
require('C_config.php');
session_start();

if (isset($_POST['email'])){
    $username = stripslashes($_REQUEST['email']);
    $username = mysqli_real_escape_string($conn, $username);
    $_SESSION['email'] = $username;
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
      $query = "SELECT * FROM `user` WHERE AdresseMail='$username' 
    and password='$password'";
    
    $result = mysqli_query($conn,$query) or die(mysql_error());
    echo "Hello World" ;
  }


?>