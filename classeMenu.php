<?php
require_once('classeActu.php');

class Menu extends Actualite{
    
    public static function AffichageMenu()
    {
        $pdo=DonneesPDO::createPDO();
        $actualites= Actualite::getDatabase($pdo);
                foreach($actualites as $actualite)
                {
                    $titre=$actualite->titre;
                    $id=$actualite->id;
                    echo "<a href='article.php?id=".$id."'>".mb_strimwidth($titre,0,20,'...')."</a>";
                }
    }
}