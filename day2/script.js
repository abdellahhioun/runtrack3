document.addEventListener('DOMContentLoaded', (event) => {
    // Job 1: Citation
    function citation() {
        var content = document.getElementById("citation").innerText;
        console.log(content);
    }
    window.citation = citation;

    // Job 2: Toggle Article
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
    window.showhide = showhide;

    // Job 3: Compteur de clics
    function addone() {
        let compteur = document.getElementById('compteur');
        let count = parseInt(compteur.textContent);
        compteur.textContent = count + 1;
    }
    document.getElementById('button3').addEventListener('click', addone);

    // Job 4: Keylogger
    const textarea = document.getElementById('keylogger');
    document.addEventListener('keypress', (e) => {
        const char = String.fromCharCode(e.which).toLowerCase();
        if (char >= 'a' && char <= 'z') {
            if (document.activeElement === textarea) {
                textarea.value += char + char;
            } else {
                textarea.value += char;
            }
        }
    });

    // Job 5: Scroll Color Change
    window.addEventListener('scroll', function() {
        const scrollTop = window.scrollY;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        const footer = document.querySelector('footer');
        const colorValue = Math.min(255, Math.floor((scrollPercent / 100) * 255));
        footer.style.backgroundColor = `rgb(${colorValue}, 0, 0)`; // Changez les valeurs RGB selon vos besoins
    });
});
