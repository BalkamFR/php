<?php 


class Personnage(){
    private string $nom;
    private string $pv;
    private string $race;
    private string $force;
    private string $niveau;


    public function __construct($nom, $pv, $race, $force, $niveau){
        $this->$nom = $nom,
        $this->$pv = $pv,
        $this->$race = $race,
        $this->$force = $force,
        $this->niveau = $niveau
    }

    public function getNom(){
        return $this->$nom;
    }

    public function setNom($setNom){
        $this->$nom = $setNom;
    }

    public function getPv(){
        return $this->$pv;
    }

    public function setPv($setPv){
        $this->$pv = $setPv;
    }

    public function getRace(){
        return $this->$race;
    }

    public function setRace($setRace){
        $this->$race = $setRace;
    }

    public function getForce(){
        return $this->$force;
    }

    public function setForce($setForce){
        $this->$force = $setForce;
    }

    public function getNiveau(){
        return $this->$niveau;
    }

    public function setForce($setNiveau){
        $this->$niveau = $setNiveau;
    }
    

}


?>