<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Éducatif sur la Sécurité Web</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<header>
        <h1>Page Sécurisée à l'Attaque <span>RFI</span></h1>
        <nav>
            <ul>
                <li><a href="../../index.html">Accueil</a></li>
            </ul>
        </nav>
    </header>
    
    <?php
        $allowedPages = [
            'page1.php' => '420691787a35e4a091b4b9eb4b3e83387c6b4916ce7c8729fda6792d1604b0f5', // Ajoutez le hachage pour chaque fichier autorisé
        ];

        $pageToInclude = $_GET['page'];

        // Vérifier si la page demandée est autorisée
        if (array_key_exists($pageToInclude, $allowedPages)) {
            $filePath = $pageToInclude; // Ajouter un préfixe de chemin sécurisé

            // Vérifier l'intégrité du fichier à l'aide du hachage
            if (file_exists($filePath) && is_file($filePath) && hash_file('sha256', $filePath) === $allowedPages[$pageToInclude]) {
                include($filePath);
            } else {
                echo "Page non autorisée.";
            }
        } else {
            echo "Page non autorisée.";
        }
    ?>

<footer>
        <p>&copy; 2023 Site Éducatif sur la Sécurité Web</p>
    </footer>

</body>
</html>
