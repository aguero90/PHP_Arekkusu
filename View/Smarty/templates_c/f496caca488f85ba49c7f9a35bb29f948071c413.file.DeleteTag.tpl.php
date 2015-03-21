<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 08:24:13
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Back\DeleteTag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28424550c7ff06e6493-50588109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f496caca488f85ba49c7f9a35bb29f948071c413' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Back\\DeleteTag.tpl',
      1 => 1426925697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28424550c7ff06e6493-50588109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550c7ff0725717_94444476',
  'variables' => 
  array (
    'deleted' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c7ff0725717_94444476')) {function content_550c7ff0725717_94444476($_smarty_tpl) {?>

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
            <li class="active">Tag</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="5">

            <div class="form-group">
                <label class="col-sm-1 control-label">Tag</label>
                <div class="col-sm-10">
                    <?php if (count($_smarty_tpl->tpl_vars['tags']->value)>0) {?>
                        <select class="form-control" name="tid">
                            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value->getName();?>
</option>
                            <?php } ?>
                        </select>
                    <?php } else { ?>
                        <p>Non esistono Tag</p>
                    <?php }?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="dt" value="1">Rimuovi</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>
