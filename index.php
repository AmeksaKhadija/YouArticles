<?php

class personne {

    public $id;
    public $firstname;
    public $lastename;
    public $username;
    private $password;
    public function afficher(){
        $this->id=1;
        $this->nom="ameksa";
        $this->prenom="khadija";
        $this->password="123";
        echo $this->id ." ". $this->nom . " ". $this->prenom . " " . $this->password;
    }
}
$personne = new personne();
$personne->afficher();


class article {
    public $id;
    public $titre;
    public $contenu;
}

class 

?>