<?php 

namespace Test;

use src\Entity\Eleve;
use src\Entity\Enseignant;
use src\Entity\Devoir;
use src\Entity\DevoirRendu;
use src\Entity\Module;
use src\Entity\Promotion;
use src\Entity\Cours;
use src\Service\ServiceHelper;
use src\Service\ServiceUtilisateur;
use src\Service\Repository\PersonneRepository;
use src\Service\Repository\CoursRepository;
use src\Service\Interface\ServiceHelperInterface;
use src\Service\Interface\ServiceUtilisateurInterface;


//class permetatant de tester des utilisateurs
class TestProjet {
    // Design pattern singleton
    private static $m_TestProjet = null;
    private $m_helper;
    private $m_utilisateurs;
    private $m_enseignant;
    private Eleve $m_eleve;
    private Devoir $m_devoir;
    private Module $nom_module;
    private Promotion $m_promotion;

    public function __construct(){
        $this->initData();
    }

    public static function getInstance()
    {
        if (Self::$m_TestProjet === null) {
            Self::$m_TestProjet = new TestProjet;
        }
        return Self::$m_TestProjet;
    }

    public function initData(){
        $this->m_utilisateurs = [
            new Eleve('Pierre', 'Sable', 'PSable', 'email@email.com', '846d8thmjhs'),
            new Enseignant('Paul', 'Bertrand', 'popo', 'email@frmail.com', 'D9jgrioj$lfke', $this->nom_module),
            new Eleve('Marie', 'Durand', 'macha', 'email@gmail.com', '68e4g6zdr')
        ];
        $this->m_eleve = new Eleve('Pierre', 'Sable', 'PSable', 'email@email.com', '846d8thmjhs');
        $this->m_enseignant = new Enseignant('Paul', 'Bertrand', 'popo', 'email@frmail.com', 'D9jgrioj$lfke', $this->nom_module);
        $this->nom_module = new Module("D6 - POO");
        $this->m_promotion = new Promotion("DFS27A");
        $this->m_devoir = new Devoir("TP-1", $this->m_enseignant, $this->m_promotion, "20/12/2024", 100 , $this->nom_module);

    }
        /**
     * La fonction testConnection teste si le login et le password font partie des utilisatateurs connus
     * @return void
     */
    public function testConnectionUtilisateurInconnu(){
        $connection = $this->m_helper->seConnecter('toto', 'blabla', $this->m_utilisateurs);
        if($connection == NULL){
            echo  "<p>testConnectionUtilisateurInconnu OK</p>";
        }else{
            echo "<p>testConnectionUtilisateurInconnu KO></p>";
        }

    }

        /**
     * La fonction testConnection teste si le login et le password font partie des utilisatateurs connus
     * @return void
     */
    public function testConnectionUtilisateurConnu(){
        //Appel à la fonction seConnecter (elle doit retourner null si l'utilisateur est pas connecté)
        $personne = $this->m_helper->seConnecter('PSable', '846d8thmjhs', $this->m_utilisateurs);
        if($personne == null){
            echo "<p>testConnectionUtilisateurConnu KO</p>";
        } else {
            echo "<p>testConnectionUtilisateurConnu OK</p>";
        }
    }

    public function testHeritage (){
        $enseignant = new Enseignant('Paul', 'Bertrand', 'popo', 'email@frmail.com', 'D9jgrioj$lfke', $this->nom_module);
        echo $enseignant->getModule();
    }

    public function testRendreDevoir(){
        $helperCours = new CoursRepository();
        $devoirRendu = $helperCours->rendreDevoir($this->m_eleve, 50, "TP_POO", $this->m_devoir);
        if ($devoirRendu == null){
            echo "<p>Test failed RendreDevoir</p>";
        } else {
            echo "<p>Test Success Rendre Devoir</p>";
        }
    }

    public function testDeposerDevoir() {
        $helperEnseignant = new CoursRepository();
        $devoirDeposerDevoir = $helperEnseignant->deposerDevoir("TP_final", "Ennoncé", 100, "20/03/2023", $this->m_enseignant, $this->m_promotion);
        if ($devoirDeposerDevoir == null){
            echo "<p>Test failed Deposer Devoir</p>";
        } else {
            echo "<p>Test Success Deposer Devoir</p>";
        }
    }
}

// $personne1 = new Enseignant('julio', 'Ribeiro', 'JR', "julio@gkj.com", '123eroh', Module 'fgjh');
// $personne1->setNom('Ribeiro');
// $personne1->setPrenom('Julio');
