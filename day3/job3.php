<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Taquin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        #game-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
}

#game-board {
    display: grid;
    grid-template-columns: repeat(3, 100px);
    grid-template-rows: repeat(3, 100px);
    gap: 2px;
}

.tile {
    width: 100px;
    height: 100px;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
}

#message {
    margin-top: 20px;
    font-size: 24px;
    color: green;
}

#restart-button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
}
    </style>
    <div id="game-container">
        <div id="game-board"></div>
        <button id="restart-button" onclick="initGame()">Recommencer</button>
        <div id="message"></div>
    </div>
    <script src="script3.js"></script>
</body>
</html>
