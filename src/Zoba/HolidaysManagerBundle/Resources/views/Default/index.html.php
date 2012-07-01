<?php $view->extend('::base.html.php') ?>

<?php $view['slots']->set('title', 'Il mio fighissimo test') ?>

<?php $view['slots']->start('body') ?>

<?php $view['slots']->stop('body') ?>

<?php $view['slots']->start('javascript_code'); ?>
<?php $view['slots']->stop('javascript_code'); ?>