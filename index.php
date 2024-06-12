<?php
try {
    $db_connect = new PDO("mysql:host=vps100614.serveur-vps.net;dbname=c0wap1206", "c0wap", "KLgksxKv!R8");
    $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_db'])) {
        // Remplacez 'your_table_name' par le nom de votre table
        $db_connect->exec("TRUNCATE TABLE your_table_name");
        echo "Base de données réinitialisée avec succès.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des Utilisateurs</title>
</head>

<body>

    <div class="container">
        <h1>Liste des Utilisateurs</h1>
        <table>
            <tr>
                <th>Numéro WhatsApp</th>
                <th>Nom WhatsApp</th>
                <th>Langue Parlée</th>
                <th>Préférences</th>
            </tr>
            <!-- Remplacer cette section avec les données des utilisateurs -->
            <tr>
                <td>+1234567890</td>
                <td>Jean Dupont</td>
                <td>Français</td>
                <td>Messages promotionnels</td>
            </tr>
            <tr>
                <td>+0987654321</td>
                <td>Marie Curie</td>
                <td>Anglais</td>
                <td>Notifications de service</td>
            </tr>
            <!-- Fin de la section -->
        </table>

        <form action="/send-messages" method="post">
            <label for="message">Envoyer un message en masse :</label>
            <textarea id="message" name="message" placeholder="Écrivez votre message ici..."></textarea>
            <button type="submit">Envoyer</button>
        </form>

        <form action="" method="post" style="margin-top: 20px;">
            <button type="submit" name="reset_db">Réinitialiser la base de données</button>
        </form>
    </div>

</body>

</html>