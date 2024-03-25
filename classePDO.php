<?php
class DonneesPdo{
 
    public static function createPDO(){
        $pdo = new PDO('mysql:host=localhost;dbname=site_actualites;charset=utf8mb4;port=3306', 'root', '');
        return $pdo;
    }
    public static function Afficher($sql){
        $pdo=DonneesPdo::createPDO();
        $temp = $pdo->prepare($sql);
        $temp->execute();
        return $temp;
    }
    public static function Ajouter($sql){
        $pdo=DonneesPdo::createPDO();
        $pdo->exec($sql);
    }
    public static function Modifier($pdo,$id,$titre,$corps_texte){
        $sql='UPDATE articles SET titre="'.$titre.'", corps_texte="'.$corps_texte.'" WHERE id='.$id;
        $pdo->exec($sql);
    }
}