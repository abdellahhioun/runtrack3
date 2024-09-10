<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Toggle Article</title>
    <script>
        function showhide() {
            var article = document.getElementById("article");
            if (article) {
                article.remove();
            } else {
                var newArticle = document.createElement("article");
                newArticle.id = "article";
                newArticle.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
                document.body.appendChild(newArticle);
            }
        }
    </script>
</head>
<body>
    <button id="button" onclick="showhide()">Toggle Article</button>
</body>
</html>
