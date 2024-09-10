function tri(numbers, order) {
    if (order === 'asc') {
        return numbers.sort((a, b) => a - b);
    } else if (order === 'desc') {
        return numbers.sort((a, b) => b - a);
    } else {
        throw new Error("Le paramètre 'order' doit être 'asc' ou 'desc'.");
    }
}
