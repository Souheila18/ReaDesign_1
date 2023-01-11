<?php
// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
// On appelle le modèle et le contrôleur principaux
require_once(ROOT . 'app/Model.php');
require_once(ROOT . 'app/Controller.php');
// On sépare les paramètres et on les met dans le tableau $params
$arrayUri = explode('?', $_SERVER['REQUEST_URI']);

$params = explode('/', $_GET['p']);
try {
    //code...
    if ($params[0] != "") {
        // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
        $controller = $params[0];
    
        // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
        $action = isset($params[1]) ? $params[1] : 'index';
        // On appelle le contrôleur
define("controller",ROOT."controllers/");
require controller. $controller.".php";



    
        // On instancie le contrôleur
        $controller = new $controller();
    
        if (method_exists($controller, $action)) { 

            $params[3] = $arrayUri;
            unset($params[0]);
            unset($params[1]);
            unset($arrayUri);
            call_user_func_array([$controller, $action], $params);
            // On appelle la méthode
           // $controller->$action();
        } else {
    
            // On envoie le code réponse 404
            http_response_code(404);
            echo "La page recherchée n'existe pas";
        }
    } else {
        $controller = ucfirst($params[0]);
    
        // Ici aucun paramètre n'est défini
        // On appelle le contrôleur par défaut
        require_once(ROOT . 'controllers/home.php');
    
        // On instancie le contrôleur
        $controller = new home();
    
        // On appelle la méthode index
        $controller->index();
    }
} catch (exeption $e) {
}
// Si au moins 1 paramètre existe

