

<div class="container">

    {if isset($deleted)}
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>Eliminazione effettuata con successo!</p>
        </div>
    {/if}

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
                    {if $tags|@count > 0}
                        <select class="form-control" name="tid">
                            {foreach $tags as $tag}
                                <option value="{$tag->getID()}">{$tag->getName()}</option>
                            {/foreach}
                        </select>
                    {else}
                        <p>Non esistono Tag</p>
                    {/if}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="dt" value="1">Rimuovi</button>
                </div>
            </div>
        </form>
    </div>
</div>