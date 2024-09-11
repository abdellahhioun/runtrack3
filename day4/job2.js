function jsonValueKey(jsonString, key) {
    try {
        const jsonObject = JSON.parse(jsonString);
        return jsonObject[key];
    } catch (error) {
        console.error("Invalid JSON string:", error);
        return null;
    }
}

// Exemple d'utilisation
const jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
}`;

const key = "city";
console.log(jsonValueKey(jsonString, key)); // Affiche "Marseille"
