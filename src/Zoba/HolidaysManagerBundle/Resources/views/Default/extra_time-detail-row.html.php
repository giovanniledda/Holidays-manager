<?php $ts = $extra_time->getDate()->getTimestamp(); ?>
<tr>
    <td>#<?php echo $index . ' - ' . date('Y', $ts); ?></td>
    <td><?php echo date('l - d F', $ts); ?></td>
    <td><?php echo $view->escape($extra_time->getHours()); ?></td>
    <td class="td-actions">
        <a href="javascript:;" class="btn btn-small btn-warning">
            <i class="btn-icon-only icon-cog"></i>										
        </a>

        <a href="<?php echo $view['router']->generate('remove_extra_time', array('id' => $extra_time->getId())); ?>" class="btn btn-small" title="<?php echo $view['translator']->trans('Remove this extratime'); ?>">
            <i class="btn-icon-only icon-remove"></i>										
        </a>
    </td>
</tr>