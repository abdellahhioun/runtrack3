<?php
session_start();
include 'db_connection.php'; // Assurez-vous d'inclure votre fichier de connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Vérifier si l'email existe déjà
    $sql = "SELECT id FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Cet email est déjà utilisé.";
    } else {
        $sql = "INSERT INTO users (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: connexion.php");
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
