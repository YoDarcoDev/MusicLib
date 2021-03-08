<?php

// CETTE CLASSE CONNEXION NE SERA JAMAIS INSTANCIÉE DIRECTEMENT, 
// MAIS ELLE SERA HERITEE DES AUTRES CLASSES QUI AURONT BESOIN D'ACCEDER AUX DONNÉES DE LA BDD 
// ET CE SONT CES AUTRES CLASSES QUI SERONT INSTANCIÉES

abstract class Connexion {

    private static $pdo; // STATIC POUR QU'IL SOIT ACCESSIBLE PAR TOUTES LES CLASSES QUI HÉRITENT DE LA CLASSE CONNEXION, ACCESSIBLE PAR TOUTES LES CLASSES FILLES


    // CREATION DE LA CONNEXION A LA BDD ET LA METTRE DANS ATTR STATIC $PDO
    private static function setBDD()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=musicLib;charset=utf8", "root", "");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    // QUAND ON VOUDRA SE CONNECTER ON PASSERA PAR GETBDD()
    protected function getBDD() 
    {
        // TEST SI J'AI DEJA UNE CONNEXION
        if (self::$pdo === null) {
            // CREATION DE LA BDD
            self::setBDD();
        }
        return self::$pdo;
    }
}



// ABSTRACT => La classe ne sera jamais instanciée directement
// PROTECTED => CAR DOIT ÊTRE ACCESSIBLE DEPUIS LES CLASSES FILLES POUR LA CONNEXION A LA BDD