<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 17:24:46
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Back\InsertTag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30316550d9b4e2631b2-91889017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769f31187db373b7855e9f92fd7a2f1fe1ea9b25' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Back\\InsertTag.tpl',
      1 => 1424889920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30316550d9b4e2631b2-91889017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inserted' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550d9b4e356db8_34523573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d9b4e356db8_34523573')) {function content_550d9b4e356db8_34523573($_smarty_tpl) {?>
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
            <li class="active">Tag</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="2">

            <div class="form-group">
                <label for="name" class="col-sm-1 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome tag" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="it" value="1">Inserisci</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>
