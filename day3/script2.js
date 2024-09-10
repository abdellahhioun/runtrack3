document.addEventListener('DOMContentLoaded', () => {
    const images = [
        'assets/arc1.png',
        'assets/arc2.png',
        'assets/arc3.png',
        'assets/arc4.png',
        'assets/arc5.png',
        'assets/arc6.png'
    ];

    const shuffledContainer = document.getElementById('shuffledContainer');
    const message = document.getElementById('message');
    const shuffleButton = document.getElementById('shuffleButton');

    function createImageElement(src) {
        const img = document.createElement('img');
        img.src = src;
        img.classList.add('color-block');
        return img;
    }

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
    }

    function initialize() {
        images.forEach(src => {
            const img = createImageElement(src);
            shuffledContainer.appendChild(img);
        });
    }

    function shuffleImages() {
        shuffledContainer.innerHTML = '';
        const shuffledImages = [...images];
        shuffleArray(shuffledImages);
        shuffledImages.forEach(src => {
            const img = createImageElement(src);
            shuffledContainer.appendChild(img);
        });
        checkOrder(shuffledImages);
    }

    function checkOrder(shuffledImages) {
        if (shuffledImages.join() === images.join()) {
            message.textContent = 'Vous avez gagné';
            message.style.color = 'green';
        } else {
            message.textContent = 'Vous avez perdu';
            message.style.color = 'red';
        }
    }

    shuffleButton.addEventListener('click', shuffleImages);

    initialize();
});