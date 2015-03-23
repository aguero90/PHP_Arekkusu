
<div class="container">

    <div class="row">
        <ol class="breadcrumb">
            <li>Gestione</li>
            <li>Modifica</li>
            <li>Articolo</li>
            <li class="active">{$article->getTitle()}</li>
        </ol>
    </div>

    <div class="row">
        <form class="form-horizontal" action="index.php" method="POST">

            <input type="hidden" name="s" value="0">
            <input type="hidden" name="ss" value="6">
            <input type="hidden" name="id" value="{$article->getID()}">

            <div class="form-group">
                <label for="title" class="col-sm-1 control-label">Titolo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" value="{$article->getTitle()}" placeholder="Titolo" name="title" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="text" class="col-sm-1 control-label">Testo</label>
                <div class="col-sm-10">
                    <textarea id="text" class="form-control textEditor" name="text" rows="10">{$article->getText()|unescape:"htmlall"}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label">Immagine</label>
                <div class="col-sm-10">

                    {if $images|@count > 0}
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
                                                {foreach $images as $image}
                                                    <div class="col-xs-6 col-md-3">
                                                        <div class="thumbnail selectImage {if $article->hasImage($image)}imageSelected{/if}">
                                                            <img src="uploads/{$image->getFalseName()}" alt="{$image->getTrueName()}" data-ID="{$image->getID()}"/>
                                                        </div>
                                                    </div>
                                                {/foreach}
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
                            {foreach $images as $image}
                                {if $article->hasImage($image)}
                                    <div class='col-xs-6 col-md-3' data-imageID='{$image->getID()}'>
                                        <div class='thumbnail selectImage'>
                                            <img src="uploads/{$image->getFalseName()}" alt="{$image->getTrueName()}" data-ID="{$image->getID()}"/>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>

                        {foreach $images as $image}
                            {if $article->hasImage($image)}
                                <input type="hidden" name="selectedImage[]" value="{$image->getID()}">
                            {/if}
                        {/foreach}

                    {else}
                        <p>Non esistono immagini</p>
                    {/if}

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label">Tag</label>
                <div class="col-sm-10">
                    {if $tags|@count > 0}
                        <select class="form-control multiselect-with-plugin" name="tag[]" multiple>
                            {foreach $tags as $tag}
                                <option value="{$tag->getID()}" {if $article->hasTag($tag)}selected="selected"{/if}>{$tag->getName()}</option>
                            {/foreach}
                        </select>
                    {else}
                        <p>Non esistono tag</p>
                    {/if}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="e" value="1">Modifica</button>
                </div>
            </div>
        </form>
    </div>
</div>