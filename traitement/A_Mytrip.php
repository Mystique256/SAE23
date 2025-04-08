<?php
require_once 'C_config.php';
session_start();
$email = $_SESSION['email'];
$stmt = $conn->query("SELECT `Trajet`.*, `equipage`.`nom` FROM `Trajet`, `equipage` WHERE `Trajet`.`id` = `equipage`.`id` AND `equipage`.`nom` = '$email';");

while ($trip = $stmt->fetch_assoc()) {
    $id = $trip['id'];
    echo '<article class="trip-card">';
    echo '<div class="trip-card-header">';
    echo '<span class="trip-destination">' . htmlspecialchars($trip['destination']) . '</span>';
    echo '<button class="join-btn" data-trip-id="<?php echo $id ;?>"><a href="../traitement/T_Insert.php?id=' . $id . '">Rejoindre</a></button>';
    echo '</div>';
    echo '<div class="trip-card-body">';
    echo '<p>' . htmlspecialchars($trip['time']) . '<br>' . htmlspecialchars($trip['date']) . '<br>départ depuis ' . htmlspecialchars($trip['departure']) . '</p>';
    echo '</div>';
    echo '<div class="trip-card-footer">';
    echo '<p>' . htmlspecialchars($trip['places']) . ' places dispo | ' . htmlspecialchars($trip['price']) . '€ | ' . htmlspecialchars($trip['location']) . '</p>';
    echo '</div>';
    echo '</article>';
}
?>