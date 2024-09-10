function jourtravaille(date) {
    // Liste des jours fériés en 2020
    const joursFeries2020 = [
        new Date(2020, 0, 1),  // Jour de l'an
        new Date(2020, 3, 13), // Lundi de Pâques
        new Date(2020, 4, 1),  // Fête du Travail
        new Date(2020, 4, 8),  // Victoire 1945
        new Date(2020, 4, 21), // Ascension
        new Date(2020, 5, 1),  // Lundi de Pentecôte
        new Date(2020, 6, 14), // Fête Nationale
        new Date(2020, 7, 15), // Assomption
        new Date(2020, 10, 1), // Toussaint
        new Date(2020, 10, 11),// Armistice
        new Date(2020, 11, 25) // Noël
    ];

    // Formater la date
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const dateFormatee = date.toLocaleDateString('fr-FR', options);

    // Vérifier si c'est un jour férié
    if (joursFeries2020.some(jour => jour.getTime() === date.getTime())) {
        console.log(`Le ${dateFormatee} est un jour férié`);
    }
    // Vérifier si c'est un weekend
    else if (date.getDay() === 0 || date.getDay() === 6) {
        console.log(`Non, ${dateFormatee} est un week-end`);
    }
    // Sinon, c'est un jour travaillé
    else {
        console.log(`Oui, ${dateFormatee} est un jour travaillé`);
    }
}

// Exemple d'utilisation
jourtravaille(new Date(2020, 0, 1));  // Jour férié
jourtravaille(new Date(2020, 0, 4));  // Samedi
jourtravaille(new Date(2020, 0, 6));  // Lundi travaillé