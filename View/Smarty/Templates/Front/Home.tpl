
<!-- Preview articoli -->
<div class="container full-height">
    <!-- Example row of columns -->
    <div class="row">

        <h1 class="text-center">Articoli</h1>
        <br />
        <br />

        {foreach $articles as $article}
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="#" alt="NetBeans e GitHub">
                    <div class="caption">
                        <h3>{$article->getTitle()}</h3>
                        <p>Prime parole articolo</p>
                        <p class="text-right">
                            <a href="index.php?s=2&p={$article->getID()}" class="btn btn-default" role="button">Vai all'articolo &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div> <!-- /container -->