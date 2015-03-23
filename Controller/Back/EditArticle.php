<?php

/**
 * Description of EditArticle
 *
 * @author alex
 */
class EditArticle extends ArekkusuBaseController {

    const EDIT_MODE = "em";
    const EDIT = "e";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::EDIT_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->editMode();
        } else {

            if (filter_input(INPUT_POST, self::EDIT, FILTER_SANITIZE_NUMBER_INT)) {
                $this->edit();
            }

            // mostriamo la lista di articoli tra cui scegliere
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

        $article = $this->getDataLayer()->getArticle(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
        $article->setTitle(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
        $article->setText(filter_input(INPUT_POST, "text", FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        $arr = [];
        if (is_array($_POST["selectedImage"])) {

            foreach ($_POST["selectedImage"] as $image) {

                if (filter_var($image, FILTER_SANITIZE_NUMBER_INT)) {
                    array_push($arr, $this->getDataLayer()->getImage($image));
                }
            }
        }
        $article->setImages($arr);

        $arr = [];
        if (is_array($_POST["tag"])) {

            foreach ($_POST["tag"] as $tag) {

                if (filter_var($tag, FILTER_SANITIZE_NUMBER_INT)) {
                    array_push($arr, $this->getDataLayer()->getTag($tag));
                }
            }
        }
        $article->setTags($arr);

        $this->getDataLayer()->storeArticle($article);

        $this->getSmarty()->assign("edited", "true"); // diciamo che la modifica è andata a buon fine
    }

}
