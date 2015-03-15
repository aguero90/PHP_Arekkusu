<?php

/**
 * Questo file è un dispatcher per il sito: gestisce le varie richieste
 * decidendo quale template caricare
 */
require_once "Utils/Autoloader.php";

// definiamo alcune costanti
define("BACK", 0);
define("ARTICLE_LIST", 1);
define("ARTICLE", 2);

define("SECTION_ID", "s");
define("ARTICLE_ID", "p");

$controller = null;
$section = null;

if (!MyUtils::isEmpty($_GET)) {

    var_dump($_GET);

    $section = filter_input(INPUT_GET, SECTION_ID, FILTER_SANITIZE_NUMBER_INT);
} elseif (!MyUtils::isEmpty($_POST)) {

    var_dump($_POST);

    $section = filter_input(INPUT_POST, SECTION_ID, FILTER_SANITIZE_NUMBER_INT);
} else {
// $_GET & $_POST sono vuoti => Home
    $controller = new HomeController();
    $controller->processRequest();
}

if (MyUtils::exist($section)) {

    switch ($section) {

        case BACK:
            echo 'BACK';
            $controller = new BackController();
            $controller->processRequest();
            break;

        case ARTICLE_LIST:
            echo 'ARTICLE_LIST';
            $controller = new ArticleListController();
            $controller->processRequest();
            break;

        case ARTICLE:
            echo 'ARTICLE';
            $controller = new ArticleController();
            $controller->processRequest();
            break;

        default:
            // errore, inserita url non valida
            echo 'errore, inserita url non valida';
            break;
    }
}




