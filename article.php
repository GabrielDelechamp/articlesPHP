<?php
require_once('database.php');
require_once('classeActu.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap')
    </style>
</head>
<body>
    <?php
    include('header.php');

    
    $actualite=Actualite::getArticle($_GET['id'],$pdo);
        echo    '<div class="full-article">
                    <a href="index.php" class="bouton">⬅</a>
                    <h1>'.$actualite->titre.'</h1>
                    <p class="date-article">Actualité crée le : '.$actualite->getDate($actualite->date_publication).
                    ' Dernière modification le : '.$actualite->getDate($actualite->date_revision).
                    ' Ecrit par : '.$actualite->getAuteur().'</p>
                    </br>
                    </br>
                    <p class="contenu-article">'.$actualite->corps_texte.'</p>
                    <p class="tags">'.$actualite->tags.'</p>
                    <p>Source : '.$actualite->sources.'</p>
                    </div>';

    include('footer.php');
    ?>
</body>
</html>