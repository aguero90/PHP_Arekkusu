<?php /* Smarty version Smarty-3.1.17, created on 2015-03-20 19:16:40
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Front\Home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2140755059dc5a906d9-93985378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8baa0bebca5ed599f35e131aad7a82f35caefb6' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Front\\Home.tpl',
      1 => 1426878978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140755059dc5a906d9-93985378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55059dc5abc263_76835131',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55059dc5abc263_76835131')) {function content_55059dc5abc263_76835131($_smarty_tpl) {?>
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

        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="#" alt="NetBeans e GitHub">
                    <div class="caption">
                        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
</h3>
                        <p>Prime parole articolo</p>
                        <p class="text-right">
                            <a href="index.php?s=2&p=<?php echo $_smarty_tpl->tpl_vars['article']->value->getID();?>
" class="btn btn-default" role="button">Vai all'articolo &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div> <!-- /container --><?php }} ?>
