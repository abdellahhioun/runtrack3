<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <script>
        function updateTable() {
            fetch('users.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('usersTableBody');
                    tableBody.innerHTML = ''; // Clear existing rows

                    data.forEach(user => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${user.id}</td>
                            <td>${user.nom}</td>
                            <td>${user.prenom}</td>
                            <td>${user.email}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <button onclick="updateTable()">Update</button>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="usersTableBody">
            <!-- Les utilisateurs seront ajoutés ici -->
        </tbody>
    </table>
</body>
</html>
