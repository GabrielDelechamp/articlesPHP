<?php
require_once('database.php');

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
        if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail'])){
            $nom="'".$_POST["nom"]."'";
            $prenom="'".$_POST["prenom"]."'";
            $mail="'".$_POST["mail"]."'";
        
            $sql='INSERT INTO contact (nom_contact,prenom_contact,mail) VALUES ('.$nom.','.$prenom.','.$mail.')';
            $pdo->exec($sql);
            echo '<div class="overlay">
                    <div class="popup">
                        <a class="close" href="index.php">&times;</a>
                        <div class="content">
                            Votre prise de contact à bien été effectué
                        </div>
                    </div>
                </div>';
        }
        $sql="SELECT * FROM articles";
        $temp = $pdo->prepare($sql);
        $temp->execute();
        while ($resultats = $temp -> fetch()){
            $id=$resultats['id'];
            $titre=$resultats['titre'];
            $image=$resultats['image'];
            echo   '<a href="article.php?id='.$id.'">
                        <div class="article-container">
                            <div class="article">
                                <div class="article-image">
                                    <img src="'.$image.'" alt="">
                                </div>
                                <h1>'.$titre.'</h1>
                            </div>
                        </div>
                    </a>';
        }
        
        ?>
    </div>
    <?php
        include('footer.php')
    ?>
</body>
</html>