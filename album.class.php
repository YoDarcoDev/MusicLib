<?php

class Album {

    private $nom_album;
    private $date;
    private $id_groupe;


    public function __construct($nom_album, $date, $id_groupe)
    {
        $this->nom_album = $nom_album;
        $this->date = $date;
        $this->id_groupe = $id_groupe;
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

}