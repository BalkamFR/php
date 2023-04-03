<?php 


class Personnage(){
    public function __construct($nom, $pv, $race, $force, $niveau){
        $this->$nom = $nom,
        $this->$pv = $pv,
        $this->$race = $race,
        $this->$force = $force,
        $this->niveau = $niveau
    }
}


?>