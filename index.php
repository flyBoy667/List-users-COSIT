<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des Utilisateurs</title>
<style>
body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 900px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

h1 {
    text-align: center;
    color: #444;
    font-size: 2.5em;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 15px 20px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: #555;
    text-transform: uppercase;
    letter-spacing: 1px;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f2f2f2;
}

form {
    margin-top: 30px;
    text-align: center;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1em;
    margin-bottom: 20px;
}

button {
    background-color: #6a11cb;
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #2575fc;
}
</style>
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
</div>

</body>
</html>
