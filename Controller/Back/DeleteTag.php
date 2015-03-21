<?php

/**
 * Description of DeleteTag
 *
 * @author alex
 */
class DeleteTag extends ArekkusuBaseController {

    const DELETE_MODE = "dt";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::DELETE_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->removeTag(filter_input(INPUT_POST, "tid", FILTER_SANITIZE_NUMBER_INT));
        }

        // prendiamo tutti i tag
        $this->getSmarty()->assign("tags", $this->getDataLayer()->getTags());

        $this->getSmarty()->assign("subSectionActive", 5);


        $this->getSmarty()->assign("contentTemplate", "Back/DeleteTag.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
    }

    public function removeTag($tagID) {

        $this->getDataLayer()->removeTag($this->getDataLayer()->getTag($tagID));

        $this->getSmarty()->assign("deleted", "true"); // diciamo che l'eliminazione è andata a buon fine
    }

}
