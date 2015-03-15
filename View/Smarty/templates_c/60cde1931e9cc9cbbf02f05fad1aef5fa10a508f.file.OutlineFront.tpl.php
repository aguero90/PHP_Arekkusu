<?php /* Smarty version Smarty-3.1.17, created on 2015-02-26 09:29:57
         compiled from "C:\wamp\www\Arekkusu\View\Smarty\Templates\Front\OutlineFront.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1522154ee204e4b2105-86811831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60cde1931e9cc9cbbf02f05fad1aef5fa10a508f' => 
    array (
      0 => 'C:\\wamp\\www\\Arekkusu\\View\\Smarty\\Templates\\Front\\OutlineFront.tpl',
      1 => 1424942978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1522154ee204e4b2105-86811831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54ee204e50f0b0_28861418',
  'variables' => 
  array (
    'app_name' => 0,
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ee204e50f0b0_28861418')) {function content_54ee204e50f0b0_28861418($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
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
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src=""  />
                    </a>
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

        <!-- BODY
        ==================================================================== -->
        <div id="outlineBody" class="full-height">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contentTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        <!-- FOOTER
        ==================================================================== -->
        <div class="container-fluid">
            <hr />
            <footer id="outlineFooter">
                <p>&copy; Company 2015</p>
            </footer>
        </div>

        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="View/Js/Vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="View/Js/Vendor/bootstrap.min.js"></script>
        <script src="View/Js/Vendor/bootstrap-multiselect.js"></script>
        <script src="View/Js/Vendor/bootstrap-filestyle.js"></script>
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
</html><?php }} ?>