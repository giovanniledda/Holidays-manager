<?php $view->extend('::base.html.php'); ?>
<?php echo $view->render('::nav-list-class.html.php', array('slot_name' => 'nav-list-li-class-home')); ?>
<?php echo $view->render('::notification.html.php'); ?>

<?php $view['slots']->start('main-widget'); ?>

<div class="widget">
    <div class="widget-header">
        <i class="icon-eye-open"></i>
        <h3><?php echo $view['translator']->trans('Extratime detail'); ?></h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">
        <div class="hero-unit">
            <?php echo $view->render('ZobaHolidaysManagerBundle:Default:extra_time-detail-list-row.html.php', array('extra_time' => $extra_time, 'index' => 1)); ?>
            <p>
                <a class="btn btn-primary btn-large" href="<?php echo $view['router']->generate('create_extra_time'); ?>">
                    <?php echo $view['translator']->trans('Add a new extratime!'); ?>
                </a>
            </p>
        </div>
    </div>
</div>
<?php $view['slots']->stop('main-widget'); ?>

