<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier le jeton CSRF uniquement dans la version sécurisée
    if (isset($_POST['csrf_token'])) {
        // Vérifier que le jeton CSRF soumis correspond à celui stocké en session
        if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
            // Jeton CSRF valide, traiter la demande de changement de mot de passe ici
            echo "Le mot de passe a été changé avec succès!";
        } else {
            // Jeton CSRF non valide, rejeter la demande
            echo "Erreur : Tentative de requête non autorisée.";
        }
    } else {
        // Version vulnérable : Ne pas vérifier le jeton CSRF
        // Traiter la demande de changement de mot de passe ici
        echo "Le mot de passe a été changé avec succès!";
    }
} else {
    // Rediriger ou afficher un message d'erreur si la page est accédée directement sans POST
    echo "Erreur : Cette page ne doit pas être accédée directement.";
}
?>
