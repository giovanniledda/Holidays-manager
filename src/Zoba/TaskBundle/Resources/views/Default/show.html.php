<?php $view->extend('::base.html.php'); ?>

<?php $view['slots']->start('body'); ?>

<div class="hero-unit">
    <h1>Task #<?php echo $task->getId(); ?></h1>
    <p><?php echo $view->escape($task->getDescription()); ?></p>
    <p>
        <a class="btn btn-primary btn-large" href="<?php echo $view['router']->generate('task_new'); ?>">
            Creane un altro!
        </a>
    </p>
</div>
<?php $view['slots']->stop('body'); ?>

