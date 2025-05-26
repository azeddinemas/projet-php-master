<?php

require_once('Formation.php');

$formation = new Formation();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nos Formations - FormationsPro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9fafb;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #1e40af;
        color: white;
        padding: 20px;
        text-align: center;
    }

    header a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
        font-weight: bold;
    }

    main {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 20px;
    }

    h1 {
        text-align: center;
        color: #1e40af;
    }

    .formation {
        background-color: white;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .formation h3 {
        margin-top: 0;
        color: #111827;
    }

    .formation p {
        color: #4b5563;
    }

    .pagination {
        text-align: center;
        margin-top: 30px;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 14px;
        margin: 0 5px;
        background-color: #e5e7eb;
        color: #111827;
        text-decoration: none;
        border-radius: 4px;
    }

    .pagination a.active {
        background-color: #1e40af;
        color: white;
        font-weight: bold;
    }

    .pagination a:hover {
        background-color: #d1d5db;
    }

    footer {
        text-align: center;
        padding: 20px;
        background-color: #e5e7eb;
        margin-top: 40px;
    }

    footer a {
        color: #1e40af;
        font-weight: bold;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <header>
        <h1>Catalogue des Formations</h1>
        <a href="index.php"> Accueil</a>
    </header>

    <main>

        <?php 
            foreach ($formation->getAll() as $a) {
                echo '
                
                <div class="formation">
                    <h3>'.$a["name"].'</h3>
                    <p>'.$a["ville"].'</p>
                </div>
                
                ';
            }
        ?>



        <div class="formation">
            <h3>Formation 1 : Développement Web</h3>
            <p>Apprenez à construire des sites web dynamiques avec HTML, CSS, JavaScript et PHP.</p>
        </div>
        <div class="formation">
            <h3>Formation 2 : Marketing Digital</h3>
            <p>Maîtrisez les outils du web marketing, de la publicité en ligne au SEO.</p>
        </div>
        <div class="formation">
            <h3>Formation 3 : Gestion de Projet Agile</h3>
            <p>Utilisez Scrum, Kanban et Trello pour piloter vos projets efficacement.</p>
        </div>
        <div class="formation">
            <h3>Formation 4 : Cybersécurité</h3>
            <p>Protégez vos systèmes contre les cybermenaces avec les bonnes pratiques.</p>
        </div>
        <div class="formation">
            <h3>Formation 5 : Design UI/UX</h3>
            <p>Créez des interfaces utilisateurs intuitives et esthétiques avec Figma.</p>
        </div>

        <div class="pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Suivant &raquo;</a>
        </div>
    </main>

    <footer>
        © 2025 FormationsPro — <a href="index.php">Retour à l'accueil</a>
    </footer>

</body>

</html>