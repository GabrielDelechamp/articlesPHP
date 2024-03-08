<?php
require_once('classePDO.php');

class Contact extends DonneesPdo{
    public $nom;
    public $prenom;
    public $mail;

    public function __construct(string $nom, string $prenom, string $mail){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->mail=$mail;
    }
    public static function ajoutContact($contact,$pdo){
        $sql='INSERT INTO contact (nom_contact,prenom_contact,mail) VALUES ("'.$contact->nom.'","'.$contact->prenom.'","'.$contact->mail.'")';
        DonneesPdo::Ajouter($sql);
    }
}

