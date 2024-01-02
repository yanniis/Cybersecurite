<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Éducatif sur la Sécurité Web</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<header>
        <h1>Page Sécurisée à l'Attaque <span>XSS</span></h1>
        <nav>
            <ul>
                <li><a href="../../index.html">Accueil</a></li>
            </ul>
        </nav>
    </header>

    <h1>Bienvenue, <?php echo htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); ?>!</h1>

    <footer>
        <p>&copy; 2023 Site Éducatif sur la Sécurité Web</p>
    </footer>

</body>
</html>
