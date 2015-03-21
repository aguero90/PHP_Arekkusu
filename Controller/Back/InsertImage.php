<?php

/**
 * Description of InsertImage
 *
 * @author alex
 */
class InsertImage extends ArekkusuBaseController {

    const INSERT_MODE = "ii";
    const UPLOAD_DIR = "uploads/";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::INSERT_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->uploadImage();
        }

        $this->getSmarty()->assign("subSectionActive", 1);

        $this->getSmarty()->assign("contentTemplate", "Back/InsertImage.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
    }

    public function uploadImage() {

        var_dump($_FILES);

        if (isset($_FILES['image'])) {
            $file = $_FILES['image'];
            if ($file['error'] == UPLOAD_ERR_OK and is_uploaded_file($file['tmp_name'])) {

                $image = $this->getDataLayer()->createImage();
                $image->setTrueName($file['name']); // qui forse dovrei filtrare perchè l'utente potrebbe mettere select*from
                $image->setFalseName(MyUtils::generateUniqueRandomName());
                $this->getDataLayer()->storeImage($image);


                move_uploaded_file($file['tmp_name'], self::UPLOAD_DIR . $image->getFalseName());

                $this->getSmarty()->assign("inserted", "true"); // diciamo che l'inserimento è andato a buon fine
            }
        }
    }

}
