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
        <h1>Page Sécurisée à l'attaque <span>CSRF</span></h1>
        <nav>
            <ul>
                <li><a href="../../index.html">Accueil</a></li>
            </ul>
        </nav>
    </header>

    <h1>Changer le mot de passe en toute sécurité</h1>
    <form action="change_password.php" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
        <label for="new-password">Nouveau mot de passe :</label>
        <input type="password" id="new-password" name="new-password">
        <input type="submit" value="Changer le mot de passe">
    </form>

    <footer>
        <p>&copy; 2023 Site Éducatif sur la Sécurité Web</p>
    </footer>

    <?php
        function generate_csrf_token() {
            $token = bin2hex(random_bytes(32));
            $_SESSION['csrf_token'] = $token;
            return $token;
        }
    ?>
</body>
</html>
