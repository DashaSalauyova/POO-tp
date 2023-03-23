<?php

namespace src\Service\Interface;

use src\Entity\Enseignant;
use src\Entity\Eleve;
use src\Entity\Module;

interface ServiceUtilisateurInterface {
    //CRUD enseignant
    public function creerEnseignant($p_nom, $p_prenom, $p_login, $p_email, $p_password, Module $p_module);
    public function afficherEnseignant($p_email, $p_liste_enseignant);
    public function modifierEnseignant(Enseignant $p_enseignant, $p_nom, $p_prenom, $p_login, $p_email, $p_password, Module $p_module);
    public function supprimerEnseignant($p_email, $p_liste_enseignant);
    
    //CRUD eleve
    public function creerEleve($p_nom, $p_prenom, $p_login, $p_email, $p_password);
    public function afficherEleve($p_email, $p_liste_eleve);
    public function modifierEleve(Eleve $p_eleve, $p_nom, $p_prenom, $p_login, $p_email, $p_password);
    public function supprimerEleve($p_email, $p_liste_eleve);
}