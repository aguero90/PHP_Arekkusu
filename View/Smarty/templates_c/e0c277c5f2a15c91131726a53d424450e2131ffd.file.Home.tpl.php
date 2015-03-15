<?php /* Smarty version Smarty-3.1.17, created on 2015-02-28 16:22:28
         compiled from "C:\wamp\www\Arekkusu\View\Smarty\Templates\Front\Home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:999454ee204e5294e9-31200939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c277c5f2a15c91131726a53d424450e2131ffd' => 
    array (
      0 => 'C:\\wamp\\www\\Arekkusu\\View\\Smarty\\Templates\\Front\\Home.tpl',
      1 => 1425140546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '999454ee204e5294e9-31200939',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54ee204e52ea21_03041487',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ee204e52ea21_03041487')) {function content_54ee204e52ea21_03041487($_smarty_tpl) {?>
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
