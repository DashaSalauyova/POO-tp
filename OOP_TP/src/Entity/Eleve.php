<?php

namespace src\Entity;

use src\Entity\Personne;

class Eleve extends Personne {
    
    public function __construct($m_nom, $m_prenom, $m_login, $m_email, $m_password)
    {
        parent::__construct($m_nom, $m_prenom, $m_login, $m_email, $m_password);
    }
}
