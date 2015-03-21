<?php /* Smarty version Smarty-3.1.17, created on 2015-03-21 09:02:31
         compiled from "C:\wamp\www\PHP_Arekkusu\View\Smarty\Templates\Back\EditSelectedArticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11073550d33a739ca87-19633794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42941657c29f3bf2a1e2e8e3d3c3dcbaa387a828' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Arekkusu\\View\\Smarty\\Templates\\Back\\EditSelectedArticle.tpl',
      1 => 1426928072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11073550d33a739ca87-19633794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'images' => 0,
    'image' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_550d33a74ba7b1_66786861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d33a74ba7b1_66786861')) {function content_550d33a74ba7b1_66786861($_smarty_tpl) {?>
<div class="container">

    <div class="row">
        <ol class="breadcrumb">
            <li>Gestione</li>
            <li>Modifica</li>
            <li>Articolo</li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="6">

            <div class="form-group">
                <label for="title" class="col-sm-1 control-label">Titolo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
" placeholder="Titolo" name="title" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="text" class="col-sm-1 control-label">Testo</label>
                <div class="col-sm-10">
                    <textarea id="text" class="form-control textEditor" name="text" rows="10"><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['article']->value->getText(), 'UTF-8', 'HTML-ENTITIES');?>
</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label">Immagine</label>
                <div class="col-sm-10">

                    <?php if (count($_smarty_tpl->tpl_vars['images']->value)>0) {?>
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
                                                        <div class="thumbnail selectImage <?php if ($_smarty_tpl->tpl_vars['article']->value->hasImage($_smarty_tpl->tpl_vars['image']->value)) {?>imageSelected<?php }?>}">
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
                        <div class="row" id="selectedImagesThumbnail">
                            <?php if ($_smarty_tpl->tpl_vars['article']->value->hasImage($_smarty_tpl->tpl_vars['image']->value)) {?>
                                <div class='col-xs-6 col-md-3' data-imageID='<?php echo $_smarty_tpl->tpl_vars['image']->value->getID;?>
'>
                                    <div class='thumbnail selectImage'>
                                        <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value->getFalseName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->getTrueName();?>
" data-ID="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
"/>
                                    </div>>
                                </div>
                            <?php }?>
                        </div>

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
" <?php if ($_smarty_tpl->tpl_vars['article']->value->hasTag($_smarty_tpl->tpl_vars['tag']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value->getName();?>
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
                    <button type="submit" class="btn btn-primary" name="ea" value="1">Modifica</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>
