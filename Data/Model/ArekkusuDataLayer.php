<?php

/**
 *
 * @author alex
 */
interface ArekkusuDataLayer extends DataLayer {
    // ========================================================================
    // ARTICLE
    // ========================================================================

    /**
     * @return Article a new article
     */
    public function createArticle();

    /**
     * @param int $articleID
     * @return Article the article object
     */
    public function getArticle($articleID);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getArticles() return all articles
     *      - getArticles($image) return all articles with the image
     *      - getArticles(null, $tag) return all articles with the tag
     *      - getArticles($image, $tag) return all articles with the tag and the image
     *
     * @param Image|null $image optional
     * @param Tag $tag optional
     * @return Array articles
     */
    public function getArticles(ImageMySQL $image = null, TagMySQL $tag = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Article $article
     * @return Article the article object
     */
    public function storeArticle(ArticleMySQL $article);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Article $article
     * @return Article the article object
     */
    public function removeArticle(ArticleMySQL $article);

    // ========================================================================
    // IMAGE
    // ========================================================================

    /**
     * @return Image a new image
     */
    public function createImage();

    /**
     * @param int $imageID
     * @return Image the image object
     */
    public function getImage($imageID);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getImages() return all images
     *      - getImages($article) return all images of the article
     *
     * @param Article $article optional
     * @return Array images
     */
    public function getImages(ArticleMySQL $article = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Image $image
     * @return Image the image object
     */
    public function storeImage(ImageMySQL $image);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Image $image
     * @return Image the image object
     */
    public function removeImage(ImageMySQL $image);

    // ========================================================================
    // TAG
    // ========================================================================

    /**
     * @return Tag a new tag
     */
    public function createTag();

    /**
     * @param int $tagID
     * @return Tag the tag object
     */
    public function getTag($tagID);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getTags() return all tags
     *      - getTags($article) return all tags of the article
     *
     * @param Article $article optional
     * @return Array tags
     */
    public function getTags(ArticleMySQL $article = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Tag $tag
     * @return Tag the tag object
     */
    public function storeTag(TagMySQL $tag);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param Tag $tag
     * @return Tag the tag object
     */
    public function removeTag(TagMySQL $tag);
}
