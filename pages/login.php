<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Blablatac Covoiturage - Connexion</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>
<body>
  <div class="login-container">
    <!-- Logo / Titre principal -->
    <h1 class="logo">
      Blablatac 
      <span class="tagline">Covoiturage</span>
    </h1>

    <!-- Titre de la section -->
    <h2>Connectez-vous !</h2>

    <!-- Formulaire de connexion -->
    <form action="action_page.php" method="post" class="login-form">
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
        <a href="#">Pas encore de compte ?</a>
      </div>

      <button type="submit" class="login-btn">On roule !</button>
    </form>
  </div>
</body>
</html>
