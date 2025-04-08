<?php 
session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Blablatac - Accueil</title>
  <script src="JS_Search.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/img/tac_petit_abg.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header class="header">
    <img src="../assets/img/tac_sansbg.png" alt="Logo Blablatac" class="logo">
    <button class="btn-menu" onclick="toggleMenu()">Menu</button>
  </header>

  <nav class="menu" id="menu">
    <img src="../assets/img/tac_sansbg.png" alt="Logo Blablatac" class="logo">
    <button class="btn-close" onclick="toggleMenu()">Quitter</button>
    <ul>
      <li><a href="my_trip.html">Voir les trajets</a></li>
      <li><a href="header.html">Mes trajets</a></li>
      <li><a href="../traitement/T_logout.php">Déconnexion</a></li>
    </ul>
  </nav>
  <main class="main-content">
    <h1 class="welcome">
      Bonjour, <span id="username"></span><span class="question">on part&nbsp;?</span>
    </h1>
    <div class="search-bar">
      <span class="search-label">On part depuis</span>
      <input 
        type="text" 
        placeholder="Ex : l'IUT, la gare..." 
        class="search-input"
        name="search"
      />
      <button class="search-button">GO!</button>
      </div>
    <section class="trip-list">
      <?php include '../traitement/A_Event.php' ?>
    </section>
  </main>
  <script>
  function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
  }
  </script>
</body>
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    a {
      text-decoration: none;
    }
    body {
      background-color: #2C2C2C;
      font-family: 'Itim', cursive;
      color: #ffffff;
      overflow-x: hidden;
    }

    .header {
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      padding: 0.5rem 1rem;
      background-color: #2c2c2c1e;
      backdrop-filter: blur(20px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
    }
    .logo {
      width: 100px;
    }
    .btn-menu, .btn-close {
      padding: 6px 12px;
      border: none;
      background-color: #ff9e7a;
      color: white;
      border-radius: 20px;
      cursor: pointer;
    }
    .menu {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #2C2C2C;
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 20px;
      z-index: 999;
    }
    .menu ul {
      list-style: none;
      text-align: center;
    }
    .menu ul li {
      margin: 15px 0;
    }
    .menu ul li a {
      color: #fff;
      font-size: 1.5rem;
      transition: all 50ms;
      border-bottom: 0px solid #ff9e7a;
    }
    .menu ul li a:hover {
      color: #ff9e7a;
      border-bottom: 2px solid #ff9e7a;
    }
    /* Contenu principal */
    .main-content {
      padding: 70px 1rem 1rem; /* Espace en haut pour le header fixe */
      margin: 0 auto;
      text-align: center;
    }
    .welcome {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      color: #ffffff;
    }
    .question {
      color: #ff9e7a;
      font-weight: normal;
    }
    .search-bar {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      background-color: #3D3D3D; 
      border-radius: 30px;
      padding: 0.5rem 1rem;
      margin-bottom: 2rem;
      flex-wrap: wrap;
    }
    .search-label {
      white-space: nowrap;
      color: #ffffff;
      font-size: 1rem;
    }
    .search-input {
      border: none;
      border-bottom: 3px solid #ff9e7a;
      background-color: #2C2C2C;
      color: #ffffff;
      font-size: 1rem;
      padding: 0.4rem 0.8rem;
      border-radius: 5px;
      min-width: 120px;
    }
    .search-button {
      background-color: #ff9e7a;
      color: #2C2C2C;
      border: none;
      border-radius: 20px;
      padding: 0.5rem 1rem;
      font-weight: bold;
      cursor: pointer;
    }
    .trip-list {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }
    .trip-card {
      background-color: #D9D9D9;
      border-radius: 10px;
      color: #2C2C2C;
      overflow: hidden; 
    }
    .trip-card-header {
      background-color: #ff9e7a; 
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.8rem 1rem;
    }
    .trip-destination {
      font-size: 1.2rem;
      font-weight: bold;
      margin: 0;
    }
    .join-btn {
      background-color: #3D3D3D;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      padding: 0.4rem 0.8rem;
      cursor: pointer;
      font-weight: bold;
      font-size: 0.9rem;
    }
    .trip-card-body {
      padding: 1rem;
      border-bottom: 1px solid #ccc;
      font-size: 0.95rem;
      line-height: 1.4;
    }
    .trip-card-footer {
      padding: 0.8rem 1rem;
      font-size: 0.9rem;
      font-style: italic;
      color: #333333;
    }
  
    @media (min-width: 600px) {
      .main-content {
        max-width: 600px;
      }
    }
  </style>

</style>
</html>
