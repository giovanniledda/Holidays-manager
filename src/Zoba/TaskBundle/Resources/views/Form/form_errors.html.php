<?php if ($errors): ?>
    <?php foreach ($errors as $error): ?>
        <span class="help-inline">
            <?php echo get_class($error); ?>
        </span> 
    <?php endforeach; ?>
<?php endif; ?>