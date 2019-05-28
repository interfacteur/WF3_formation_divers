<?php

use Controller\DefaultController;
use Controller\MembreController;

// chargement de l'auto-load des classes
require_once 'autoload.php';

// chargement de la configuration
require_once 'config.php';



$controller = $_GET['controller'] ?? 'default';
$action = $_GET['action'] ?? 'home';

$defaultCtrl = $default = new DefaultController();
$membreCtrl = $membre = new MembreController();

$$controller->{$action}(); // ma partie router

/* cette partie router condense avec les variables dynamiques
le code suivant proposé par le formateur :

if ($controller == 'default' && $action == 'home') {
    # echo '<h1>JE SUIS LA PAGE ACCUEIL</h1>';
    $defaultCtrl->home();
}

if ($controller == 'default' && $action == 'categorie') {
    # echo '<h1>JE SUIS LA PAGE CATEGORIE</h1>';
    $defaultCtrl->categorie();
}

if ($controller == 'default' && $action == 'article') {
    # echo '<h1>JE SUIS LA PAGE ARTICLE</h1>';
    $defaultCtrl->article();
}

if ($controller == 'membre' && $action == 'inscription') {
    # echo '<h1>JE SUIS LA PAGE INSCRIPTION</h1>';
    $membreCtrl->inscription();
}

if ($controller == 'membre' && $action == 'connexion') {
    $membreCtrl->connexion();
}

if ($controller == 'membre' && $action == 'profil') {
    $membreCtrl->profil();
}

*/
