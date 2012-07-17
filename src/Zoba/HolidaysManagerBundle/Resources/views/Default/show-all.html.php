<?php $view->extend('::base.html.php') ?>
<?php echo $view->render('::nav-list-class.html.php', array('slot_name' => 'nav-list-li-class-show-all')); ?>

<?php $view['slots']->set('title', 'Holidays Manager') ?>
<?php $view['slots']->set('section-title', 'Elenco straordinari') ?>

<?php echo $view->render('::notification.html.php'); ?>

<?php $view['slots']->start('main-widget') ?>

<div class="widget widget-table action-table">


    <div class="widget-header">
        <i class="icon-th-list"></i>
        <h3><?php echo $view['translator']->trans('Extratimes list'); ?></h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th><?php echo $view['translator']->trans('Extratime'); ?></th>
                    <th><?php echo $view['translator']->trans('Day'); ?></th>
                    <th><?php echo $view['translator']->trans('Hours'); ?></th>
                    <th class="td-actions"><?php echo $view['translator']->trans('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $index = 1; ?>
                <?php foreach ($extra_times as $extra_time): ?>
                    <?php echo $view->render('ZobaHolidaysManagerBundle:Default:extra_time-detail-row.html.php', array('extra_time' => $extra_time, 'index' => $index++)); ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div> <!-- /widget-content -->

</div> <!-- /widget -->

<?php $view['slots']->stop('main-widget') ?>

