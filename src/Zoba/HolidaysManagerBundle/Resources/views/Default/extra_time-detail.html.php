<?php $ts = $extra_time->getDate()->getTimestamp(); ?>

<h2>Straordinario #<?php echo $extra_time->getId().' - '.date('Y', $ts); ?></h2>
<p>
    <span>Giorno lavoro:</span>
    <?php echo date('l - d F', $ts); ?>
</p>
<p>
    <span>Ore lavoro extra:</span>
    <?php echo $view->escape($extra_time->getHours()); ?>
</p>
<p>
    <span>Note:</span>
    <?php echo $view->escape($extra_time->getDescription()); ?>
</p>

