<?php if(isset($mesages["mailerOK"])):?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Wysłano!</strong> <?php echo($mesages["mailerOK"])?>
    </div>
<?php endif; ?>
<?php if(isset($mesages["mailerERROR"])):?>
<div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Błąd!</strong> <?php echo($mesages["mailerERROR"])?>
</div>
<?php endif; ?>

<form method="post" action="" class="form-horizontal">
    <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input type="text" id="email" placeholder="Email">
            <?php if(isset($mesages["email"])):?>
            <div class="alert alert-error">
                <strong>Błąd!</strong> <?php echo($mesages["email"])?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="topic">Temat</label>
        <div class="controls">
            <input type="text" id="topic" placeholder="Temat">
            <?php if(isset($mesages["email"])):?>
            <div class="alert alert-error">
                <strong>Błąd!</strong> <?php echo($mesages["topic"])?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="note">Treść</label>
        <div class="controls">
            <textarea id="note" placeholder="Treść"></textarea>
            <?php if(isset($mesages["email"])):?>
            <div class="alert alert-error">
                <strong>Błąd!</strong> <?php echo($mesages["note"])?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Wyślij</button>
        </div>
    </div>
</form>