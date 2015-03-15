ArticleList.tpl

<div class="container">
    {foreach $articles as $article}
        <div class="jumbotron">
            <h1>{$article->getTitle()}</h1>
            <!-- <p>{$article->getText()|unescape:"htmlall"}</p> -->
            <p>
                {foreach $article->getTags() as $tag}
                    {$tag->getName()}
                {/foreach}
            </p>
            <p><a class="btn btn-primary btn-lg" href="index.php?s=2&p={$article->getID()}" role="button">Leggi</a></p>
        </div>
    {/foreach}
</div>