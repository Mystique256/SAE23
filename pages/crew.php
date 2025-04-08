<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Blablatac - Vos trajets</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
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
  <main>
    <h2 class="crew-title">Andréa, <span>voici votre équipage pour le trajet </span>iut - héricourt </h2>
    <section class="crew">
      <?php include '../traitement/A_Equipe.php' ?>
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
  font-family: 'Itim', cursive;
}

body {
  background-color: #2C2C2C;
  color: #fff;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  position: sticky;
  top: 10px;
}

.logo {
  width: 150px;
}

.btn-menu,
.btn-close {
  padding: 6px 20px;
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
  text-decoration: none;
  transition: all 50ms;
  border-bottom: 0px solid #ff9e7a;
}

.menu ul li a:hover {
  color: #ff9e7a;
  border-bottom: 2px solid #ff9e7a;
}

.crew-title {
  text-align: center;
  font-size: 2rem;
  margin: 20px 0;
}

.crew-title span {
  color: #ff9e7a;
}

.crew {
    display: flex;
    flex-direction: column;
    gap: 20px;
    position: absolute;
    left: 20%;
}

.crew .crew-member{
    display: flex;
    flex-direction: row;
    gap: 15px;
    align-items: center;
}

</style>
</html>
