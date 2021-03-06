
<?php 

require_once 'models/ConnexionBDD/connexion.class.php';
require_once 'GroupeAlbum.class.php';




class GroupeAlbumManager extends Connexion{

    private $tabcomplet;


    public function ajoutGroupeAlbum($groupeAlbum) {
        $this->tabcomplet[] = $groupeAlbum;
    }


    public function getGroupeAlbum() {
        return $this->tabcomplet;
    }


    
    public function chargementAlbumGroupeBDD() {

        $req = $this->getBDD()->prepare("SELECT groupe.id, groupe.nom, groupe.description, groupe.anneeCreation, album.nom_album, album.date, album.id_groupe, album.image_album
        FROM groupe 
        INNER JOIN album
        ON groupe.id = album.id_groupe
        ORDER BY album.date DESC");

        $req->execute();

        $groupesAlbums = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($groupesAlbums as $groupeAlbum) {

            $grAlb = new GroupeAlbum($groupeAlbum['id'], $groupeAlbum['nom'],$groupeAlbum['description'],$groupeAlbum['anneeCreation'],$groupeAlbum['nom_album'], $groupeAlbum['date'], $groupeAlbum['id_groupe'], $groupeAlbum['image_album']);

            $this->ajoutGroupeAlbum($grAlb);
        }
    }



    public function countAlbumParGroupe() {

        $req = $this->getBDD()->prepare("SELECT groupe.nom, COUNT(album.id_groupe) AS nombre
                                         FROM groupe 
                                         INNER JOIN album 
                                         WHERE groupe.id = album.id_groupe 
                                         GROUP BY album.id_groupe");
        $req->execute();

        $nombreAlbumGroupe = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        // echo "<pre>";
        // print_r($nombreAlbumGroupe);
        // echo "</pre>";

        

    }
}


