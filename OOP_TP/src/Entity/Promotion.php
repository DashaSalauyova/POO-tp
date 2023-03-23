<?php

namespace src\Entity;

class Promotion {

    public $m_nom_promotion;

    public function __construct($nom_promotion)
    {
        $this->m_nom_promotion = $nom_promotion;
    }
}