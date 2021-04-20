<?php
require "vendor/autoload.php";  //composer
require "model/model.php";
require "controller/controllers.php";

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//print_r($uri);
//die();

// www.****.com/formation/TP1/index.php
// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


/*
* /formation/TP1/index.php --> la liste des blog posst
* /formation/TP1/create --> le formulaire pour créer un enregistrement
* /formation/TP1/show?id=XX --> la page qui affiche le détail d'un blog post
*/

if ('/formation/TP1/index.php' === $uri) {
        index_action();
} else if ($uri === '/formation/TP1/index.php/create') {            // routage création formulaire
        printform_action();
} else if ($uri === '/formation/TP1/index.php/show' && isset($_GET['id'])) {    // routage affichage liste
        show_action();
} else if ($uri === "/formation/TP1/index.php/processform") {
        processform_action();
} else if ($uri === "/formation/TP1/index.php/printpdf") {
        printpdf_action();
} else {
        header('HTTP/1.1 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
}
