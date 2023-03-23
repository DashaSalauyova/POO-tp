<?php


namespace src\Entity;

use src\Service\ServiceHelper;

class Personne {
    
    protected $m_nom;
    protected $m_prenom;
    protected $m_login;
    //email est unique, selection d'utilisateur par son email
    protected $m_email;
    protected $m_password;
    protected $m_module;
    protected $m_helper;

    public function __construct($m_nom, $m_prenom, $m_login, $m_email, $m_password){
        $this->m_nom = $m_nom;
        $this->m_prenom = $m_prenom;
        $this->m_login = $m_login;
        $this->m_email = $m_email;
        $this->m_helper = ServiceHelper::getInstance();
        $this->setPassword($m_password);
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->m_nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($p_nom): self
    {
        return $this->m_nom = $p_nom;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->m_prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($p_prenom): self
    {
        return $this->m_prenom = $p_prenom;
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->m_login;
    }

    /**
     * Set the value of login
     */
    public function setLogin($p_login): self
    {
        return $this->m_login = $p_login;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->m_email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($p_email): self
    {
        return $this->m_email = $p_email;
    }

    /**
     * Fonction met à jour le mot de passe de l'utilisateur apres l'avoir hashé
     * @param string $password mdp en clair
     * !! Respect de la reglementation RGPD !!
     * return void
     */
    public function setPassword($password)
    {
        $this->m_password = $this->m_helper->hasherPassword($password);
    }
    //function met le NOM d'utilisateur en majuscule lorsque l'objet est affiché
    public function __toString()
    {
        return strtoupper($this->m_nom) . ' ' . $this->m_prenom; 
    }
}

/*pour se connecter nous avons besoin de se connecter, ctd verifier si le login existe,
si le mdp correspond et la liste des utilisateurs 
Fonction doit retourner l'objet utilisateur**/
