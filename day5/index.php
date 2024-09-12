<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5d, #feb5fe7b); /* Dégradé de couleurs */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin: 0 10px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_SESSION['prenom'])) {
            echo "<p>Bonjour " . htmlspecialchars($_SESSION['prenom']) . "</p>";
        } else {
            echo '<a href="inscription.php">Inscription</a> | <a href="connexion.php">Connexion</a>';
        }
        ?>
    </div>
</body>
</html>
