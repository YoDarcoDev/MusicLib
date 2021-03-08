<?php

require_once 'models/connexion.class.php';
require_once 'album.class.php';


class AlbumManager extends Connexion {

    private $albums;


    public function ajoutAlbum($album) {
        $this->albums[] = $album;
    }


    public function getAlbums() {
        return $this->albums;
    }


    public function chargementAlbumsBDD() {

        $req = $this->getBDD()->prepare("SELECT album.nom_album, album.date, album.id_groupe from album");
        $req-> execute();

        $albumsBDD = $req->fetchAll(PDO::FETCH_ASSOC);  // albumsBDD => Tableau qui contient tous les albums

        $req->closeCursor();


        foreach ($albumsBDD as $album) {

            $alb = new Album($album['nom_album'], $album['date'], $album['id_groupe']);
            $this->ajoutAlbum($alb);
        }

    }

}