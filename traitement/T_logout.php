<?php
session_start();
session_destroy();
header("../pages/auto.php");
?>