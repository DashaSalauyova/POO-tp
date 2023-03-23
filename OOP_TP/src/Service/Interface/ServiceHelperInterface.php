<?php

namespace src\Service\Interface;

interface ServiceHelperInterface {
    public function seConnecter($login, $password, $liste_utilisateur);
    // public static function hacherPassword($password);
    public static function hasherPassword(string $password): string;
}