
<!-- HEADER
==================================================================== -->
<div class="jumbotron full-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 animated fadeInLeft">
                <img src="View/Img/logo_HTML5.png" alt="Me" class="img-circle img-responsive">
            </div>
            <div class="col-md-8 col-md-offset-2 animated fadeInDown">
                <h1>Arekkusu90</h1>
                <br />
                <p>
                    Sono un laureando presso la facolt&agrave; d'informatica della citt&agrave; de L'Aquila.
                    Appassionato di tutte le tecnologie riguardanti il web sia dal punto di vista dello sviluppo che da quello del design.
                </p>
                <p>
                    Questa pagina nasce con l'intento di accogliere tutte le mie prove, impressioni,
                    esperimenti e commenti sui vari aspetti dello sviluppo web.
                </p>
            </div>
        </div>
    </div>
</div>


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