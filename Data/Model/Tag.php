<?php

/**
 *
 * @author alex
 */
interface Tag {

    /**
     * @return int the tag ID
     */
    public function getID();

    /**
     *  @return String the tag name
     */
    public function getName();

    /**
     *
     * @param String $name
     * @return Tag the tag object
     */
    public function setName($name);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Tag $tag
     * @return Tag the tag object
     */
    public function copyFrom(TagMySQL $tag);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Array the array of tag's articles
     */
    public function getArticles();

    /**
     * @param Array $articles
     * @return Tag the tag object
     */
    public function setArticles($articles);
}
