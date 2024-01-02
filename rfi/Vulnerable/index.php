<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Vulnérable à l'Attaque RFI</title>
</head>
<body>
    <?php
        $pageToInclude = $_GET['page']; // Vulnérabilité ici
        include($pageToInclude);
    ?>
</body>
</html>
