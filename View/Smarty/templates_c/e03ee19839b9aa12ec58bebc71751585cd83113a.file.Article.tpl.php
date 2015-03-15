<?php /* Smarty version Smarty-3.1.17, created on 2015-02-28 16:00:03
         compiled from "C:\wamp\www\Arekkusu\View\Smarty\Templates\Front\Article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:995054f1e40f0a4b07-43266268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03ee19839b9aa12ec58bebc71751585cd83113a' => 
    array (
      0 => 'C:\\wamp\\www\\Arekkusu\\View\\Smarty\\Templates\\Front\\Article.tpl',
      1 => 1425139200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995054f1e40f0a4b07-43266268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54f1e40f0e27e3_39841378',
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f1e40f0e27e3_39841378')) {function content_54f1e40f0e27e3_39841378($_smarty_tpl) {?>
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
