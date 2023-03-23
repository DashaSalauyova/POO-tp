<?php

namespace Test;

use Test\TestProjet;

require_once('TestProjet.php');

//lancer tous les tests
$testProject = new TestProjet();
$testProject->getInstance();
$testProject->initData();
$testProject->testConnectionUtilisateurInconnu();
$testProject->testConnectionUtilisateurConnu();
$testProject->testHeritage();
$testProject->testRendreDevoir();
$testProject->testDeposerDevoir();