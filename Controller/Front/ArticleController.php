<?php

/**
 * Description of ArticleController
 *
 * @author alex
 */
class ArticleController extends ArekkusuBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        // prendiamo il post in questione dalla URL
        $this->getSmarty()->assign("article", $this->getDataLayer()->getArticle((int) filter_input(INPUT_GET, ARTICLE_ID, FILTER_SANITIZE_NUMBER_INT)));


        $this->getSmarty()->assign("contentTemplate", "Front/Article.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Front/OutlineFront.tpl"); // mostriamo il template
    }

}
