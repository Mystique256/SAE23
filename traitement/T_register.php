<?php
// Inclusion du fichier de configuration
require('C_config.php');

// Récupération des données du formulaires
$nom = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$add = "default" ;  

if ($password != $confirm_password) {
    echo "Les mots de passe ne correspondent pas";
    header('Location: ../pages/login.php');
    exit; // Add exit to prevent further execution
} else {
    $sql = "INSERT INTO user (nom, AdresseMail, password, Adresse) VALUES ('$nom', '$email', '$password', '$add' )";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: ../pages/login.html');
    exit;
}