<?php
require_once 'C_config.php' ;
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
session_start();
$nom = $_SESSION['email'];
echo $nom;
$sql = $conn->prepare("INSERT INTO `equipage`(`id`, `nom`, `role`) VALUES (?,?,'Membre')");
$sql->execute(array($id,$nom));
header("Location: ../pages/auto.php");
?>