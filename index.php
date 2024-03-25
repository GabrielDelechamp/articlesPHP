<?php
require_once('classeActu.php');
require_once('classeContact.php');
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
        include('header.php')
    ?>
    <div class="all-article-container">

        <?php
        if(isset($_GET['ok'])){
            if ($_GET['ok']==1){
                ?>
                <div class="overlay">
                        <div class="popup">
                            <a class="close" href="index.php?ok=0">&times;</a>
                            <div class="content">
                                Votre prise de contact à bien été effectué
                            </div>
                        </div>
                    </div>
            <?php  }
         }
        $pdo=DonneesPDO::createPDO();
        $actualites =Actualite::getDatabase($pdo);
        foreach ($actualites as $actualite) {
            $id=$actualite->id;
            $titre=$actualite->titre;
            $image=$actualite->image;
            ?>

            <a href="article.php?id=<?= $id ?>">
                <div class="article-container">
                    <div class="article">
                        <div class="article-image">
                            <img src="<?= $image ?>" alt="">
                            </div>
                        <h1><?= $titre ?></h1>
                    </div>
                </div>
            </a>
        <?php } ?>
        
        
    </div>
    <?php
        include('footer.php')
    ?>
</body>
</html>