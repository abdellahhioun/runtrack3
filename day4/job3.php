<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Filtrer les Pokémon</title>
</head>
<body>
    <h1>Filtrer les Pokémon</h1>
    <form id="filterForm">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id"><br><br>

        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">--Sélectionner un type--</option>
            <option value="Grass">Grass</option>
            <option value="Poison">Poison</option>
            <option value="Fire">Fire</option>
            <option value="Flying">Flying</option>
            <option value="Water">Water</option>
            <option value="Bug">Bug</option>
            <option value="Normal">Normal</option>
            <option value="Electric">Electric</option>
            <option value="Ground">Ground</option>
            <option value="Fairy">Fairy</option>
            <option value="Fighting">Fighting</option>
            <option value="Psychic">Psychic</option>
            <option value="Rock">Rock</option>
            <option value="Ice">Ice</option>
            <option value="Dragon">Dragon</option>
        </select><br><br>

        <input type="button" value="Filtrer" onclick="filterPokemon()">
    </form>

    <h2>Résultats</h2>
    <ul id="results"></ul>

    <script>
        async function filterPokemon() {
            const id = document.getElementById('id').value;
            const name = document.getElementById('name').value.toLowerCase();
            const type = document.getElementById('type').value;

            const response = await fetch('c:/Users/Utilisateur/Downloads/pokemon.json');
            const pokemons = await response.json();

            const filteredPokemons = pokemons.filter(pokemon => {
                return (!id || pokemon.id == id) &&
                       (!name || pokemon.name.english.toLowerCase().includes(name)) &&
                       (!type || pokemon.type.includes(type));
            });

            const results = document.getElementById('results');
            results.innerHTML = '';
            filteredPokemons.forEach(pokemon => {
                const li = document.createElement('li');
                li.textContent = `${pokemon.id} - ${pokemon.name.english} (${pokemon.type.join(', ')})`;
                results.appendChild(li);
            });
        }
    </script>
</body>
</html>
