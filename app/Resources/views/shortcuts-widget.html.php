<div class="widget">

    <div class="widget-header">
        <i class="icon-bookmark"></i>
        <h3><?php echo $view['translator']->trans('Quick Shortcuts'); ?></h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">

        <div class="shortcuts">
            <a href="<?php echo $view['router']->generate('create_extra_time'); ?>" class="shortcut">
                <i class="shortcut-icon icon-plus-sign"></i>
                <span class="shortcut-label">
                    <?php echo $view['translator']->trans('Add an Extratime'); ?>
                </span>
            </a>

            <a href="<?php echo $view['router']->generate('clearall_extra_time'); ?>" class="shortcut">
                <i class="shortcut-icon icon-remove-circle"></i>
                <span class="shortcut-label">
                    <?php echo $view['translator']->trans('Clear all Extratimes'); ?>
                </span>	
            </a>
        </div> <!-- /shortcuts -->	

    </div> <!-- /widget-content -->

</div> <!-- /widget -->


