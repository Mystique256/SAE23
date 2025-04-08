<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Blablatac Covoiturage - Connexion</title>
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../assets/img/tac_petit_abg.png" type="image/x-icon">
</head>
<body>
  <div class="login-container">
   <img src="../assets/img/tac_sansbg.png" alt="">
    <h2>Connectez-vous !</h2>
    <form action="../traitement/T_login.php" method="post" class="login-form">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="Entrez votre e-mail" 
          required
        />
      </div>

      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          placeholder="Entrez votre mot de passe" 
          required
        />
      </div>
      <div class="links">
        <a href="#">Mot de passe oublié ?</a>
        <a href="register.html">Pas encore de compte ?</a>
      </div>
      <button type="submit" name="submit" class="login-btn">On roule !</button>
    </form>
  </div>
</body>
</html>
