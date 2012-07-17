<?php $view->extend('::base.html.php') ?>
<?php echo $view->render('::nav-list-class.html.php', array('slot_name' => 'nav-list-li-class-home')); ?>

<?php $view['slots']->set('title', 'Holidays Manager (beta)') ?>

<?php $view['slots']->start('main-widget') ?>

<div class="widget">

    <div class="widget-header">
        <i class="icon-file"></i>
        <h3><?php echo $view['translator']->trans('Overview'); ?></h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">
        <div class="stats">

            <div class="stat">
                <span class="stat-value"><?php echo round($holiday_days_done / 8, 2); ?></span>									
                Ferie svolte (gg)
            </div> <!-- /stat -->

            <div class="stat">
                <span class="stat-value"><?php echo round($extra_hours, 2); ?></span>									
                Straordinari (hh)
            </div> <!-- /stat -->

            <div class="stat">
                <span class="stat-value"><?php echo round($extra_hours / 8, 2); ?></span>									
                Straordinari (gg)
            </div> <!-- /stat -->


        </div> <!-- /stats -->

        <div class="stats" id="chart-stats">

            <div class="stat stat-time">
                <span class="stat-value"><?php echo round($holidays_days, 2); ?></span>									
                Ferie accumulate (gg)
            </div> <!-- /stat -->

        </div>
    </div> <!-- /widget-content -->

</div> <!-- /widget -->
<?php $view['slots']->stop('main-widget') ?>
