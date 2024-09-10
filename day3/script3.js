const images = [
    'assets_for_job3/1.PNG',
    'assets_for_job3/2.PNG',
    'assets_for_job3/3.PNG',
    'assets_for_job3/4.PNG',
    'assets_for_job3/5.PNG',
    'assets_for_job3/6.PNG',
    'assets_for_job3/7.PNG',
    'assets_for_job3/8.PNG',
    'assets_for_job3/9.PNG',
];

let board = [];
let emptyTileIndex = 8;

function initGame() {
    board = [...images];
    shuffle(board);
    renderBoard();
    $('#message').text('');
}

function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

function renderBoard() {
    const gameBoard = $('#game-board');
    gameBoard.empty();
    board.forEach((tile, index) => {
        const tileElement = $('<div>', {
            class: 'tile',
            css: { backgroundImage: tile ? `url(${tile})` : 'none' },
            click: () => moveTile(index)
        });
        gameBoard.append(tileElement);
    });
}

function moveTile(index) {
    const validMoves = [emptyTileIndex - 1, emptyTileIndex + 1, emptyTileIndex - 3, emptyTileIndex + 3];
    if (validMoves.includes(index)) {
        [board[emptyTileIndex], board[index]] = [board[index], board[emptyTileIndex]];
        emptyTileIndex = index;
        renderBoard();
        checkWin();
    }
}

function checkWin() {
    if (board.slice(0, 8).every((tile, index) => tile === images[index])) {
        $('#message').text('Vous avez gagné');
        $('#game-board').css('pointerEvents', 'none');
    }
}

$(document).ready(initGame);
