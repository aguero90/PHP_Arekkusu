<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{$app_name}</title>
        <meta name="description" content="My site">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="View/Css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="View/Css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="View/Css/bootstrap-multiselect.css">
        <link rel="stylesheet" type="text/css" href="View/Css/summernote.css">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="View/Css/animate.css">
        <link rel="stylesheet" type="text/css" href="View/Css/main.css">

        <!-- JS -->
        <script src="View/Js/Vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- NAVBAR
        ==================================================================== -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?s=0">Back</a></li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?s=1">Articoli</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- HEADER
        ==================================================================== -->

        <!-- BODY
        ==================================================================== -->
        <div id="outlineBody" class="container-fluid">
            <div class="row">
                <!-- LEFTCOL
                ============================================================ -->
                <div class="col-md-2">
                    <nav role="navigation">
                        <div class="page-header">
                            <h1><small>Inserisci</small></h1>
                        </div>
                        <ul class="nav nav-pills nav-stacked">

                            <li role="presentation" {if $subSectionActive == 0}class="active"{/if}><a href="index.php?s=0&ss=0">Articolo</a></li>
                            <li role="presentation" {if $subSectionActive == 1}class="active"{/if}><a href="index.php?s=0&ss=1">Immagine</a></li>
                            <li role="presentation" {if $subSectionActive == 2}class="active"{/if}><a href="index.php?s=0&ss=2">Tag</a></li>
                        </ul>

                        <div class="page-header">
                            <h1><small>Rimuovi</small></h1>
                        </div>
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation" {if $subSectionActive == 3}class="active"{/if}><a href="index.php?s=0&ss=3">Articolo</a></li>
                            <li role="presentation" {if $subSectionActive == 4}class="active"{/if}><a href="index.php?s=0&ss=4">Immagine</a></li>
                            <li role="presentation" {if $subSectionActive == 5}class="active"{/if}><a href="index.php?s=0&ss=5">Tag</a></li>
                        </ul>

                        <div class="page-header">
                            <h1><small>Modifica</small></h1>
                        </div>
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation" {if $subSectionActive == 6}class="active"{/if}><a href="index.php?s=0&ss=6">Articolo</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- CONTENT
                ============================================================ -->
                <div class="col-md-10">
                    {include file=$contentTemplate}
                </div>
            </div>
        </div>

        <!-- FOOTER
        ==================================================================== -->


        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="View/Js/Vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="View/Js/Vendor/bootstrap.min.js"></script>
        <script src="View/Js/Vendor/bootstrap-multiselect.js"></script>
        <script src="View/Js/Vendor/bootstrap-filestyle.js"></script>
        <script src="View/Js/Vendor/summernote.js"></script>
        <script src="View/Js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>

    </body>
</html>