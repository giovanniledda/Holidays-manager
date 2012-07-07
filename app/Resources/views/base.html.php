<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'Benvenuto!'); ?></title>
        <link rel="shortcut icon" href="<?php echo $view['assets']->getUrl('favicon.ico'); ?>" />
        <link href="<?php echo $view['assets']->getUrl('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo $view['assets']->getUrl('bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo $view['assets']->getUrl('jquery/css/south-street/jquery-ui-1.8.21.custom.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo $view['assets']->getUrl('jrating/css/jRating.jquery.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo $view['assets']->getUrl('jnotify/css/jNotify.jquery.css') ?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jquery/js/jquery-1.7.2.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jquery/js/jquery-ui-1.8.21.custom.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bootstrap/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jrating/js/jRating.jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jnotify/js/jNotify.jquery.min.js') ?>"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="#">Holidays Manager</a>

                        <div class="btn-group pull-right">
                            <?php if ($app->getUser()): ?>
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="icon-user"></i> <?php echo $app->getUser()->getUsername(); ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $view['router']->generate('logout'); ?>">Sign Out</a></li>
                                </ul>
                            <?php else: ?>
                                <a class="btn" href="<?php echo $view['router']->generate('login'); ?>">
                                    <i class="icon-user"></i> Sign in
                                    <i class="icon-hand-left"></i>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="nav-collapse">
                            <ul class="nav">
                                <li class="active"><a href="#">Home</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Sidebar</li>
                            <li class="active"><a href="#">Home</a></li>
                            <li>
                                <a href="<?php echo $view['router']->generate('create_extra_time'); ?>">
                                    <?php echo $view['translator']->trans('Add an Extratime'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $view['router']->generate('showall_extra_time'); ?>">
                                    <?php echo $view['translator']->trans('Show all Extratimes'); ?>
                                </a>
                            </li>
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->

                <div class="span9">
                    <?php $view['slots']->output('body') ?>
                    <!--Body content-->
                </div>
            </div>
        </div>

        <?php $view['slots']->output('javascript_code') ?>
    </body>
</html>


