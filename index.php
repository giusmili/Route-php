<?php
    include_once __DIR__ . "/controller/BaseController.php"; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les routes</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="?page=home">Accueil</a></li>
            <li><a href="?page=about">À propos</a></li>
            <li><a href="?page=contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <?php include_once __DIR__ . "/pages/$page.php"; ?>
    </main>

</body>
</html>
