function bisextile(annee) {
    if ((annee % 4 === 0 && annee % 100 !== 0) || (annee % 400 === 0)) {
        return true; 
    } else {
        return false; 
    }
}

window.onload = function() {
    let annee = 2024;
    console.log("anne" + annee + "c'est bisextile: " + bisextile(annee));
};
