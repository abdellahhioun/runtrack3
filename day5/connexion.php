<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
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
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
    <script>
        function validateForm() {
            var email = document.forms["connexionForm"]["email"].value;
            var password = document.forms["connexionForm"]["password"].value;
            var valid = true;

            // Clear previous errors
            document.getElementById("emailError").innerHTML = "";
            document.getElementById("passwordError").innerHTML = "";

            if (email == "") {
                document.getElementById("emailError").innerHTML = "L'email est requis.";
                valid = false;
            }

            if (password == "") {
                document.getElementById("passwordError").innerHTML = "Le mot de passe est requis.";
                valid = false;
            }

            return valid;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form name="connexionForm" action="process_connexion.php" onsubmit="return validateForm()" method="post">
            Email: <input type="email" name="email"><br>
            <span id="emailError" class="error"></span><br>
            Mot de passe: <input type="password" name="password"><br>
            <span id="passwordError" class="error"></span><br>
            <input type="submit" value="Se connecter">
        </form>
    </div>
</body>
</html>
