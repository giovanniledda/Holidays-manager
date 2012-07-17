<!DOCTYPE html>
<html>
    <?php echo $view->render('::head.html.php'); ?>
    <body>

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

                        <?php if ($app->getUser()): ?>
                            <li class="dropdown">					
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-share-alt"></i>
                                    <span>Actions</span>
                                    <b class="caret"></b>
                                </a>	

                                <ul class="dropdown-menu">
                                    <li <?php $view['slots']->output('nav-list-li-class-create'); ?>>
                                        <a href="<?php echo $view['router']->generate('create_extra_time'); ?>">
                                            <?php echo $view['translator']->trans('Add an Extratime'); ?>
                                        </a>
                                    </li>
                                    <li <?php $view['slots']->output('nav-list-li-class-show-all'); ?>>
                                        <a href="<?php echo $view['router']->generate('showall_extra_time'); ?>">
                                            <?php echo $view['translator']->trans('Show all Extratimes'); ?>
                                        </a>
                                    </li>
                                    <li <?php $view['slots']->output('nav-list-li-class-clear-all'); ?>>
                                        <a href="<?php echo $view['router']->generate('clearall_extra_time'); ?>">
                                            <?php echo $view['translator']->trans('Clear all Extratimes'); ?>
                                        </a>
                                    </li>
                                </ul>    				
                            </li>
                        <?php endif; ?>

                    </ul>

                </div> <!-- /container -->

            </div> <!-- /subnavbar-inner -->

        </div> <!-- /subnavbar -->


        <div class="main">

            <div class="main-inner">

                <div class="container">

                    <div class="row">

                        <div class="span6">
                            <?php echo $view->render('::quickstats-widget.html.php'); ?>
                            <?php echo $view->render('::news-widget.html.php'); ?>
                            <?php echo $view->render('::content-widget.html.php'); ?>
                        </div> <!-- /span6 -->

                        <div class="span6">	
                            <?php echo $view->render('::shortcuts-widget.html.php'); ?>
                            <?php echo $view->render('::charts-widget.html.php'); ?>
                            <?php echo $view->render('::table-widget.html.php'); ?>
                        </div> <!-- /span6 -->

                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /main-inner -->

        </div> <!-- /main -->



        <div class="extra">

            <div class="extra-inner">

                <div class="container">

                    <div class="row">

                        <div class="span3">

                            <h4>About</h4>

                            <ul>
                                <li><a href="javascript:;">About Us</a></li>
                                <li><a href="javascript:;">Twitter</a></li>
                                <li><a href="javascript:;">Facebook</a></li>
                                <li><a href="javascript:;">Google+</a></li>
                            </ul>

                        </div> <!-- /span3 -->

                        <div class="span3">

                            <h4>Support</h4>

                            <ul>
                                <li><a href="javascript:;">Frequently Asked Questions</a></li>
                                <li><a href="javascript:;">Ask a Question</a></li>
                                <li><a href="javascript:;">Video Tutorial</a></li>
                                <li><a href="javascript:;">Feedback</a></li>
                            </ul>

                        </div> <!-- /span3 -->

                        <div class="span3">

                            <h4>Legal</h4>

                            <ul>
                                <li><a href="javascript:;">License</a></li>
                                <li><a href="javascript:;">Terms of Use</a></li>
                                <li><a href="javascript:;">Privacy Policy</a></li>
                                <li><a href="javascript:;">Security</a></li>
                            </ul>

                        </div> <!-- /span3 -->

                        <div class="span3">

                            <h4>Settings</h4>

                            <ul>
                                <li><a href="javascript:;">Consectetur adipisicing</a></li>
                                <li><a href="javascript:;">Eiusmod tempor </a></li>
                                <li><a href="javascript:;">Fugiat nulla pariatur</a></li>
                                <li><a href="javascript:;">Officia deserunt</a></li>
                            </ul>

                        </div> <!-- /span3 -->

                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /extra-inner -->

        </div> <!-- /extra -->




        <div class="footer">

            <div class="footer-inner">

                <div class="container">

                    <div class="row">

                        <div class="span12">
                            &copy; 2012 <a href="http://bootstrapadmin.com">Base Admin</a>.
                        </div> <!-- /span12 -->

                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /footer-inner -->

        </div> <!-- /footer -->

        <?php $view['slots']->output('javascript_code') ?>


    </body>

</html>


