<?php
require_once('database.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include('header.php');

        $sql='SELECT * FROM articles WHERE id='.$_REQUEST['id'];
        $temp = $pdo->prepare($sql);
        $temp->execute();
        $resultats=$temp->fetch();
        echo    '<div class="full-article">
                    <a href="index.php" class="bouton">⬅</a>
                    <h1>'.$resultats['titre'].'</h1>
                    <p class="contenu-article">'.$resultats['corps_texte'].'</p>
                    <p class="tags">'.$resultats['tags'].'</p>
                    <p>Source : '.$resultats['sources'].'</p>
                    <p class="date-article">Actualité crée le : '.$resultats['date_publication'].
                    ' Dernière modification le : '.$resultats['date_revision'].
                    ' Ecrit par : '.$resultats['id_auteur'].'</p>
                    </div>';

    include('footer.php');
    ?>
</body>
</html>