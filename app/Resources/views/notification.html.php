<?php if ($view['session']->hasFlash('notice')): ?>
    <?php $view['slots']->start('notify') ?>
    <div class="notification sticky hide">
        <p>
            <?php echo $view['session']->getFlash('notice') ?>
        </p>
        <a class="close" href="javascript:">
            <img src="<?php echo $view['assets']->getUrl('notify/images/icon-close.png') ?>" />
        </a>
    </div>
    <?php $view['slots']->stop('notify') ?>

    <?php $view['slots']->start('javascript_code') ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.notification.sticky').notify();
        });
    </script>
    <?php $view['slots']->stop('javascript_code') ?>
<?php endif; ?>