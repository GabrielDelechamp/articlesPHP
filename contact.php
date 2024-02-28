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
    <div class="all-contact-container">
        <h1>Contact</h1>
        <form action="index.php" method="post">
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom"/>
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom"/>
            <label for="mail">Adresse Mail : </label>
            <input type="mail" name="mail" id="mail"/>
            <input type="submit">
        </form>
    </div>
    <?php
        include('footer.php');
    ?>
</body>
</html>
