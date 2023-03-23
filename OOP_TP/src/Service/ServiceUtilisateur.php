<?php

namespace src\Service;

use src\Service\Interface\ServiceUtilisateurInterface;
use src\Entity\Enseignant;
use src\Entity\Eleve;
use src\Entity\Module;

class ServiceUtilisateur implements ServiceUtilisateurInterface {
    /**
    * Creer un enseignant
    * @param $p_nom : this nom
    * @param $p_prenom : this prenom
    * @param $p_login : this login
    * @param $p_email : this email
    * @param $p_password : this password
    * @return Objet type Enseignant
    */
    public function creerEnseignant($p_nom, $p_prenom, $p_login, $p_email, $p_password, Module $p_module)
    {
        $enseignant = new Enseignant($p_nom, $p_prenom, $p_login, $p_email, $p_password, $p_module);
        return $enseignant;
    }
    /**
    * read/afficher un enseignant
    * @param string $p_email
    * @param object $p_liste_enseignant
    * @return Enseignant
    */
    public function afficherEnseignant($p_email, $p_liste_enseignant)
    {
        foreach ($p_liste_enseignant as $enseignant){
            if($enseignant->getEmail() === $p_email){
                return $enseignant;
            }
        } 
        return NULL;
    }

    /**
     * Modifier un enseignant
     * @param Enseignant adresse email sera utilisé pour l'autentification, il sera donc unique
     * @param $p_enseignant
     * @param $p_prenom : this prenom
     * @param $p_login : this Login
     * @param $p_email : this email
     * @param $p_password : this password
     * @return mixed
     */

    public function modifierEnseignant(Enseignant $p_enseignant, $p_nom, $p_prenom, $p_login, $p_email, $p_password, Module $p_module)
    {
        //modifier tous les parametres et retourner l'objet enseignant modifié
        $p_enseignant->setNom($p_nom);
        $p_enseignant->setPrenom($p_prenom);
        $p_enseignant->setLogin($p_login);
        $p_enseignant->setEmail($p_email);
        $p_enseignant->setPassword($p_password);
        $p_enseignant->setModule($p_module);
        return $p_enseignant;
    }

     /**
     * Supprimer un enseignant
     * @param Enseignant adresse email sera utilisé pour l'autentification, il sera donc unique
     * @param $p_email : this email
     * @param $p_liste : this list
     * @return void
     */

    public function supprimerEnseignant($p_email, $p_liste_enseignant)
    {
        $enseignant = $this->afficherEnseignant($p_email, $p_liste_enseignant);
        if($enseignant != null){
            unset($enseignant);
        }
    }
/**********************Eleve************************/
    /**
    * Creer un type Eleve
    * @param $p_nom : this nom
    * @param $p_prenom : this prenom
    * @param $p_login : this login
    * @param $p_email : this email
    * @param $p_password : this password
    * @return Objet type Eleve
    */
    public function creerEleve($p_nom, $p_prenom, $p_login, $p_email, $p_password){
        return new Eleve($p_nom, $p_prenom, $p_login, $p_email, $p_password);
    }

    /**
    * read/afficher un eleve
    * @param string $p_email
    * @param object $p_liste_eleve
    * return eleve
    */
    public function afficherEleve($p_email, $p_liste_eleve){
        foreach ($p_liste_eleve as $eleve){
            if($eleve->getEmail() === $p_email){
                return $eleve;
            }
        } 
        return NULL;
    }

    /**
     * Modifier Eleve
     * @param Eleve adresse email sera utilisé pour l'autentification, il sera unique
     * @param $p_eleve
     * @param $p_prenom : this prenom
     * @param $p_login : this Login
     * @param $p_email : this email
     * @param $p_password : this password
     * @return objet modifié
     */
    public function modifierEleve(Eleve $p_eleve, $p_nom, $p_prenom, $p_login, $p_email, $p_password){
        $p_eleve->setNom($p_nom);
        $p_eleve->setPrenom($p_prenom);
        $p_eleve->setLogin($p_login);
        $p_eleve->setEmail($p_email);
        $p_eleve->setPassword($p_password);
        return $p_eleve;
    }

    /**
     * Supprimer un eleve
     * @param $p_email : this email (unique)
     * @param $p_liste_eleve : this list
     * @return void
     */
    public function supprimerEleve($p_email, $p_liste_eleve){
        $eleve = $this->afficherEleve($p_email, $p_liste_eleve);
            if($eleve != NULL){
            unset($eleve);
        }
    }
}