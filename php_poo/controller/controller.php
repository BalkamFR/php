<?php 

    class PersonnageController(){
        private Personnage $listePerso = array();

        // public function __construct(p){

        // }
        public function addPerso($nom,$pv,$race, $force, $niveau){
            Personnage $p = new Personnage($nom, $pv,$race,$force,$niveau);
            array_push($listePerso, $p);
            PersonnageVue $vue = new PersonnageVue($listePerso);
            $vue->afficher();
        }
    }

?>