<?php 

namespace src\Entity;

class Module {
    private $nom_module;

    public function __construct(string $p_nom_module)
    {
        $this->nom_module = $p_nom_module;
    }

    public function getNomModule(){
        return $this->nom_module;
    }

    public function setNomModule($p_nom_module){
        $this->nom_module = $p_nom_module;
    }
}