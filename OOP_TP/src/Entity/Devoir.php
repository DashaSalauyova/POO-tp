<?php

namespace src\Entity;

class Devoir {

    protected $m_titre;
    protected $m_enseignant;
    protected $m_promotion;
    protected $m_deadline;
    protected $m_note_max;
    protected $m_module;

    /**
     * @param $m_titre;
     * @param $m_enseignant
     * @param $m_promotion
     * @param $m_deadline
     * @param $m_notemax
     * @param $m_module
     */

    public function __construct($p_titre, $p_enseignant, $p_promotion, $p_deadline, $p_note_max, $p_module)
    {
        $this->m_titre = $p_titre;
        $this->m_enseignant = $p_enseignant;
        $this->m_promotion = $p_promotion;
        $this->m_deadline = $p_deadline;
        $this->m_note_max = $p_note_max;
        $this->m_module = $p_module;
    }
    
}