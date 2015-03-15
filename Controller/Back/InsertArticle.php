<?php

/**
 * Description of InsertArticle
 *
 * @author alex
 */
class InsertArticle extends ArekkusuBaseController {

    const INSERT_MODE = "ia";

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (filter_input(INPUT_POST, self::INSERT_MODE, FILTER_SANITIZE_NUMBER_INT)) {
            $this->storeArticle();
        }

        // prendiamo il post in questione dalla URL
        $this->getSmarty()->assign("tags", $this->getDataLayer()->getTags());
        $this->getSmarty()->assign("images", $this->getDataLayer()->getImages());

        $this->getSmarty()->assign("subSectionActive", 0);


        $this->getSmarty()->assign("contentTemplate", "Back/InsertArticle.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Back/OutlineBack.tpl"); // mostriamo il template
    }

    public function storeArticle() {

        $article = $this->getDataLayer()->createArticle();
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
    }

}
