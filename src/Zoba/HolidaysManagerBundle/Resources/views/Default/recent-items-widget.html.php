<div class="widget widget-nopad">

    <div class="widget-header">
        <i class="icon-list-alt"></i>
        <h3><?php echo $view['translator']->trans('Last updates'); ?></h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">

        <ul class="news-items">
            <?php $index = 1; ?>
            <?php foreach ($extra_times as $extra_time): ?>
                <?php echo $view->render('ZobaHolidaysManagerBundle:Default:extra_time-detail-list-row.html.php', array('extra_time' => $extra_time, 'index' => $index++)); ?>
            <?php endforeach; ?>
        </ul>

    </div> <!-- /widget-content -->

</div> <!-- /widget -->
