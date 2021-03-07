<?php

// CLASS CONNEXION 
require_once 'models/connexion.class.php';

// CLASS GROUPE car on utilise la classe dans chargementGroupesBDD()
require_once 'groupe.class.php';


class GroupeManager extends Connexion
{
    private $groupes;

    
    /**
     * Permet d'ajouter un nouveau groupe (groupe étant un objet)
     *
     * @param  object $groupe
     * @return void
     */
    public function ajoutGroupe($groupe) {
        
        $this->groupes[] = $groupe;
    }

    

    /**
     * Permet de retourner le tableaux contenant tous les groupes
     *
     * @return array $groupes (tableau d'objets)
     */
    public function getGroupes() {
        
        return $this->groupes;
    }


    
    /**
     * Connexion à la BDD - Récupération de tous les groupes 
     * Ajoute chaque objet $gr dans le tableau groupes
     *
     * @return void
     */
    public function chargementGroupesBDD() {

        $req = $this->getBDD()->prepare("SELECT * FROM groupe");
        $req->execute();

        // RECUPÈRE TOUTES LES LIGNES SOUS FORME DE TABLEAU PRINCIPAL CONTENANT UN TABLEAU DE CHAQUE GROUPE
        $groupesBDD = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        // CREER DES OBJETS DE CLASSE GROUPE

        foreach ($groupesBDD as $groupe) {   // groupe = tableau associatif
            $gr = new Groupe($groupe['id'], $groupe['nom'], $groupe['description'], $groupe['anneeCreation'], $groupe['image']);
            $this->ajoutGroupe($gr);
        }
    }


    /**
     * Connexion à la BDD - Récupération de tous les groupes 
     * Ajoute chaque objet $gr dans le tableau groupes
     *
     * @return void
     */
    public function chargementGroupesBDDAdmin() {

        $req = $this->getBDD()->prepare("SELECT groupe.id, groupe.nom, groupe.description, groupe.anneeCreation, groupe.image, album.nom_album, album.date
                                         FROM groupe 
                                         INNER JOIN album
                                         ON groupe.id = album.id_groupe");
        $req->execute();


        $groupesBDDAdmin = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();


        foreach ($groupesBDDAdmin as $groupe) {  
            $gr = new Groupe($groupe['id'], $groupe['nom'], $groupe['description'], $groupe['anneeCreation'], $groupe['image']);
            $this->ajoutGroupe($gr);
        }
    }


    
}