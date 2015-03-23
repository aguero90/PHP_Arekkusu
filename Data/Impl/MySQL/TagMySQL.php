<?php

/**
 * Description of TagMySQL
 *
 * @author alex
 */
class TagMySQL {

    private $ID;
    private $name;
    protected $dirty;
    protected $dateLayer;
    private $articles;

    public function __construct(ArekkusuDataLayer $dataLayer, $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(ArekkusuDataLayer $dataLayer) {

        $this->ID = 0;
        $this->name = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->articles = null;
    }

    private function constructorDataAndResult(ArekkusuDataLayer $dataLayer, $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->name = $resultSet["name"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getName() {
        return $this->name;
    }

    public function getDirty() {
        return $this->dirty;
    }

    public function getArticles() {
        if (MyUtils::isEmpty($this->articles)) {
            $this->articles = $this->dataLayer->getArticles(null, $this);
        }
        return $this->articles;
    }

    public function setName($name) {
        $this->name = $name;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    public function setArticles($articles) {
        $this->articles = $articles;
        $this->dirty = true;
        return $this;
    }

    public function copyFrom(TagMySQL $tag) {

        $this->ID = $tag->getID();
        $this->name = $tag->getName();

        unset($this->articles);
        $this->articles = null;

        $this->dirty = true;

        return $this;
    }

    public function __toString() {

        return "ID: " . $this->getID() . " " .
                "name: " . $this->getName();
    }

}
