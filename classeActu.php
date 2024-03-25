<?php
require_once('classePDO.php');

class Actualite extends DonneesPdo{
    public $id;
    public $titre;
    public $image;
    public $date_publication;
    public $date_revision;
    public $nom_auteur;
    public $prenom_auteur;
    public $corps_texte;
    public $tags;
    public $sources;
    private $date;
    
    public function __construct(array $value){
        $this->id=$value['id'];
        $this->titre=$value['titre'];
        $this->image=$value['image'];
        $this->date_publication=$value['date_publication'];
        $this->date_revision=$value['date_revision'];
        $this->nom_auteur=$value['nom_auteur'];
        $this->prenom_auteur=$value['prenom_auteur'];
        $this->corps_texte=$value['corps_texte'];
        $this->tags=$value['tags'];
        $this->sources=$value['sources'];
    }
    public function getAuteur():string{
        return $this->nom_auteur.' '. $this->prenom_auteur;
    }
    public function getDate(string $date):string{
        $this->date=$date;
        $year=substr($this->date,0,4);
        $month=substr($this->date,5,2);
        $day=substr($this->date,8,2);
        return $day.'-'.$month.'-'.$year;
    }
    public static function getDatabase($pdo){
        $actualites=[];
        $sql='SELECT * FROM articles,auteur WHERE articles.id_auteur=auteur.id_auteur ORDER BY date_publication LIMIT 5';
        $temp=DonneesPdo::Afficher($sql);
        while($resultats = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($actualites,new Actualite($resultats));
        }
        return $actualites;
    }
    public static function getArticle($id,$pdo){
        $actualites=[];
        $sql='SELECT * FROM articles,auteur WHERE id='.$id.' AND articles.id_auteur=auteur.id_auteur';
        $temp=DonneesPdo::Afficher($sql);
        while($resultats = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($actualites,new Actualite($resultats));
        }
        return $actualites[0];
    }
}
