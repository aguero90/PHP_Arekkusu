<?php

/**
 * Description of SmartySetup
 *
 * @author alex
 */
class SmartySetup extends Smarty {

    function __construct() {
        parent::__construct();

        $this->setTemplateDir($_SERVER["DOCUMENT_ROOT"] . "/Arekkusu/View/Smarty/Templates/");
        $this->setCompileDir($_SERVER["DOCUMENT_ROOT"] . "/Arekkusu/View/Smarty/Templates_c/");
        $this->setConfigDir($_SERVER["DOCUMENT_ROOT"] . "/Arekkusu/View/Smarty/Configs/");
        $this->setCacheDir($_SERVER["DOCUMENT_ROOT"] . "/Arekkusu/View/Smarty/Cache/");

        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->caching = Smarty::CACHING_OFF;
        $this->assign('app_name', 'Arekkusu');
    }

}
