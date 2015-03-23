<?php

/**
 * Description of ArekkusuDataLayerMySQL
 *
 * @author alex
 */
class ArekkusuDataLayerMySQL extends DataLayerMySQL implements ArekkusuDataLayer {

    private $sArticleByID, $sArticlesByImage, $sArticlesByTag, $sArticlesByImageAndTag, $sArticles,
            $iArticle,
            $uArticle,
            $dArticle;
    private $sImageByID, $sImagesByArticle, $sImages,
            $iImage,
            $uImage,
            $dImage;
    private $sTagByID, $sTagsByArticle, $sTags,
            $iTag,
            $uTag,
            $dTag;
    // Relationship
    // Relationship without attribute
    private $iArticleImage,
            $dArticleImage;
    private $iArticleTag,
            $dArticleTag;

    public function init() {
        try {

            parent::init();

            // Article
            $this->sArticleByID = $this->connection->prepare("SELECT * FROM e_article WHERE ID=?");
            $this->sArticlesByImage = $this->connection->prepare("SELECT articleID FROM r_article_image WHERE imageID=?");
            $this->sArticlesByTag = $this->connection->prepare("SELECT articleID FROM r_article_tag WHERE tagID=?");
            $this->sArticles = $this->connection->prepare("SELECT ID FROM e_article");
            $this->iArticle = $this->connection->prepare("INSERT INTO e_article (title, text) VALUES (?, ?)");
            $this->uArticle = $this->connection->prepare("UPDATE e_article SET title=?, text=? WHERE ID=?");
            $this->dArticle = $this->connection->prepare("DELETE FROM e_article WHERE ID=?");

            // Image
            $this->sImageByID = $this->connection->prepare("SELECT * FROM e_image WHERE ID=?");
            $this->sImagesByArticle = $this->connection->prepare("SELECT imageID FROM r_article_image WHERE articleID=?");
            $this->sImages = $this->connection->prepare("SELECT ID FROM e_image");
            $this->iImage = $this->connection->prepare("INSERT INTO e_image (trueName, falseName) VALUES (?, ?)");
            $this->uImage = $this->connection->prepare("UPDATE e_image SET trueName=?, falseName=? WHERE ID=?");
            $this->dImage = $this->connection->prepare("DELETE FROM e_image WHERE ID=?");

            // Tag
            $this->sTagByID = $this->connection->prepare("SELECT * FROM e_tag WHERE ID=?");
            $this->sTagsByArticle = $this->connection->prepare("SELECT tagID FROM r_article_tag WHERE articleID=?");
            $this->sTags = $this->connection->prepare("SELECT ID FROM e_tag");
            $this->iTag = $this->connection->prepare("INSERT INTO e_tag (name) VALUES (?)");
            $this->uTag = $this->connection->prepare("UPDATE e_tag SET name=? WHERE ID=?");
            $this->dTag = $this->connection->prepare("DELETE FROM e_tag WHERE ID=?");

            // Relationship
            // Relationship without attribute
            // ArticleImage
            $this->iArticleImage = $this->connection->prepare("INSERT INTO r_article_image (articleID, imageID) VALUES (?, ?)");
            $this->dArticleImage = $this->connection->prepare("DELETE FROM r_article_image WHERE articleID=? AND imageID=?");

            // ArticleTag
            $this->iArticleTag = $this->connection->prepare("INSERT INTO r_article_tag (articleID, tagID) VALUES (?, ?)");
            $this->dArticleTag = $this->connection->prepare("DELETE FROM r_article_tag WHERE articleID=? AND tagID=?");
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // ========================================================================
    // ARTICLE
    // ========================================================================

    public function createArticle() {
        return new ArticleMySQL($this);
    }

    public function getArticle($articleID) {
        return $this->selectArticleByID($articleID);
    }

    // sArticleByID = SELECT * FROM e_article WHERE ID=?
    private function selectArticleByID($articleID) {

        $result = null;
        try {

            $this->sArticleByID->bindValue(1, $articleID);
            $this->sArticleByID->execute();
            // la variabile $rs contiene la "prossima riga" del resultset
            // se questa riga non esite viene restituito FALSE
            //
            // in questo caso ci aspettiamo un'unica riga nel resultset, per questo l'if()
            //
            // tramite PDO::FETCH_ASSOC diciamo che la riga la deve essere trasformata in un
            // array associativo in cui l'indice corrisponde al nome della colonna sul DB
            if (($rs = $this->sArticleByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new ArticleMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getArticles(ImageMySQL $image = null, TagMySQL $tag = null) {

        if (!MyUtils::isEmpty($image) && !MyUtils::isEmpty($tag)) {
            echo "CHIAMATA NON VALIDA: non puoi chiedere un articolo sia per immagine che per tag ===========================";
        } elseif (!MyUtils::isEmpty($image)) {
            return $this->selectArticlesByImage($image);
        } elseif (!MyUtils::isEmpty($tag)) {
            return $this->selectArticlesByTag($tag);
        } else {
            return $this->selectArticles();
        }
    }

    // sArticlesByImage = SELECT articleID FROM r_article_image WHERE imageID=?
    private function selectArticlesByImage(ImageMySQL $image) {

        $result = array();
        try {

            $this->sArticlesByImage->bindValue(1, $image->getID());
            $this->sArticlesByImage->execute();
            while (($rs = $this->sArticlesByImage->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getArticle((int) $rs["articleID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sArticlesByTag = SELECT articleID FROM r_article_tag WHERE tagID=?
    private function selectArticlesByTag(TagMySQL $tag) {

        $result = array();
        try {

            $this->sArticlesByTag->bindValue(1, $tag->getID());
            $this->sArticlesByTag->execute();
            while (($rs = $this->sArticlesByTag->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getArticle((int) $rs["articleID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sArticles = SELECT ID FROM e_article
    private function selectArticles() {

        $result = array();
        try {

            $this->sArticles->execute();
            while (($rs = $this->sArticles->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getArticle((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeArticle(ArticleMySQL $article) {

        try {
            if ($article->getID() > 0) {
                // update
                return $article->isDirty() ? $this->updateArticle($article) : $article;
            } else {
                // insert
                return $this->insertArticle($article);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uArticle = UPDATE e_article SET title=?, text=? WHERE ID=?
    private function updateArticle(ArticleMySQL $article) {

        try {
            $this->uArticle->bindValue(1, $article->getTitle());
            $this->uArticle->bindValue(2, $article->getText());
            $this->uArticle->bindValue(3, $article->getID());
            $this->uArticle->execute();

            // save relationship
            $memoryImages = $article->getImages();
            $DBImages = $this->getImages($article);
            // inseriamo la relazione $article $image per tutti quei prodotti
            // che sono in memoria ma non nel DB

            foreach (array_diff($memoryImages, $DBImages) as $image) {
                $this->insertArticleImage($article->getID(), $image->getID());
            }
            // eliminiamo la relazione $article $image per tutti quei prodotti
            // che sono nel DB ma non in memoria
            foreach (array_diff($DBImages, $memoryImages) as $image) {
                $this->deleteArticleImage($article->getID(), $image->getID());
            }

            $memoryTags = $article->getTags();
            $DBTags = $this->getTags($article);
            foreach (array_diff($memoryTags, $DBTags) as $tag) {
                $this->insertArticleTag($article->getID(), $tag->getID());
            }
            foreach (array_diff($DBTags, $memoryTags) as $tag) {
                $this->deleteArticleTag($article->getID(), $tag->getID());
            }

            $article->copyFrom($this->getArticle($article->getID()));
            $article->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $article;
    }

    // iArticle = INSERT INTO e_article (title, text) VALUES (?, ?)
    private function insertArticle(ArticleMySQL $article) {

        try {

            $this->iArticle->bindValue(1, $article->getTitle());
            $this->iArticle->bindValue(2, $article->getText());
            var_dump($this->iArticle->execute());

            $ID = (int) $this->connection->lastInsertId();

            var_dump($ID);

            // save relationship
            foreach ($article->getImages() as $image) {
                $this->insertArticleImage($ID, $image->getID());
            }
            foreach ($article->getTags() as $tag) {
                $this->insertArticleTag($ID, $tag->getID());
            }

            $article->copyFrom($this->getArticle($ID));
            $article->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $article;
    }

    public function removeArticle(ArticleMySQL $article) {
        return $this->deleteArticle($article);
    }

    // dArticle = DELETE FROM e_article WHERE ID=?
    private function deleteArticle(ArticleMySQL $article) {

        try {
            $this->dArticle->bindValue(1, $article->getID());
            $this->dArticle->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $article;
    }

    // ========================================================================
    // IMAGE
    // ========================================================================

    public function createImage() {
        return new ImageMySQL($this);
    }

    public function getImage($imageID) {
        return $this->selectImageByID($imageID);
    }

    // sImageByID = SELECT * FROM e_image WHERE ID=?
    private function selectImageByID($imageID) {

        $result = null;
        try {
            $this->sImageByID->bindValue(1, $imageID);
            $this->sImageByID->execute();

            if (($rs = $this->sImageByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new ImageMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getImages(ArticleMySQL $article = null) {

        if (!MyUtils::isEmpty($article)) {
            return $this->selectImagesByArticle($article);
        } else {
            return $this->selectImages();
        }
    }

    // sImagesByArticle = SELECT imageID FROM r_article_image WHERE articleID=?
    private function selectImagesByArticle(ArticleMySQL $article) {

        $result = array();
        try {

            $this->sImagesByArticle->bindValue(1, $article->getID());
            $this->sImagesByArticle->execute();
            while (($rs = $this->sImagesByArticle->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getImage((int) $rs["imageID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sImages = SELECT ID FROM e_image
    private function selectImages() {

        $result = array();
        try {

            $this->sImages->execute();
            while (($rs = $this->sImages->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getImage((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeImage(ImageMySQL $image) {

        try {
            if ($image->getID() > 0) {
                // update
                return $image->isDirty() ? $this->updateImage($image) : $image;
            } else {
                // insert
                return $this->insertImage($image);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uImage = UPDATE e_image SET realName=?, falseName=? WHERE ID=?
    private function updateImage(ImageMySQL $image) {

        try {
            $this->uImage->bindValue(1, $image->getTrueName());
            $this->uImage->bindValue(2, $image->getFalseName());
            $this->uImage->bindValue(4, $image->getID());
            $this->uImage->execute();

            // save relationship
            $memoryArticles = $image->getArticles();
            $DBArticles = $this->getArticles($image);
            foreach (array_diff($memoryArticles, $DBArticles) as $article) {
                $this->insertArticleImage($article->getID(), $image->getID());
            }
            foreach (array_diff($DBArticles, $memoryArticles) as $article) {
                $this->deleteArticleImage($article->getID(), $image->getID());
            }

            $image->copyFrom($this->getImage($image->getID()));
            $image->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $image;
    }

    // iImage = INSERT INTO e_image (trueName, falseName) VALUES (?, ?)
    private function insertImage(ImageMySQL $image) {

        try {
            $this->iImage->bindValue(1, $image->getTrueName());
            $this->iImage->bindValue(2, $image->getFalseName());
            $this->iImage->execute();

            $ID = (int) $this->connection->lastInsertId();

            // save relationship
            foreach ($image->getArticles() as $article) {
                $this->insertArticleImage($article->getID(), $ID);
            }

            $image->copyFrom($this->getImage($ID));
            $image->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $image;
    }

    public function removeImage(ImageMySQL $image) {
        return $this->deleteImage($image);
    }

    // dImage = DELETE FROM e_image WHERE ID=?
    private function deleteImage(ImageMySQL $image) {

        try {
            $this->dImage->bindValue(1, $image->getID());
            $this->dImage->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $image;
    }

    // ========================================================================
    // TAG
    // ========================================================================

    public function createTag() {
        return new TagMySQL($this);
    }

    public function getTag($tagID) {
        return $this->selectTagByID($tagID);
    }

    // sTagByID = SELECT * FROM e_tag WHERE ID=?
    private function selectTagByID($tagID) {

        $result = null;
        try {
            $this->sTagByID->bindValue(1, $tagID);
            $this->sTagByID->execute();

            if (($rs = $this->sTagByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new TagMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getTags(ArticleMySQL $article = null) {

        if (!MyUtils::isEmpty($article)) {
            return $this->selectTagsByArticle($article);
        } else {
            return $this->selectTags();
        }
    }

    // sTagsByArticle = SELECT tagID FROM r_article_tag WHERE articleID=?
    private function selectTagsByArticle(ArticleMySQL $article) {

        $result = array();
        try {

            $this->sTagsByArticle->bindValue(1, $article->getID());
            $this->sTagsByArticle->execute();
            while (($rs = $this->sTagsByArticle->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getTag((int) $rs["tagID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sTags = SELECT ID FROM e_tag
    private function selectTags() {

        $result = array();
        try {

            $this->sTags->execute();
            while (($rs = $this->sTags->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getTag((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeTag(TagMySQL $tag) {

        try {
            if ($tag->getID() > 0) {
                // update
                return $tag->isDirty() ? $this->updateTag($tag) : $tag;
            } else {
                // insert
                return $this->insertTag($tag);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uTag = UPDATE e_tag SET name=? WHERE ID=?
    private function updateTag(TagMySQL $tag) {

        try {
            $this->uTag->bindValue(1, $tag->getName());
            $this->uTag->bindValue(4, $tag->getID());
            $this->uTag->execute();

            // save relationship
            $memoryArticles = $tag->getArticles();
            $DBArticles = $this->getArticles($tag);
            foreach (array_diff($memoryArticles, $DBArticles) as $article) {
                $this->insertArticleImage($article->getID(), $tag->getID());
            }
            foreach (array_diff($DBArticles, $memoryArticles) as $article) {
                $this->deleteArticleImage($article->getID(), $tag->getID());
            }

            $tag->copyFrom($this->getTag($tag->getID()));
            $tag->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $tag;
    }

    // iTag = INSERT INTO e_tag (name) VALUES (?)
    private function insertTag(TagMySQL $tag) {

        try {
            $this->iTag->bindValue(1, $tag->getName());
            $this->iTag->execute();

            $ID = (int) $this->connection->lastInsertId();

            // save relationship
            foreach ($tag->getArticles() as $article) {
                $this->insertArticleImage($article->getID(), $ID);
            }

            $tag->copyFrom($this->getTag($ID));
            $tag->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $tag;
    }

    public function removeTag(TagMySQL $tag) {
        return $this->deleteTag($tag);
    }

    // dTag = DELETE FROM e_tag WHERE ID=?
    private function deleteTag(TagMySQL $tag) {

        try {
            $this->dTag->bindValue(1, $tag->getID());
            $this->dTag->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $tag;
    }

    // ========================================================================
    // ArticleImage
    // ========================================================================
    // iArticleImage = INSERT INTO r_article_image (articleID, imageID) VALUES (?, ?)
    private function insertArticleImage($articleID, $imageID) {

        try {
            $this->iArticleImage->bindValue(1, $articleID);
            $this->iArticleImage->bindValue(2, $imageID);
            $this->iArticleImage->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $this;
    }

    // dArticleImage = DELETE FROM r_article_image WHERE articleID=? AND imageID=?
    private function deleteArticleImage($articleID, $imageID) {

        try {
            $this->dArticleImage->bindValue(1, $articleID);
            $this->dArticleImage->bindValue(2, $imageID);
            $this->dArticleImage->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $this;
    }

    // ========================================================================
    // ArticleTag
    // ========================================================================
    // iArticleTag = INSERT INTO r_article_tag (articleID, tagID) VALUES (?, ?)
    private function insertArticleTag($articleID, $tagID) {

        try {
            $this->iArticleTag->bindValue(1, $articleID);
            $this->iArticleTag->bindValue(2, $tagID);
            $this->iArticleTag->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $this;
    }

    // dArticleTag = DELETE FROM r_article_tag WHERE articleID=? AND tagID=?
    private function deleteArticleTag($articleID, $tagID) {

        try {
            $this->dArticleTag->bindValue(1, $articleID);
            $this->dArticleTag->bindValue(2, $tagID);
            $this->dArticleTag->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $this;
    }

}
