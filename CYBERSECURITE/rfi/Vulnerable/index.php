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
        <h1>Page Vulnérable à l'Attaque <span>RFI</span></h1>
        <nav>
            <ul>
                <li><a href="../../index.html">Accueil</a></li>
            </ul>
        </nav>
    </header>

    <?php
        $pageToInclude = $_GET['page']; // Vulnérabilité ici
        include($pageToInclude);
    ?>
    <footer>
        <p>&copy; 2023 Site Éducatif sur la Sécurité Web</p>
    </footer>

</body>
</html>
