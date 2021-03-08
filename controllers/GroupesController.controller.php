<?php 

// CLASS GROUPE_MANAGER
require_once 'models/Groupe/GroupeManager.class.php';


class GroupesController {

    private $groupeManager;

    public function __construct() {

        $this->groupeManager = new GroupeManager();

        // Connexion DB + recupération de tous les groupes dans le tableau $groupeBDD
        $this->groupeManager->chargementGroupesBDD();  
    }


    public function afficherGroupes() {

        $groupes = $this->groupeManager->getGroupes();   // => Tableau des groupes 
        require "views/groupes.view.php";
    }

}





// DES QUE LE CONTROLEUR EST INSTANCIÉ LA CLASSE GROUPE MANAGER EST INSTANCIÉ AUSSI DIRECTEMENT