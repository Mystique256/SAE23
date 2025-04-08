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
    <h2 class="trajets-title"><span>voici vos trajets</span></h2>
    <section class="trip-list">
      <?php include '../traitement/A_Mytrip.php' ?>
    </section>
    <section class="event-form-container">
        <h3>Créer un nouvel évènement</h3>
        <form id="event-form">
          <input type="text" id="destination" placeholder="Destination" required>
          <input type="text" id="lieuDepart" placeholder="Lieu de départ" required>
          <input type="date" id="date" required>
          <input type="time" id="heure" required>
          <input type="number" id="prix" placeholder="Prix (€)" step="0.01" required>
          <input type="number" id="places" placeholder="Nombre de places" required>
          <button type="submit">Créer</button>
        </form>
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

.trajets-title {
  text-align: center;
  font-size: 2rem;
  margin: 20px 0;
}

.trajets-title span {
  color: #ff9e7a;
}

.trajets-container {
  max-width: 600px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 20px;
  padding-bottom: 40px;
}

.trajet-card {
  background-color: #D9D9D9;
  color: black;
  border-radius: 15px;
  overflow: hidden;
}

.trajet-header {
  background-color: #ff9e7a;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.quit-btn {
  background-color: #2C2C2C;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 5px 10px;
  cursor: pointer;
}

.trajet-body {
  padding: 10px;
  text-align: center;
}

.trajet-footer {
  margin-top: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.crew-btn {
  background-color: #ff9e7a;
  color: black;
  border: none;
  border-radius: 5px;
  padding: 5px 10px;
  cursor: pointer;
}
.event-form-container {
  background-color: #3D3D3D;
  border-radius: 15px;
  padding: 20px;
  max-width: 500px;
  margin: 40px auto;
}

.event-form-container h3 {
  text-align: center;
  margin-bottom: 15px;
  color: #ff9e7a;
}

#event-form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

#event-form input {
  padding: 8px;
  border-radius: 8px;
  border: none;
}

#event-form button {
  background-color: #ff9e7a;
  border: none;
  padding: 8px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
  color: #2C2C2C;
}

#event-form button:hover {
  opacity: 0.8;
}

.trip-card {
  background-color: #d9d9d9;
  border-radius: 15px;
  overflow: hidden;
  color: #2c2c2c;
  margin-bottom: 1rem;
  font-family: 'Itim', cursive;
}

.trip-card-header {
  background-color: #ff9e7a;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  font-size: 1.3rem;
  font-weight: bold;
}

.quit-btn {
  background-color: #2c2c2c;
  color: #ffffff;
  text-decoration: none;
  padding: 0.5rem 1rem;
  border-radius: 10px;
  font-size: 1rem;
}

.trip-card-body {
  background-color: #e3e3e3;
  text-align: center;
  padding: 1rem;
  font-size: 1rem;
}

.trip-card-footer {
  background-color: #e3e3e3;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  font-size: 1rem;
  border-top: 1px solid #ccc;
}

.crew-btn {
  background-color: #ff9e7a;
  color: #2c2c2c;
  text-decoration: none;
  padding: 0.5rem 1rem;
  border-radius: 10px;
  font-weight: bold;
}


</style>
</html>
