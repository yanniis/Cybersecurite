<?php
// Remplacez les informations de connexion par les vôtres
$conn = mysqli_connect("localhost:8889", "yannis_admin", "jesuisadmin", "yannis_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Récupérer la valeur du champ username
    $username = $_GET["username"];

    // Exécuter la requête SQL sans vérification
    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = '$username'";
    $result = mysqli_query($conn, $sql);

    // Afficher les résultats
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Nom d'utilisateur: " . $row["nom_utilisateur"] . "<br>";
        echo "Nom complet: " . $row["nom_complet"] . "<br>";
        // ... Autres données à afficher
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
?>
