<?php 
     include '../data_base.php';
    class PersonnageController(){
        private Personnage $listePerso = array();

        public function __construct(p){

        }
        public function addPerso($nom,$pv,$race, $force, $niveau){
            Personnage $p = new Personnage($nom, $pv,$race,$force,$niveau);
            array_push($listePerso, $p);
            PersonnageVue $vue = new PersonnageVue($listePerso);
            $vue->afficher();
            $req = $db -> prepare("INSERT INTO personnage(nom, pv, race, force ,niveau) VALUES(:nom, :pv, :race, :force ,:niveau )");
          $req->execute([
              'nom'=> $nom,
              'pv'=> $pv,
              'race'=>$race,
              'force'=> $force,
              'niveau'=>$niveau,
          ]);
        }

        public function attaquer(Personnage $p1, Personnage $p2){
            $force = $p1->getForce();
            $pv = $p2->getPv();
            $nomP2 = $p2->$nom;
            $alea = random_int(0,5);
            $degat = $force + $alea;
            $pv = $pv - $degat;
            $p2->updatePv($nomP2);
        }

        public function defendre(){
            
        }
    }

?>
