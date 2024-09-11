<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Expression Favorite</title>
</head>
<body>
    <button id="button">Afficher l'expression</button>
    <p id="expression"></p>

    <script>
        document.getElementById('button').addEventListener('click', () => {
            fetch('expression.txt')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('expression').textContent = data;
                })
                .catch(error => console.error('Erreur:', error));
        });
    </script>
</body>
</html>
