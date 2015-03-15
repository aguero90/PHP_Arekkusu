<?php /* Smarty version Smarty-3.1.17, created on 2015-02-25 19:30:08
         compiled from "C:\wamp\www\Arekkusu\View\Smarty\Templates\Back\InsertImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3097454ee1dbcc93577-84324876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8745cb51525cb3a779f26e0d8de80bb00a21f47b' => 
    array (
      0 => 'C:\\wamp\\www\\Arekkusu\\View\\Smarty\\Templates\\Back\\InsertImage.tpl',
      1 => 1424892600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3097454ee1dbcc93577-84324876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54ee1dbcccf0d4_88783890',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ee1dbcccf0d4_88783890')) {function content_54ee1dbcccf0d4_88783890($_smarty_tpl) {?>
<div class="container">
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
