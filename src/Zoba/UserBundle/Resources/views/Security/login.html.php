<?php $view->extend('::base.html.php') ?>

<?php $view['slots']->start('main-widget') ?>

<?php if ($error): ?>
    <div><?php echo $error->getMessage() ?></div>
<?php endif; ?>

<form class="well form-vertical" action="<?php echo $view['router']->generate('login_check') ?>" method="post">

    <div class="control-group">
        <label for="username">Username:</label>
        <div class="controls">
            <input type="text" id="username" name="_username" value="<?php echo $last_username ?>" />
        </div>
    </div>

    <div class="control-group">
        <label for="password">Password:</label>
        <div class="controls">
            <input type="password" id="password" name="_password" />
        </div>
    </div>

    <!--
        Se si desidera controllare l'URL a cui l'utente viene rinviato in caso di successo (maggiori dettagli qui sotto)
        <input type="hidden" name="_target_path" value="/account" />
    -->

    <div class="form-actions">
        <input class="btn btn-primary" type="submit" name="login" value="Invia"/>
    </div>
</form>
<?php $view['slots']->stop('main-widget') ?>
