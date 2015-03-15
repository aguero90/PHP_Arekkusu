<?php

/**
 * Description of InsertTag
 *
 * @author alex
 */
class InsertTag extends ArekkusuBaseController {

    const INSERT_MODE = "it";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::INSERT_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->storeTag();
        }

        $this->getSmarty()->assign("subSectionActive", 2);

        $this->getSmarty()->assign("contentTemplate", "Back/InsertTag.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
    }

    public function storeTag() {

        $tag = $this->getDataLayer()->createTag();
        $tag->setName(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
        $this->getDataLayer()->storeTag($tag);

        $this->getSmarty()->assign("inserted", "true"); // diciamo che l'inserimento è andato a buon fine
    }

}
