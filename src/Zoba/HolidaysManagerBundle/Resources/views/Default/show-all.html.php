<?php $view->extend('::base.html.php') ?>
<?php echo $view->render('::nav-list-class.html.php', array('slot_name' => 'nav-list-li-class-show-all')); ?>

<?php $view['slots']->set('title', 'Holidays Manager') ?>

<?php $view['slots']->start('body') ?>
<div class="row">
    <?php $index = 1; ?>
    <?php foreach ($extra_times as $extra_time): ?>
        <div class="span4 hero-unit">
            <?php echo $view->render('ZobaHolidaysManagerBundle:Default:extra_time-detail.html.php', array('extra_time' => $extra_time, 'index' => $index++)); ?>
        </div>
    <?php endforeach; ?>
</div>    
<?php $view['slots']->stop('body') ?>

