<?php 

// CONTROLEUR GROUPE
require_once 'controllers/GroupesController.controller.php';
$groupesController = new GroupesController();


// CONTROLEUR GROUPE_ALBUM
require_once 'controllers/GroupeAlbumController.controller.php';
$groupeAlbumController = new GroupeAlbumController();



if (empty($_GET['page'])) {
    require 'views/accueil.view.php';
}
else {

    switch ($_GET['page']) {
        case "accueil" : require "views/accueil.view.php";
        break;

        case "groupes" : $groupesController->afficherGroupes();
        break;

        case "admin" : $groupeAlbumController->afficherGroupeAlbum();
        break;

        case "connexion" : require "views/connexion.view.php";
        break;

        case "deconnexion" : header('Location : views/accueil.view.php');
        break;
    }
}