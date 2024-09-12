<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateurs";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les utilisateurs
$sql = "SELECT id, nom, prenom, email FROM utilisateurs";
$result = $conn->query($sql);

$users = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Fermer la connexion
$conn->close();

// Retourner les utilisateurs au format JSON
header('Content-Type: application/json');
echo json_encode($users);
?>
