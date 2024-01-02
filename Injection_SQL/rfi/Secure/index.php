<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Non Vulnérable à l'Attaque RFI</title>
</head>
<body>
    <?php
        $allowedPages = [
            'page1.php' => 'hash1', // Ajoutez le hachage pour chaque fichier autorisé
            'page2.php' => 'hash2'
        ];

        $pageToInclude = $_GET['page'];

        // Vérifier si la page demandée est autorisée
        if (array_key_exists($pageToInclude, $allowedPages)) {
            $filePath = "./pages/" . $pageToInclude; // Ajouter un préfixe de chemin sécurisé

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
</body>
</html>
