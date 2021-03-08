<?php 

require_once 'models/GroupeAlbum/GroupeAlbumManager.class.php';


class GroupeAlbumController {

    private $groupeAlbumManager;


    public function __construct()
    {
        $this->groupeAlbumManager = new GroupeAlbumManager();
        $this->groupeAlbumManager->chargementAlbumGroupeBDD();
    }


    
    public function afficherGroupeAlbum() {

        $tabGroupeAlbum = $this->groupeAlbumManager->getGroupeAlbum(); 
        require 'views/admin.view.php';
    }
}


