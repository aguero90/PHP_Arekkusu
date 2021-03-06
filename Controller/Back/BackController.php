<?php

/**
 * Description of BackController
 *
 * @author alex
 */
class BackController extends ArekkusuBaseController {

    const SUB_SECTION_ID = "ss";
    const INSERT_ARTICLE = 0;
    const INSERT_IMAGE = 1;
    const INSERT_TAG = 2;
    const DELETE_ARTICLE = 3;
    const DELETE_IMAGE = 4;
    const DELETE_TAG = 5;
    const EDIT_ARTICLE = 6;

    private $controller;
    private $section;

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (!MyUtils::isEmpty($_GET)) {
            $this->section = filter_input(INPUT_GET, self::SUB_SECTION_ID, FILTER_SANITIZE_NUMBER_INT);
        } elseif (!MyUtils::isEmpty($_POST)) {
            $this->section = filter_input(INPUT_POST, self::SUB_SECTION_ID, FILTER_SANITIZE_NUMBER_INT);
        } else {
            echo 'errore con la URL';
        }

        switch ($this->section) {

            case self::INSERT_ARTICLE:
                $this->controller = new InsertArticle();
                $this->controller->processRequest();
                break;

            case self::INSERT_IMAGE:
                $this->controller = new InsertImage();
                $this->controller->processRequest();
                break;

            case self::INSERT_TAG:
                $this->controller = new InsertTag();
                $this->controller->processRequest();
                break;

            case self::DELETE_ARTICLE:
                $this->controller = new DeleteArticle();
                $this->controller->processRequest();
                break;

            case self::DELETE_IMAGE:
                $this->controller = new DeleteImage();
                $this->controller->processRequest();
                break;

            case self::DELETE_TAG:
                $this->controller = new DeleteTag();
                $this->controller->processRequest();
                break;

            case self::EDIT_ARTICLE:
                $this->controller = new EditArticle();
                $this->controller->processRequest();
                break;

            default:
                // errore, inserita url non valida
                echo 'errore, inserita url non valida';
                break;
        }
    }

}
