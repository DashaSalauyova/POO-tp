<?php

namespace src\Entity;

use src\Entity\Module;
use src\Entity\Promotion;

class Cours {
    protected $m_titre;
    protected $m_contenu;
    protected $m_module;
    protected $m_promotion;

    /**
     * @param $titre
     * @param $contenu
     * @param $module
     * @param $promotion
     */
    public function __construct($p_titre, $p_contenu, Module $p_module, Promotion $p_promotion)
    {
        $this->m_titre = $p_titre;
        $this->m_contenu = $p_contenu;
        $this->m_module = $p_module;
        $this->m_promotion = $p_promotion;
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->m_titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre($p_titre)
    {
        return $this->m_titre = $p_titre;
    }

    /**
     * Get the value of contenu
     */
    public function getContenu()
    {
        return $this->m_contenu;
    }

    /**
     * Set the value of contenu
     */
    public function setContenu($p_contenu)
    {
        return $this->m_contenu = $p_contenu;
    }

    /**
     * Get the value of module
     */
    public function getModule()
    {
        return $this->m_module;
    }

    /**
     * Set the value of module
     */
    public function setModule(Module $p_module)
    {
        $this->m_module = $p_module;
    }

    /**
     * Get the value of promotion
     */
    public function getPromotion()
    {
        return $this->m_promotion;
    }

    /**
     * Set the value of promotion
     */
    public function setPromotion(Promotion $p_promotion)
    {
        return $this->m_promotion = $p_promotion;
    }
}