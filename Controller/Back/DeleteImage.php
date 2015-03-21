<?php

/**
 * Description of DeleteImage
 *
 * @author alex
 */
class DeleteImage extends ArekkusuBaseController {

    const DELETE_MODE = "di";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::DELETE_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->removeImage(filter_input(INPUT_POST, "iid", FILTER_SANITIZE_NUMBER_INT));
        }

        // prendiamo tutte le imamgini
        $this->getSmarty()->assign("images", $this->getDataLayer()->getImages());

        $this->getSmarty()->assign("subSectionActive", 4);


        $this->getSmarty()->assign("contentTemplate", "Back/DeleteImage.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
    }

    public function removeImage($imageID) {

        $image = $this->getDataLayer()->getImage($imageID);

        if ($this->getDataLayer()->removeImage($image)) {
            // se la rimozione sul DB va a buon fine rimuovo l'immagine dal file system
            unlink(InsertImage::UPLOAD_DIR . $image->getFalseName());

            $this->getSmarty()->assign("deleted", "true"); // diciamo che l'eliminazione è andata a buon fine
        }
    }

}
