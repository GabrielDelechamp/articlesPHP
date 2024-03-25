<?php
require_once("classePDO.php");
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
    $pdo=DonneesPDO::createPDO();
    ?>
    <div class="all-param">
    <form method='get' action="parametre.php">
    <select name="id-article" id="id-article" onchange="this.form.submit()">
    <?php
            $pdo=DonneesPDO::createPDO();
            $actualites= Actualite::getDatabase($pdo);
            echo "<option value=''>--Sélectionnez votre choix--</option>";              
                    foreach($actualites as $actualite)
                    {
                        $titre=$actualite->titre;
                        $id=$actualite->id;
                        echo "<option value='".$id."'>".$titre."</option>";              
                    }
            ?>
    </select>
    </form>
    
    
    <?php
        if(isset($_GET['id-article'])){
            $actualite = Actualite::getArticle($_GET['id-article'],$pdo);
            ?>
            <h1>Vous avez selectionné : <?=$actualite->titre?></h1>
                <form method='get' action="parametre.php?chgmt=oui">
                <div>
                <label for="titre">Titre : </label>
                <input type="text" id='titre' value="<?= $actualite->titre ?>">
                </div>
                <div>
                <label for="contenu">Corps de texte : </label>
                <textarea class='corps_texte_input' id='corps_texte_input'>
                <?= $actualite->corps_texte ?>
                </textarea>
                </div>
                <input type='submit' value='ENVOYER'>
                </form>
        <?php } ?>

    </div>
    <?php 
    echo $_GET['chgmt'];
    if(isset($_GET['chgmt'])){
        if ($_GET['chgmt']==1){
            echo $_GET["id-article"].$actualite->titre.$actualite->corps_texte;
            DonneesPDO::Modifier($pdo,$_GET["id-article"],$actualite->titre,$actualite->corps_texte);
            // header("Location:parametre.php");
        }
    }
    ?>
</body>
</html>