<?php $ts = $extra_time->getDate()->getTimestamp(); ?>
<tr>
    <td>#<?php echo $index . ' - ' . strftime('%Y', $ts); ?></td>
    <td><?php echo strftime('%A - %d %b %y', $ts); ?></td>
    <td><?php echo $view->escape($extra_time->getHours()); ?></td>
    <td class="td-actions">
        <a href="<?php echo $view['router']->generate('show_extra_time', array('id' => $extra_time->getId())); ?>" class="btn btn-small btn-warning" title="<?php echo $view['translator']->trans('View details'); ?>">
            <i class="btn-icon-only icon-cog"></i>										
        </a>

        <a onclick="javascript: return confirm('<?php echo $view['translator']->trans('Are you sure?'); ?>');" href="<?php echo $view['router']->generate('remove_extra_time', array('id' => $extra_time->getId())); ?>" class="btn btn-small" title="<?php echo $view['translator']->trans('Remove this extratime'); ?>">
            <i class="btn-icon-only icon-remove"></i>										
        </a>
    </td>
</tr>