<?php

namespace src\Service\Repository;

use Test\TestProjet;

class PersonneRepository {
    /**
     * Vérifier les données d'utilisateur
     * @param string $login
     * @param string $password
     * @param array $personnes
     * @return mixed Retourne l'utilisateur si le login et le mot de passe sont correctes
     */
    public static function seConnecter(string $login, string $password){
        //Recuperer l'utilisateur par le email unique 
        $personne = Self::getPersonneByEmail($login);
        //si la personne existe et password correspond à password hashé
        if($personne && password_verify($password, $personne->getPassword()))
        {
            //retourner objet
            return $personne;
        } else {
            return false;
        }
    }
     /**
     * Recuperer utilisateur à partir de mail unique
     *
     * @param string $email
     * @param array $personnes
     * @return mixed utilisateur si le email existe
     */
    //methode pour la fonction au-dessus pour recuperer utilisateur 
    public static function getPersonneByEmail(string $email)
    {
        $testProjet = TestProjet::getInstance();
        $testProjet->initData();
        $personnes = $testProjet->getUtilisateurs();

        // Pour chaque utilisateur parcouru, on vérifie si son email correspond à l'email demandée. Si elle correspond, on retourne l'utilisateur parcouru. Sinon, on retourne false
        foreach ($personnes as $personne) {
            if ($personne->getEmail() === $email) return $personne;
        }
        return false;
    }
}
