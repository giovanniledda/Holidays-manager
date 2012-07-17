<div class="subnavbar">

    <div class="subnavbar-inner">

        <div class="container">

            <ul class="mainnav">

                <li <?php $view['slots']->output('nav-list-li-class-home'); ?>>
                    <a href="<?php echo $view['router']->generate('holidays_index'); ?>">
                        <i class="icon-home"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li <?php $view['slots']->output('nav-list-li-class-show-all'); ?>>
                    <a href="<?php echo $view['router']->generate('showall_extra_time'); ?>">
                        <i class="icon-list-alt"></i>
                        <span><?php echo $view['translator']->trans('Extratimes list'); ?></span>
                    </a>
                </li>
            </ul>

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->