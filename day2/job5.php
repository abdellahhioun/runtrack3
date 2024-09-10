<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Contenu de la page -->

    <footer></footer>

    <script>
        window.addEventListener('scroll', function() {
            const scrollTop = window.scrollY;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            const footer = document.querySelector('footer');
            const colorValue = Math.min(255, Math.floor((scrollPercent / 100) * 255));
            footer.style.backgroundColor = `rgb(${colorValue}, 0, 0)`; // Changez les valeurs RGB selon vos besoins
        });
    </script>
</body>
</html>
