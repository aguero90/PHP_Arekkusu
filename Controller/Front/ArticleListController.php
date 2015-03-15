<?php

/**
 * Description of ArticleListController
 *
 * @author alex
 */
class ArticleListController extends ArekkusuBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        // prendiamo tutti i post dal DB ed assegniamoli alla variabile $posts
        $this->getSmarty()->assign("articles", $this->getDataLayer()->getArticles());


        $this->getSmarty()->assign("contentTemplate", "Front/ArticleList.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Front/OutlineFront.tpl"); // mostriamo il template
    }

}
