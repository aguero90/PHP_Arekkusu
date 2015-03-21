<?php

/**
 *
 * @author alex
 */
interface Article {

    /**
     * @return int the article ID
     */
    public function getID();

    /**
     *  @return String the article title
     */
    public function getTitle();

    /**
     *
     * @param String $title
     * @return Article the article object
     */
    public function setTitle($title);

    /**
     *  @return String the article text
     */
    public function getText();

    /**
     *
     * @param String $text
     * @return Article the article object
     */
    public function setText($text);

    /**
     *  @return MyDate the article date
     */
    public function getDate();

    /**
     *
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param MyDate $date
     * @return Article the article object
     */
    public function setDate(MyDate $date);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Article $article
     * @return Article the article object
     */
    public function copyFrom(ArticleMySQL $article);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Array the array of article's images
     */
    public function getImages();

    /**
     * @param Array $images
     * @return Article the article object
     */
    public function setImages($images);

    /**
     * @return bool true if the article has image $image, false otherwise
     */
    public function hasImage(ImageMySQL $image);

    /**
     * @return Array the array of article's tags
     */
    public function getTags();

    /**
     * @param Array $tags
     * @return Article the article object
     */
    public function setTags($tags);

    /**
     * @return bool true if the article has tag $tag, false otherwise
     */
    public function hasTag(TagMySQL $tag);
}
