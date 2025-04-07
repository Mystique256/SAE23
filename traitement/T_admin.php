<?php
// 1) Inclusion du fichier de configuration
require('C_config.php');

// =============================================
// 2) SI LE FORMULAIRE "USER" EST SOUMIS
//    => importer CSV/JSON pour la table user
// =============================================
if (isset($_POST['submit_user'])) {
    if (isset($_FILES['fichier_user']) && $_FILES['fichier_user']['error'] === UPLOAD_ERR_OK) {
        
        $tmpName    = $_FILES['fichier_user']['tmp_name'];
        $fileName   = $_FILES['fichier_user']['name'];
        $extension  = pathinfo($fileName, PATHINFO_EXTENSION);

        // Vérification de l'extension
        if ($extension === 'csv') {
            // ----- Import CSV pour USER -----
            if (($handle = fopen($tmpName, "r")) !== false) {
                // fgetcsv($handle);  // Si vous avez une 1ère ligne d'en-tête à ignorer, décommentez

                while (($row = fgetcsv($handle, 1000, ",")) !== false) {
                    $nom      = $row[0] ?? "";
                    $email    = $row[1] ?? "";
                    $password = $row[2] ?? "";
                    $adresse  = $row[3] ?? "default";

                    $sql  = "INSERT INTO user (nom, AdresseMail, password, Adresse)
                             VALUES ('$nom', '$email', '$password', '$adresse')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                }
                fclose($handle);
                echo "<p>Import CSV (user) terminé avec succès.</p>";
            } else {
                echo "<p>Impossible d'ouvrir le fichier CSV pour user.</p>";
            }
        }
        elseif ($extension === 'json') {
            // ----- Import JSON pour USER -----
            $jsonContent = file_get_contents($tmpName);
            $data        = json_decode($jsonContent, true);

            if (is_array($data)) {
                foreach ($data as $item) {
                    $nom      = $item['nom']      ?? "";
                    $email    = $item['email']    ?? "";
                    $password = $item['password'] ?? "";
                    $adresse  = $item['adresse']  ?? "default";

                    $sql  = "INSERT INTO user (nom, AdresseMail, password, Adresse)
                             VALUES ('$nom', '$email', '$password', '$adresse')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                }
                echo "<p>Import JSON (user) terminé avec succès.</p>";
            } else {
                echo "<p>Le contenu JSON (user) n'est pas un tableau valide.</p>";
            }
        }
        else {
            echo "<p>Extension non reconnue pour user (uniquement CSV ou JSON)</p>";
        }
    }
    else {
        echo "<p>Erreur lors de l'upload du fichier (user).</p>";
    }
}

// =============================================
// 3) SI LE FORMULAIRE "EVENT" EST SOUMIS
//    => importer CSV/JSON pour la table event
// =============================================
if (isset($_POST['submit_event'])) {
    if (isset($_FILES['fichier_event']) && $_FILES['fichier_event']['error'] === UPLOAD_ERR_OK) {
        
        $tmpName    = $_FILES['fichier_event']['tmp_name'];
        $fileName   = $_FILES['fichier_event']['name'];
        $extension  = pathinfo($fileName, PATHINFO_EXTENSION);

        if ($extension === 'csv') {
            // ----- Import CSV pour EVENT -----
            if (($handle = fopen($tmpName, "r")) !== false) {
                // fgetcsv($handle); // Si vous avez une 1ère ligne d'en-tête à ignorer

                while (($row = fgetcsv($handle, 1000, ",")) !== false) {
                    // Adaptez l'ordre selon votre CSV
                    $destination = $row[0] ?? "";
                    $time        = $row[1] ?? "";
                    $date        = $row[2] ?? "";
                    $departure   = $row[3] ?? "";
                    $places      = $row[4] ?? "";
                    $price       = $row[5] ?? "";
                    $location    = $row[6] ?? "";

                    $sql  = "INSERT INTO Trajet (destination, time, date, departure, places, price, location)
                             VALUES ('$destination', '$time', '$date', '$departure', '$places', '$price', '$location')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                }
                fclose($handle);
                echo "<p>Import CSV (event) terminé avec succès !</p>";
            } else {
                echo "<p>Impossible d'ouvrir le fichier CSV (event).</p>";
            }
        }
        elseif ($extension === 'json') {
            // ----- Import JSON pour EVENT -----
            $jsonContent = file_get_contents($tmpName);
            $data        = json_decode($jsonContent, true);

            if (is_array($data)) {
                foreach ($data as $item) {
                    $destination = $item['destination'] ?? "";
                    $time        = $item['time']        ?? "";
                    $date        = $item['date']        ?? "";
                    $departure   = $item['departure']   ?? "";
                    $places      = $item['places']      ?? "";
                    $price       = $item['price']       ?? "";
                    $location    = $item['location']    ?? "";

                    $sql  = "INSERT INTO Trajet (destination, time, date, departure, places, price, location)
                             VALUES ('$destination', '$time', '$date', '$departure', '$places', '$price', '$location')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                }
                echo "<p>Import JSON (event) terminé avec succès !</p>";
            } else {
                echo "<p>Le contenu JSON (event) n'est pas un tableau valide.</p>";
            }
        }
        else {
            echo "<p>Extension non reconnue pour event (uniquement CSV ou JSON)</p>";
        }
    }
    else {
        echo "<p>Erreur lors de l'upload du fichier (event).</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Importer Users & Events</title>
</head>
<body>

    <h2>Importer un fichier CSV ou JSON (Users)</h2>
    <form method="POST" action="T_admin.php" enctype="multipart/form-data">
        <label>Choisir un fichier (user) :</label>
        <input type="file" name="fichier_user" accept=".csv, .json" required>
        <button type="submit" name="submit_user">Importer User</button>
    </form>

    <hr>

    <h2>Importer un fichier CSV ou JSON (Event)</h2>
    <form method="POST" action="T_admin.php" enctype="multipart/form-data">
        <label>Choisir un fichier (event) :</label>
        <input type="file" name="fichier_event" accept=".csv, .json" required>
        <button type="submit" name="submit_event">Importer Event</button>
    </form>

</body>
</html>
