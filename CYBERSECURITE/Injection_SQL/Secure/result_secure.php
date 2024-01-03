<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du champ username en utilisant les requêtes préparées
    $username = $_POST["username"];

    // Connexion à la base de données
    $conn = new mysqli("localhost:8889", "yannis_admin", "jesuisadmin", "yannis_php");

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Utiliser une requête préparée pour éviter l'injection SQL
    $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE nom_utilisateur = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Récupérer les résultats
    $result = $stmt->get_result();

    // Afficher les résultats
    while ($row = $result->fetch_assoc()) {
        echo "Nom d'utilisateur: " . $row["nom_utilisateur"] . "<br>";
        echo "Nom complet: " . $row["nom_complet"] . "<br>";
        // ... Autres données à afficher
    }

    // Fermer la connexion à la base de données
    $stmt->close();
    $conn->close();
}
?>
