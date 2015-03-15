<?php /* Smarty version Smarty-3.1.17, created on 2015-02-28 16:00:51
         compiled from "C:\wamp\www\Arekkusu\View\Smarty\Templates\Front\ArticleList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1829654f02590c990e3-41110129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd02d45704d59c9a4c1a39524a2a11f067b1db95f' => 
    array (
      0 => 'C:\\wamp\\www\\Arekkusu\\View\\Smarty\\Templates\\Front\\ArticleList.tpl',
      1 => 1425138739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1829654f02590c990e3-41110129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54f02590d03bc3_08689319',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f02590d03bc3_08689319')) {function content_54f02590d03bc3_08689319($_smarty_tpl) {?>ArticleList.tpl

<div class="container">
    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
        <div class="jumbotron">
            <h1><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
</h1>
            <!-- <p><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['article']->value->getText(), 'UTF-8', 'HTML-ENTITIES');?>
</p> -->
            <p>
                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value->getTags(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['tag']->value->getName();?>

                <?php } ?>
            </p>
            <p><a class="btn btn-primary btn-lg" href="index.php?s=2&p=<?php echo $_smarty_tpl->tpl_vars['article']->value->getID();?>
" role="button">Leggi</a></p>
        </div>
    <?php } ?>
</div><?php }} ?>
