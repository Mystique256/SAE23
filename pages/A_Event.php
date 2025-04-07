<?php
require_once '../traitement/C_config.php';

$stmt = $conn->query("SELECT * FROM Trajet ORDER BY date, time");

while ($trip = $stmt->fetch_assoc()) {
    echo '<article class="trip-card">';
    echo '<div class="trip-card-header">';
    echo '<span class="trip-destination">' . htmlspecialchars($trip['destination']) . '</span>';
    echo '<button class="join-btn">Rejoindre</button>';
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
