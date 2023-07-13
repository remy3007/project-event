<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreEvent">Event</h1></a>
                <p> bienvenue sur cette modeste plateforme d'event.</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedEvent">
                Application d' event réalisée avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>