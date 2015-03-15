<?php /* Smarty version Smarty-3.1.17, created on 2015-02-27 08:41:26
         compiled from "C:\wamp\www\Arekkusu\View\Smarty\Templates\Back\InsertArticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325754ee1dbb8ccc21-88690645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8288f2a13b67041fde2849e84d74d4009da7e1dc' => 
    array (
      0 => 'C:\\wamp\\www\\Arekkusu\\View\\Smarty\\Templates\\Back\\InsertArticle.tpl',
      1 => 1425026484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325754ee1dbb8ccc21-88690645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54ee1dbb8d2c36_78296557',
  'variables' => 
  array (
    'tags' => 0,
    'images' => 0,
    'image' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ee1dbb8d2c36_78296557')) {function content_54ee1dbb8d2c36_78296557($_smarty_tpl) {?>
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li>Gestione</li>
            <li>Inserisci</li>
            <li class="active">Articolo</li>
        </ol>
    </div>

    <div class="row">
        <form action="index.php" method="POST" class="form-horizontal imageSelectionForm">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="0">

            <div class="form-group">
                <label for="title" class="col-sm-1 control-label">Titolo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" placeholder="Titolo" name="title" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="text" class="col-sm-1 control-label">Testo</label>
                <div class="col-sm-10">
                    <textarea id="text" class="form-control textEditor" name="text" rows="10"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label">Immagine</label>
                <div class="col-sm-10">

                    <?php if (count($_smarty_tpl->tpl_vars['tags']->value)>0) {?>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Scegli...</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Seleziona le immagini</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Thumbnail -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                                                    <div class="col-xs-6 col-md-3">
                                                        <div class="thumbnail selectImage">
                                                            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value->getFalseName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->getTrueName();?>
" data-ID="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
"/>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="imageSelectionOkButton" type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /Modal -->

                        <!-- Thumbnail per immagini scelte -->
                        <!-- sarà riempito da main.js -->
                        <div class="row" id="selectedImagesThumbnail"></div>

                    <?php } else { ?>
                        <p>Non esistono immagini</p>
                    <?php }?>

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label">Tag</label>
                <div class="col-sm-10">
                    <?php if (count($_smarty_tpl->tpl_vars['tags']->value)>0) {?>
                        <select class="form-control multiselect-with-plugin" name="tag[]" multiple>
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
                        <p>Non esistono tag</p>
                    <?php }?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="ia" value="1">Inserisci</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }} ?>
