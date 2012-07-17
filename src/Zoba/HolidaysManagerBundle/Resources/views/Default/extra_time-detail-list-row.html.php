<?php $ts = $extra_time->getDate()->getTimestamp(); ?>
<li>
    <div class="news-item-detail">										
        <a href="javascript:;" class="news-item-title"><?php echo $view['translator']->trans('Extratime'); ?> #<?php echo $index . ' - ' . date('Y', $ts); ?></a>
        <p class="news-item-preview">
            <?php if ($extra_time->getIsHoliday()): ?>
                <?php echo $view['translator']->trans('Hours of holidays done in this day: %hours%', array('%hours%' => $view->escape($extra_time->getHours()))); ?>
            <?php else: ?>
                <?php echo $view['translator']->trans('Hours of extra work done in this day: %hours%', array('%hours%' => $view->escape($extra_time->getHours()))); ?>
            <?php endif; ?>
        </p>
    </div>

    <div class="news-item-date">
        <span class="news-item-day"><?php echo date('d', $ts); ?></span>
        <span class="news-item-month"><?php echo date('l', $ts); ?></span>
        <span class="news-item-year"><?php echo date('M - Y', $ts); ?></span>
    </div>
</li>