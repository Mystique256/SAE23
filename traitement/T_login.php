<?php
require_once 'C_config.php';
session_start();
if(isset($_POST['submit'])) {
  if(!empty($_POST['email']) AND !empty($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $info = $conn ->prepare("SELECT COUNT(*) FROM user WHERE `AdresseMail` = ?  AND `Password` = ?");
    $infoS = $conn ->prepare("SELECT * FROM user WHERE `AdresseMail` = ?  AND `Password` = ?");
    $info->execute(array($email,$password));
    $infoS->execute(array($email,$password));
    if($info > 0) {
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['nom'] = $infoS->fetch()['nom'];
      header("Location: ../pages/auto.php");
      echo "Vous êtes connecté";
    } else {
      echo "Mots de passes ou Utilisateur incorrects";
    }
  } else {
    echo "Veuillez remplir tous les champs";
  }
}
?>