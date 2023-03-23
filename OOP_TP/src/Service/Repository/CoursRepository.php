<?php

namespace src\Service\Repository;

use src\Entity\Eleve;
use src\Entity\Enseignant;
use src\Entity\Devoir;
use src\Entity\DevoirRendu;
use src\Entity\Promotion;

class CoursRepository{

    /**
     * Eleve rend le travail (devoir) demandé par l'enseignant
     * @param $p_eleve : eleve qui rend son devoir
     * @param $p_note : note obtenu par l'eleve sur ce devoir (pr defaur 0 si le devoir n'est pas noté)
     * @param $p_contenu : devoir rendu
     * @param $p_devoir_enseignant : sujet de l'examen soumis par l'enseignant à toute la classe
     * @param DevoirRendu : Objet Devoir rendu par l'eleve    
     */

    public function RendreDevoir(Eleve $p_eleve, $p_note, $p_contenu, $p_devoir_enseignant){
        $devoir_rendu = new DevoirRendu($p_eleve, $p_note, $p_contenu, $p_devoir_enseignant);
        return $devoir_rendu;
    }

    
    /**
     * L'enseignant dépose un devoir aux eleves
     *
     * @param $p_enseignant : enseignant qui met un devoir
     * @param $p_promotion : promotion des eleves
     * @param $p_deadline : date de fin du rendu de travail
     * @param $p_note_max : note max attribueé pour le devoir
     * @param $p_module : nom du module de la classe
     * @return Devoir: Objet devoir deposé par enseignant
     */
    public function deposerDevoir(string $p_titre, string $p_contenu, int $p_noteMax, string $p_deadline, Enseignant $p_enseignant, Promotion $p_promotion)
    {
        return new Devoir($p_titre, $p_contenu, $p_noteMax, $p_deadline, $p_enseignant, $p_promotion);
    }
}

