
<?php 

class Groupe {

    private $id;
    private $nom;
    private $description;
    private $anneeCreation;
    private $image;


    public function __construct($id, $nom, $description, $anneeCreation, $image)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->anneeCreation = $anneeCreation;
        $this->image = $image;
    }


    public function getId(){
        return $this->id;
    }

    public function setId($id) 
    {
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
    

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}