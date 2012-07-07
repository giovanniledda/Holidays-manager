<?php $view->extend('::base.html.php'); ?>

<?php $view['slots']->start('body'); ?>

<div class="hero-unit">
    <h2>Straordinario #<?php echo $extra_time->getId(); ?></h2>
    <p>
        <span>Giorno lavoro:</span>
        <?php echo date('d/m/Y', $extra_time->getDate()->getTimestamp()); ?>
    </p>
    <p>
        <span>Ore lavoro extra:</span>
        <?php echo $view->escape($extra_time->getHours()); ?>
    </p>
    <p>
        <span>Note:</span>
        <?php echo $view->escape($extra_time->getDescription()); ?>
    </p>
    <p>
        <a class="btn btn-primary btn-large" href="<?php echo $view['router']->generate('create_extra_time'); ?>">
            Creane un altro!
        </a>
    </p>
</div>
<?php $view['slots']->stop('body'); ?>

