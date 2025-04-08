<?php
require_once 'C_config.php';
session_start();

$email = $_SESSION['email'];
$stmt = $conn->query("SELECT `Trajet`.*, `equipage`.`nom` FROM `Trajet`, `equipage` WHERE `Trajet`.`id` = `equipage`.`id` AND `equipage`.`nom` = '$email';");

while ($trip = $stmt->fetch_assoc()) {
    $id = $trip['id'];
    echo '<article class="trip-card">';
    
    echo '  <div class="trip-card-header">';
    echo '    <span class="trip-destination">' . htmlspecialchars($trip['destination']) . '</span>';
    echo '    <a href="../traitement/T_Delete.php?id=' . $id . '" class="quit-btn">Quitter l’évènement</a>';
    echo '  </div>';
    
    echo '  <div class="trip-card-body">';
    echo '    <p>' . htmlspecialchars($trip['time']) . '<br>' . htmlspecialchars($trip['date']) . '<br>Départ depuis ' . htmlspecialchars($trip['departure']) . '</p>';
    echo '  </div>';
    
    echo '  <div class="trip-card-footer">';
    echo '    <p>' . htmlspecialchars($trip['price']) . '€ | ' . htmlspecialchars($trip['location']) . '</p>';
    echo '    <a href="../equipage.php?id=' . $id . '" class="crew-btn">Voir l’équipage</a>';
    echo '  </div>';

    echo '</article>';
}
?>
