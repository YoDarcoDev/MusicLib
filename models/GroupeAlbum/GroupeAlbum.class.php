<?php 


class GroupeAlbum {

    private $id;
    private $nom;
    private $description;
    private $anneeCreation;
    private $nom_album;
    private $date;
    private $id_groupe;
    private $image_album;


    public function __construct($id, $nom, $description, $anneeCreation, $nom_album, $date, $id_groupe, $image_album) 
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->anneeCreation = $anneeCreation;
        $this->nom_album = $nom_album;
        $this->date = $date;
        $this->id_groupe = $id_groupe;
        $this->image_album = $image_album;
    }


    public function getId() {
        return $this->id;
    }

    public function SetId($id) {
        $this->id = $id;
    }

    public function getNom() 
    {
        return $this->nom;
    }

    public function setNom($nom) 
    {
        $this->nom = $nom;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getAnneeCreation()
    {
        return $this->anneeCreation;
    }

    public function setAnnneeCreation($anneeCreation)
    {
        $this->anneeCreation = $anneeCreation;
    }
    

    public function getNomAlbum() {
        return $this->nom_album;
    }

    public function setNomAlbum($nom_album) {
        $this->nom_album = $nom_album;
    }


    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }


    public function getIdGroupe() {
        return $this->id_groupe;
    }

    public function setIdGroupe($id_groupe) {
        $this->id_groupe = $id_groupe;
    }

    public function getImageAlbum() {
        return $this->image_album;
    }

    public function setImageAlbum($image_album) {
        $this->image_album = $image_album;
    }

}
