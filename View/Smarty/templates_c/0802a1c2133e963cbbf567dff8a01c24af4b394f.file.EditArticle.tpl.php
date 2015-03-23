<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 16:02:18
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Back\EditArticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23622550d64b5943550-81353350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0802a1c2133e963cbbf567dff8a01c24af4b394f' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Back\\EditArticle.tpl',
      1 => 1426950097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23622550d64b5943550-81353350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550d64b5bf2df4_99373369',
  'variables' => 
  array (
    'edited' => 0,
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d64b5bf2df4_99373369')) {function content_550d64b5bf2df4_99373369($_smarty_tpl) {?>
<div class="container">

    <?php if (isset($_smarty_tpl->tpl_vars['edited']->value)) {?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>La modifica &egrave; stata effettuata con successo!</p>
        </div>
    <?php }?>

    <div class="row">
        <ol class="breadcrumb">
            <li>Gestione</li>
            <li>Modifica</li>
            <li class="active">Articolo</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="6">

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
                    <button type="submit" class="btn btn-primary" name="em" value="1">Modifica</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>
