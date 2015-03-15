<?php

/**
 *
 * @author alex
 */
interface Image {

    /**
     * @return int the image ID
     */
    public function getID();

    /**
     *  @return String the image true name
     */
    public function getTrueName();

    /**
     *
     * @param String $trueName
     * @return Image the image object
     */
    public function setTrueName($trueName);

    /**
     *  @return String the image false name
     */
    public function getFalseName();

    /**
     *
     * @param String $falseName
     * @return Image the image object
     */
    public function setFalseName($falseName);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Image $image
     * @return Image the image object
     */
    public function copyFrom(ImageMySQL $image);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Array the array of image's articles
     */
    public function getArticles();

    /**
     * @param Array $articles
     * @return Image the image object
     */
    public function setArticles($articles);
}
