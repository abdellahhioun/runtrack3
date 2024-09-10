<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        function citation() {
            var content = document.getElementById("citation").innerText;
            console.log(content);
        }
    </script>
</head>
<body>
    <article id="citation">
        La vie a beaucoup plus d’imagination que nous.
    </article>
    <button id="button" onclick="citation()">Afficher la citation</button>
</body>
</html>


