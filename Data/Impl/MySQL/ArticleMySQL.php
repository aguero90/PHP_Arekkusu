<?php

/**
 * Description of ArticleMySQL
 *
 * @author alex
 */
class ArticleMySQL implements Article {

    private $ID;
    private $title;
    private $text;
    private $date;
    protected $dirty;
    protected $dataLayer;
    private $images;
    private $tags;

    public function __construct(ArekkusuDataLayer $dataLayer, $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(ArekkusuDataLayer $dataLayer) {

        $this->ID = 0;
        $this->title = "";
        $this->text = "";
        $this->date = null;

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->images = null;
        $this->tags = null;
    }

    private function constructorDataAndResult(ArekkusuDataLayer $dataLayer, $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->title = $resultSet["title"];
        $this->text = $resultSet["text"];
        $this->date = new MyDate($resultSet["date"]);
    }

    public function getID() {
        return $this->ID;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

    public function getDate() {
        return $this->date;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function getImages() {
        if (MyUtils::isEmpty($this->images)) {
            $this->images = $this->dataLayer->getImages($this);
        }
        return $this->images;
    }

    public function getTags() {
        if (MyUtils::isEmpty($this->tags)) {
            $this->tags = $this->dataLayer->getTags($this);
        }
        return $this->tags;
    }

    public function setTitle($title) {
        $this->title = $title;
        $this->dirty = true;
        return $this;
    }

    public function setText($text) {
        $this->text = $text;
        $this->dirty = true;
        return $this;
    }

    public function setDate(MyDate $date) {
        $this->date = $date;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    public function setImages($images) {
        $this->images = $images;
        $this->dirty = true;
        return $this;
    }

    public function setTags($tags) {
        $this->tags = $tags;
        $this->dirty = true;
        return $this;
    }

    public function hasImage(ImageMySQL $image) {

        return in_array($image, $this->getImages());
    }

    public function hasTag(TagMySQL $tag) {

        var_dump($this->getTags());
        return in_array($tag, $this->getTags());
    }

    public function copyFrom(ArticleMySQL $article) {

        $this->ID = $article->getID();
        $this->title = $article->getTitle();
        $this->text = $article->getText();
        $this->date = $article->getDate();

        unset($this->images);
        $this->images = null;
        unset($this->tags);
        $this->tags = null;

        $this->dirty = true;

        return $this;
    }

}
