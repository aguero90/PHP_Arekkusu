<?php

/**
 * Description of Autoloader
 *
 * @author alex
 */
class Autoloader {

    public static function smartyAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Lib/Smarty-3.1.17/libs/{$class}.class.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    public static function includeAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Include/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    public static function utilsAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Utils/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    // ========================================================================
    // MODEL
    // ========================================================================

    public static function dataLayerAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Data/Layer/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    public static function modelAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Data/Model/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    public static function modelImplAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Data/Impl/MySQL/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    // ========================================================================
    // CONTROLLER
    // ========================================================================

    public static function controllerAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Controller/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    public static function controllerFrontAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Controller/Front/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

    public static function controllerBackAutoloader($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Arekkusu/Controller/Back/{$class}.php";
        if (is_readable($path)) {
            require_once $path;
        }
    }

}

// Smarty & Utils
spl_autoload_register('Autoloader::smartyAutoloader');
spl_autoload_register('Autoloader::includeAutoloader');
spl_autoload_register('Autoloader::utilsAutoloader');

// Data
spl_autoload_register('Autoloader::dataLayerAutoloader');
spl_autoload_register('Autoloader::modelAutoloader');
spl_autoload_register('Autoloader::modelImplAutoloader');

// Controller
spl_autoload_register('Autoloader::controllerAutoloader');
spl_autoload_register('Autoloader::controllerFrontAutoloader');
spl_autoload_register('Autoloader::controllerBackAutoloader');

