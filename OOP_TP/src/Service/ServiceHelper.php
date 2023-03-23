<?php

namespace src\Service;

use src\Service\Interface\ServiceHelperInterface;

//creation d'un type de class pour les differents interfaces
class ServiceHelper implements ServiceHelperInterface {
    //Design pattern Singleton
    private static $monServiceHelper = null;

    private function __construct(){

    }
    //instantiation d'un nouveau service de classe
    static public function getInstance() {
        //function getInstance va creer un nouveau objet Helper s'il n'existe pas
        if(self::$monServiceHelper == NULL){
            self::$monServiceHelper = new ServiceHelper();
        }
        return self::$monServiceHelper;
    }
/**
 * Fonction qui connecte un utilisateur, si les parametres de connection sont respectés
 * ctd : login et mdp sont reconnus, + utilisateur fait partie de la liste des utilisateurs
 * @return "object Utilisateur" ou null si l'utilisateur n'est pas reconnu
 */
    public function seConnecter($login, $password, $liste_utilisateur){
        //parcours la liste des utilisateurs pour verifier si le login et le mdp existent
        foreach($liste_utilisateur AS $utilisateur){
            if($utilisateur->getLogin() === $login && password_verify($password, $utilisateur->getPassword())){
                return $utilisateur;
            }
        }
    //Si utilisateur n'est pas trouvé
        return NULL;
    }

    public static function hasherPassword(string $password): string {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        return $password_hashed;
    }
}