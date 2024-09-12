<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
    <script>
        function validateForm() {
            var nom = document.forms["inscriptionForm"]["nom"].value;
            var prenom = document.forms["inscriptionForm"]["prenom"].value;
            var email = document.forms["inscriptionForm"]["email"].value;
            var password = document.forms["inscriptionForm"]["password"].value;
            var confirmPassword = document.forms["inscriptionForm"]["confirmPassword"].value;
            var valid = true;

            // Clear previous errors
            document.getElementById("nomError").innerHTML = "";
            document.getElementById("prenomError").innerHTML = "";
            document.getElementById("emailError").innerHTML = "";
            document.getElementById("passwordError").innerHTML = "";
            document.getElementById("confirmPasswordError").innerHTML = "";

            if (nom == "") {
                document.getElementById("nomError").innerHTML = "Le nom est requis.";
                valid = false;
            }

            if (prenom == "") {
                document.getElementById("prenomError").innerHTML = "Le prénom est requis.";
                valid = false;
            }

            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (email == "" || !emailPattern.test(email)) {
                document.getElementById("emailError").innerHTML = "L'email est invalide.";
                valid = false;
            }

            if (password == "") {
                document.getElementById("passwordError").innerHTML = "Le mot de passe est requis.";
                valid = false;
            } else if (password.length < 8) {
                document.getElementById("passwordError").innerHTML = "Le mot de passe doit contenir au moins 8 caractères.";
                valid = false;
            }

            if (confirmPassword == "") {
                document.getElementById("confirmPasswordError").innerHTML = "La confirmation du mot de passe est requise.";
                valid = false;
            } else if (password !== confirmPassword) {
                document.getElementById("confirmPasswordError").innerHTML = "Les mots de passe ne correspondent pas.";
                valid = false;
            }

            return valid;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Inscription</h2>
        <form name="inscriptionForm" action="process_inscription.php" onsubmit="return validateForm()" method="post">
            Nom: <input type="text" name="nom"><br>
            <span id="nomError" class="error"></span><br>
            Prénom: <input type="text" name="prenom"><br>
            <span id="prenomError" class="error"></span><br>
            Email: <input type="email" name="email"><br>
            <span id="emailError" class="error"></span><br>
            Mot de passe: <input type="password" name="password"><br>
            <span id="passwordError" class="error"></span><br>
            Confirmer le mot de passe: <input type="password" name="confirmPassword"><br>
            <span id="confirmPasswordError" class="error"></span><br>
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</body>
</html>
