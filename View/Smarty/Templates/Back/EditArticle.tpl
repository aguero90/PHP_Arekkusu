
<div class="container">

    {if isset($edited)}
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>La modifica è stata effettuata con successo!</p>
        </div>
    {/if}

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
                    {if $articles|@count > 0}
                        <select class="form-control" name="aid">
                            {foreach $articles as $article}
                                <option value="{$article->getID()}">{$article->getTitle()}</option>
                            {/foreach}
                        </select>
                    {else}
                        <p>Non esistono Articoli</p>
                    {/if}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="ea" value="1">Modifica</button>
                </div>
            </div>
        </form>
    </div>
</div>