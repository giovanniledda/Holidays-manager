<?php $view->extend('::base.html.php'); ?>
<?php echo $view->render('::nav-list-class.html.php', array('slot_name' => 'nav-list-li-class-home')); ?>

<?php $view['slots']->start('body'); ?>

<div class="hero-unit">
    <?php echo $view->render('ZobaHolidaysManagerBundle:Default:extra_time-detail.html.php', array('extra_time' => $extra_time)); ?>
    <p>
        <a class="btn btn-primary btn-large" href="<?php echo $view['router']->generate('create_extra_time'); ?>">
            Creane un altro!
        </a>
    </p>
</div>
<?php $view['slots']->stop('body'); ?>

