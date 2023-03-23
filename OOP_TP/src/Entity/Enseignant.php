<?php

namespace src\Entity;

use src\Entity\Personne;
use src\Entity\Module;

class Enseignant extends Personne {
    protected $m_module;

    public function __construct($m_nom, $m_prenom, $m_login, $m_email, $m_password, Module $p_module)
    {
        //Utilise le constructeur de son parent (class Personne) et ajoute un attribut "module" en plus (pour l'objet Enseignant)
        parent::__construct($m_nom, $m_prenom, $m_login, $m_email, $m_password);     
        $this->m_module = $p_module;
    }
    //ajout d'un attribut module à l'objet Enseignant
    public function setModule(Module $p_module){
        return $this->m_module = $p_module;
    }

    public function getModule(){
        return $this->m_module;
    }
}

// <!-- enseignants
// eleves
// devoirs
// cours
// notes ?

// en commun : notion de role, 

// creer des objets metiers (donnees à stockets en bd) : personne, prof, eleve, cours, 

// Cours (module): support et devoir; D6 : 1 ou plusiseurs cours est 1 ou plus devoirs 

// encapsuler les données : mettre des attributs en private et getter/setter en public 

// focntion s'inscrire et se connecter à l'interieur de la class(eleve/prof) -->


// $enseignant = new Enseignant("Mbappe","Kylian","KMbappe","MKylian@gmail.com","123456", $m_nom_module->setModule("attaque"));
// echo $enseignant." et vous etes professeur de ".$enseignant->getModule();
