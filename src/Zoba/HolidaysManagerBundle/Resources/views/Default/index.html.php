<?php $view->extend('::base.html.php') ?>
<?php echo $view->render('::nav-list-class.html.php', array('slot_name' => 'nav-list-li-class-home')); ?>

<?php $view['slots']->set('title', 'Holidays Manager (beta)') ?>

<?php $view['slots']->start('body') ?>
<div class="hero-unit">
    <h2>Totale ferie</h2>
    <p>
        Hai accumulato ferie per un totale di <?php echo round($holidays_days, 2); ?> giorni
    </p>
</div>

<?php $view['slots']->stop('body') ?>

<?php $view['slots']->start('javascript_code'); ?>
<?php $view['slots']->stop('javascript_code'); ?>