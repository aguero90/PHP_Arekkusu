<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 08:24:11
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Back\DeleteArticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28265550c79ae067931-79307827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ce098b4cfa7660f28d185a6d5d792dd046203a' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Back\\DeleteArticle.tpl',
      1 => 1426925687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28265550c79ae067931-79307827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550c79ae0a4f95_99148450',
  'variables' => 
  array (
    'deleted' => 0,
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c79ae0a4f95_99148450')) {function content_550c79ae0a4f95_99148450($_smarty_tpl) {?>
<div class="container">

    <?php if (isset($_smarty_tpl->tpl_vars['deleted']->value)) {?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>Eliminazione effettuata con successo!</p>
        </div>
    <?php }?>

    <div class="row">
        <ol class="breadcrumb">
            <li>Gestione</li>
            <li>Rimuovi</li>
            <li class="active">Articolo</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="3">

            <div class="form-group">
                <label class="col-sm-1 control-label">Articolo</label>
                <div class="col-sm-10">
                    <?php if (count($_smarty_tpl->tpl_vars['articles']->value)>0) {?>
                        <select class="form-control" name="aid">
                            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['article']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
</option>
                            <?php } ?>
                        </select>
                    <?php } else { ?>
                        <p>Non esistono Articoli</p>
                    <?php }?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="da" value="1">Rimuovi</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>
