<?php
$host = 'mysql_serv';
$user = 'mdurpoix';
$pass = 'mdurpoix-rt2023';
$dbname = 'mdurpoix_05'; 

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>