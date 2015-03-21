<?php

/**
 * Description of DeleteArticle
 *
 * @author alex
 */
class DeleteArticle extends ArekkusuBaseController {

    const DELETE_MODE = "da";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::DELETE_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->removeArticle(filter_input(INPUT_POST, "aid", FILTER_SANITIZE_NUMBER_INT));
        }

        // prendiamo tutti gli articoli
        $this->getSmarty()->assign("articles", $this->getDataLayer()->getArticles());

        $this->getSmarty()->assign("subSectionActive", 3);


        $this->getSmarty()->assign("contentTemplate", "Back/DeleteArticle.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
    }

    public function removeArticle($articleID) {

        $this->getDataLayer()->removeArticle($this->getDataLayer()->getArticle($articleID));

        $this->getSmarty()->assign("deleted", "true"); // diciamo che l'eliminazione è andata a buon fine
    }

}
