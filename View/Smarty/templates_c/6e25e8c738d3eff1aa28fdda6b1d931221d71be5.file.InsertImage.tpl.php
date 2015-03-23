<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 17:24:44
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Back\InsertImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:799550d9b4c863089-39017948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e25e8c738d3eff1aa28fdda6b1d931221d71be5' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Back\\InsertImage.tpl',
      1 => 1426925611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799550d9b4c863089-39017948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inserted' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550d9b4c956c86_59318997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d9b4c956c86_59318997')) {function content_550d9b4c956c86_59318997($_smarty_tpl) {?>
<div class="container">

    <?php if (isset($_smarty_tpl->tpl_vars['inserted']->value)) {?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>Inserimento effettuato con successo!</p>
        </div>
    <?php }?>

    <div class="row">
        <ol class="breadcrumb">
            <li>Gestione</li>
            <li>Inserisci</li>
            <li class="active">Immagine</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="1">

            <div class="form-group">
                <label for="image" class="col-sm-1 control-label">Immagine</label>
                <div class="col-sm-10">
                    <input type="file" class="filestyle" data-size="sm" id="image" name="image">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="ii" value="1">Inserisci</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>
