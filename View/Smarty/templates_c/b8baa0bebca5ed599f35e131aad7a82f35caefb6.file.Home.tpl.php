<?php /* Smarty version Smarty-3.1.17, created on 2015-03-15 15:57:09
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Front\Home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2140755059dc5a906d9-93985378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8baa0bebca5ed599f35e131aad7a82f35caefb6' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Front\\Home.tpl',
      1 => 1426430607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140755059dc5a906d9-93985378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55059dc5abc263_76835131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55059dc5abc263_76835131')) {function content_55059dc5abc263_76835131($_smarty_tpl) {?>
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
