<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 16:05:05
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Front\Article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18809550d88a1ac1f76-17993978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7786c426ccd4c9bedc8dd82d124acebb0c29f385' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Front\\Article.tpl',
      1 => 1425139200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18809550d88a1ac1f76-17993978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550d88a1d9d376_20445140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d88a1d9d376_20445140')) {function content_550d88a1d9d376_20445140($_smarty_tpl) {?>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
 <small><?php echo $_smarty_tpl->tpl_vars['article']->value->getDate()->getDayOfMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value->getDate()->getMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value->getDate()->getYear();?>
</small></h1>
        </div>
        <div>
            <p><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['article']->value->getText(), 'UTF-8', 'HTML-ENTITIES');?>
</p>
        </div>
    </div>
</div><?php }} ?>
