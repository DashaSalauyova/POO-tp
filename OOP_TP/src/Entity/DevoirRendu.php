<?php

namespace src\Entity;

class DevoirRendu {

    protected $m_eleve;
    protected $m_note;
    protected $m_contenu;
    protected $m_devoir_enseignant;

    public function __construct(Eleve $p_eleve, $p_note, $p_contenu, Devoir $p_devoir_enseignant){
        $this->m_eleve = $p_eleve;
        $this->m_note = $p_note;
        $this->m_contenu = $p_contenu;
        $this->m_devoir_enseignant = $p_devoir_enseignant;
    }
}