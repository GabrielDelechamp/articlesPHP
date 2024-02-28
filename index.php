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
</head>
<body>
    <?php
        include('header.php')
    ?>
    <div class="all-article-container">

        <?php
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