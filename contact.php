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
    require_once('classeContact.php');

    if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail'])){
        
        $contact= new Contact($_POST["nom"],$_POST["prenom"],$_POST["mail"]);
        
        $contact->ajoutContact($contact,$pdo);
        header('Location: index.php?ok=1');
        exit();
    }
?>
    <div class="all-contact-container">
        <h1>Contact</h1>
        <form action="contact.php" method="post">
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom"/>
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom"/>
            <label for="mail">Adresse Mail : </label>
            <input type="email" name="mail" id="mail"/>
            <input type="submit">
        </form>
    </div>

    <?php
        include('footer.php');
    ?>
</body>
</html>