document.addEventListener('DOMContentLoaded', () => {
    const images = [
        'images2/arc1.png',
        'images2/arc2.png',
        'images2/arc3.png',
        'images2/arc4.png',
        'images2/arc5.png',
        'images2/arc6.png'
    ];

    const shuffledContainer = document.getElementById('shuffledContainer');

    function createImageElement(src, index) {
        const img = document.createElement('img');
        img.src = src;
        img.classList.add('color-block');
        img.draggable = true;
        img.dataset.index = index; // Store the index
        img.addEventListener('dragstart', handleDragStart);
        img.addEventListener('dragover', handleDragOver);
        img.addEventListener('drop', handleDrop);
        return img;
    }

    function initialize() {
        images.forEach((src, index) => {
            const img = createImageElement(src, index);
            shuffledContainer.appendChild(img);
        });
    }

    function handleDragStart(event) {
        console.log('Drag start:', event.target.dataset.index);
        event.dataTransfer.setData('text/plain', event.target.dataset.index);
    }

    function handleDragOver(event) {
        event.preventDefault();
    }

    function handleDrop(event) {
        event.preventDefault();
        const draggedIndex = event.dataTransfer.getData('text/plain');
        const targetIndex = event.target.dataset.index;
        console.log('Drop:', { draggedIndex, targetIndex });

        if (draggedIndex !== targetIndex) {
            swapImages(draggedIndex, targetIndex);
        }
    }

    function swapImages(draggedIndex, targetIndex) {
        const draggedImg = shuffledContainer.querySelector(`[data-index='${draggedIndex}']`);
        const targetImg = shuffledContainer.querySelector(`[data-index='${targetIndex}']`);

        if (draggedImg && targetImg) {
            // Swap the images in the DOM
            const draggedSrc = draggedImg.src;
            draggedImg.src = targetImg.src;
            targetImg.src = draggedSrc;

            // Swap the data-index attributes
            draggedImg.dataset.index = targetIndex;
            targetImg.dataset.index = draggedIndex;

            console.log('Swapped:', { draggedIndex, targetIndex });
        } else {
            console.error('Image elements not found for indices:', { draggedIndex, targetIndex });
        }
    }

    initialize();
});