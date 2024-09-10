<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Arc-en-ciel</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }
        .color-block {
            width: 150px; /* Ajustez la largeur */
            height: 100px; /* Ajustez la hauteur */
            margin: 5px;
        }
        #message {
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <button id="shuffleButton">Mélanger les couleurs</button>
    <div id="shuffledContainer" class="container"></div>
    <div id="orderedContainer" class="container"></div>
    <p id="message"></p>

    <script src="script2.js"></script>
</body>
</html>
