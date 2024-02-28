<?php

require_once('database.php');

$nom="'".$_POST["nom"]."'";
$prenom="'".$_POST["prenom"]."'";
$mail="'".$_POST["mail"]."'";

$sql='INSERT INTO contact (nom_contact,prenom_contact,mail) VALUES ('.$nom.','.$prenom.','.$mail.')';
$pdo->exec($sql);

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
    <div class="confirm-container">
        <h1>Vous êtes bien entrés en contact</h1>
        <a href="index.php">⬅Retour à l'index</a>
    </div>

    <?php
        include('footer.php')
    ?>
</body>
</html>