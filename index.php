<?php

class personne {

    private $id;
    private $nom;
    private $prenom;

    public function afficher(){
        $this->id=1;
        
        $this->nom="ameksa";
        $this->prenom="khadija";
        echo $this->id ." ". $this->nom . " ". $this->prenom;
    }

}
$personne = new personne();
$personne->afficher();

?>