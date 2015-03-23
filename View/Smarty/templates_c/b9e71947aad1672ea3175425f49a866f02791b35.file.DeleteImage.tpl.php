<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 17:24:49
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Back\DeleteImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1077550d9b51806e14-09161291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e71947aad1672ea3175425f49a866f02791b35' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Back\\DeleteImage.tpl',
      1 => 1426925693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077550d9b51806e14-09161291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'deleted' => 0,
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550d9b51aa5313_81998922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d9b51aa5313_81998922')) {function content_550d9b51aa5313_81998922($_smarty_tpl) {?>

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
            <li class="active">Immagine</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="4">

            <div class="form-group">
                <label class="col-sm-1 control-label">Immagine</label>
                <div class="col-sm-10">
                    <?php if (count($_smarty_tpl->tpl_vars['images']->value)>0) {?>
                        <select class="form-control" name="iid">
                            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getTrueName();?>
</option>
                            <?php } ?>
                        </select>
                    <?php } else { ?>
                        <p>Non esistono Immagini</p>
                    <?php }?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="di" value="1">Rimuovi</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>
