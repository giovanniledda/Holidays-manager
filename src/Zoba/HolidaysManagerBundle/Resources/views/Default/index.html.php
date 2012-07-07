<?php $view->extend('::base.html.php') ?>
<?php echo $view->render('::nav-list-class.html.php', array('slot_name' => 'nav-list-li-class-home')); ?>

<?php $view['slots']->set('title', 'Holidays Manager (beta)') ?>

<?php $view['slots']->start('body') ?>

<?php $view['slots']->stop('body') ?>

<?php $view['slots']->start('javascript_code'); ?>
<?php $view['slots']->stop('javascript_code'); ?>