<?php
require_once 'C_config.php';
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
if ($id === false) {
    die("ID invalide !");
}

$stmt = $conn->prepare("SELECT nom, prenom, role FROM equipage WHERE trip_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$crewMembers = [];
while ($row = $result->fetch_assoc()) {
    $crewMembers[] = $row;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Votre équipage- Trajet <?php echo htmlspecialchars($id); ?></title>
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
      <li><a href="my_trip.php">Mes trajets</a></li>
      <li><a href="auto.php">Les trajets</a></li>
      <li><a href="../traitement/T_logout.php">Déconnexion</a></li>
    </ul>
  </nav>
<div class="trip-container">
    <h1>Voici votre équipage !</h1>
    <a href="../pages/my_trip.php">Retour à mes trajets</a>
    <div class="crew-list">
    <?php if (count($crewMembers) > 0): ?>
        <?php foreach ($crewMembers as $member): ?>
            <div class="crew-member">
                <img src="../assets/img/user.png" alt="utilisateur" class="user-avatar">
                <p class="crew-name">
                    <?php 
                    echo htmlspecialchars($member['nom'], ENT_QUOTES, 'UTF-8'); 
                    if (!empty($member['role'])) {
                        echo ' - ' . htmlspecialchars($member['role'], ENT_QUOTES, 'UTF-8');
                    }
                    ?>
                </p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun membre trouvé pour ce trajet.</p>
    <?php endif; ?>
    </div>
</div>
<style>
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
    body {
  background-color: #1c1c1c;
  color: #fff;
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

.trip-container {
  padding: 20px;
}

.trip-container h1 {
  margin-bottom: 20px;
  font-size: 1.5em;
  color: #fca311;
}

.crew-list {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.crew-member {
  display: flex;
  align-items: center;
  background-color: #292929;
  padding: 10px;
  border-radius: 5px;
}

.user-avatar {
  width: 50px;
  height: 50px;
  margin-right: 10px;
}

.crew-name {
  margin: 0;
  font-size: 1em;
  color: #fff;
}

</style>
</body>
</html>
