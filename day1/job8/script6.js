function estPremier(nombre) {
  if (nombre <= 1) return false;
  for (let i = 2; i <= Math.sqrt(nombre); i++) {
    if (nombre % i === 0) return false;
  }
  return true;
}

function sommenombrespremiers(a, b) {
  if (estPremier(a) && estPremier(b)) {
    return a + b;
  } else {
    return false;
  }
}

// Exemples d'utilisation :
console.log(sommenombrespremiers(2, 3));  // Affiche 5
console.log(sommenombrespremiers(3, 7));  // Affiche 10
console.log(sommenombrespremiers(4, 7));  // Affiche false
