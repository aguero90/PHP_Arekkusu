
<div class="container">

    {if isset($inserted)}
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>Inserimento effettuato con successo!</p>
        </div>
    {/if}

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
</div>