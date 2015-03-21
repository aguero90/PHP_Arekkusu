<?php

/**
 * Description of EditArticle
 *
 * @author alex
 */
class EditArticle extends ArekkusuBaseController {

    const EDIT_MODE = "ea";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::EDIT_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->editMode();
        } else {

            // prendiamo tutti gli articoli
            $this->getSmarty()->assign("articles", $this->getDataLayer()->getArticles());

            $this->getSmarty()->assign("subSectionActive", 6);

            $this->getSmarty()->assign("contentTemplate", "Back/EditArticle.tpl"); // diciamo quale template deve includere
            $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
        }
    }

    // in questa funzione mi aspetto i dati modificati e non nella POST
    public function editMode() {

        $this->getSmarty()->assign("article", $this->getDataLayer()->getArticle(filter_input(INPUT_POST, "aid", FILTER_SANITIZE_NUMBER_INT)));
        $this->getSmarty()->assign("tags", $this->getDataLayer()->getTags());
        $this->getSmarty()->assign("images", $this->getDataLayer()->getImages());

        $this->getSmarty()->assign("subSectionActive", 6);

        $this->getSmarty()->assign("contentTemplate", "Back/EditSelectedArticle.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
    }

    // in questa funzione mi aspetto i dati modificati e non nella POST
    public function edit() {


        $this->getSmarty()->assign("edited", "true"); // diciamo che la modifica è andata a buon fine
    }

}
