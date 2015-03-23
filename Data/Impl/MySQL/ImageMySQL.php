<?php

/**
 * Description of ImageMySQL
 *
 * @author alex
 */
class ImageMySQL implements Image {

    private $ID;
    private $trueName;
    private $falseName;
    protected $dirty;
    protected $dateLayer;
    private $articles;

    public function __construct(ArekkusuDataLayer $dataLayer, $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(ArekkusuDataLayer $dataLayer) {

        $this->ID = 0;
        $this->trueName = "";
        $this->falseName = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->articles = null;
    }

    private function constructorDataAndResult(ArekkusuDataLayer $dataLayer, $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->trueName = $resultSet["trueName"];
        $this->falseName = $resultSet["falseName"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getTrueName() {
        return $this->trueName;
    }

    public function getFalseName() {
        return $this->falseName;
    }

    public function getDirty() {
        return $this->dirty;
    }

    public function getArticles() {
        if (MyUtils::isEmpty($this->articles)) {
            $this->articles = $this->dataLayer->getArticles($this);
        }
        return $this->articles;
    }

    public function setTrueName($trueName) {
        $this->trueName = $trueName;
        $this->dirty = true;
        return $this;
    }

    public function setFalseName($falseName) {
        $this->falseName = $falseName;
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

    public function copyFrom(ImageMySQL $image) {

        $this->ID = $image->getID();
        $this->trueName = $image->getTrueName();
        $this->falseName = $image->getFalseName();

        unset($this->articles);
        $this->articles = null;

        $this->dirty = true;

        return $this;
    }

    public function __toString() {

        return "ID: " . $this->getID() . " " .
                "trueName: " . $this->getTrueName() . " " .
                "falseName: " . $this->getFalseName();
    }

}
