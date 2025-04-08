<?php
require_once 'C_config.php';
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
$stmt = $conn->query("SELECT equipage.* FROM equipage WHERE equipage.id = '$id';");
while ($trip = $stmt->fetch_assoc()) {
    $id = $trip['id'];
    echo '<div class="crew-member">'; 
    echo '<img src="../assets/img/user.png" alt="utilisateur" style="width: 100px;">';
    echo '<h1>' . htmlspecialchars($trip['nom']) .'</h1>';
    echo '</div>';
}
?>