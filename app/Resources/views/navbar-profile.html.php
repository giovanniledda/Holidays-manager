<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="./">Holidays Manager</a>		

            <div class="nav-collapse">
                <ul class="nav pull-right">

                    <li class="dropdown">

                        <?php if ($app->getUser()): ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-user"></i> 
                                <?php echo $app->getUser()->getUsername(); ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $view['router']->generate('logout'); ?>">Sign Out</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo $view['router']->generate('login'); ?>" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-user"></i> Sign in
                                <i class="icon-hand-left"></i>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>

                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>

            </div><!--/.nav-collapse -->	

        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->