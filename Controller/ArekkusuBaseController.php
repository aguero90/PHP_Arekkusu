<?php

/**
 * Description of ArekkusuBaseController
 *
 * @author alex
 */
class ArekkusuBaseController {

    private $dataLayer;
    private $smarty;

    public function __construct() {

        $this->dataLayer = new ArekkusuDataLayerMySQL();
        $this->dataLayer->init();
        $this->smarty = new SmartySetup();
    }

    public function getDataLayer() {
        return $this->dataLayer;
    }

    public function getSmarty() {
        return $this->smarty;
    }

}
