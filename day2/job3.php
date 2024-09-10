<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de clics</title>
    <script>
        function addone() {
            let compteur = document.getElementById('compteur');
            let count = parseInt(compteur.textContent);
            compteur.textContent = count + 1;
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('button').addEventListener('click', addone);
        });
    </script>
</head>
<body>
    <button id="button">Cliquez-moi</button>
    <p id="compteur">0</p>
</body>
</html>
