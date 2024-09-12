<?php
session_start();
include 'db_connection.php'; // Assurez-vous d'inclure votre fichier de connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Préparer la requête SQL pour éviter les injections SQL
    $stmt = $conn->prepare("SELECT id, prenom, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['prenom'] = $row['prenom'];
            header("Location: index.php");
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet email.";
    }

    $stmt->close();
    $conn->close();
}
?>
