<head>
    <title><?php $view['slots']->output('title', 'Holidays Manager (beta)'); ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="<?php echo $view['assets']->getUrl('favicon.ico'); ?>" />

    <link href="<?php echo $view['assets']->getUrl('bootstrap/css/bootstrap-wrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('bootstrap/css/bootstrap-responsive-wrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet"/>
    <link href="<?php echo $view['assets']->getUrl('font-awesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/css/base-admin.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/css/base-admin-responsive.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/css/pages/dashboard.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('jquery/css/south-street/jquery-ui-1.8.21.custom.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('jrating/css/jRating.jquery.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('jnotify/css/jNotify.jquery.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view['assets']->getUrl('notify/style/default.css') ?>" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jquery/js/jquery-1.7.2.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/js/excanvas.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jquery/js/jquery-ui-1.8.21.custom.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bootstrap/js/bootstrap.min.js') ?>"></script>
    
<!--    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/js/jquery.flot.js') ?>"></script>-->
<!--    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/js/jquery.flot.orderBars.js') ?>"></script>-->
<!--    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/js/jquery.flot.pie.js') ?>"></script>-->
<!--    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/js/jquery.flot.resize.js') ?>"></script>-->
    
<!--    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/zobaholidaysmanager/js/base.js') ?>"></script>-->
    
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jrating/js/jRating.jquery.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('jnotify/js/jNotify.jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('notify/js/notification.js') ?>"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements  -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<?php 
$culture = $view['session']->getLocale();
$c_C = strtolower($culture).'_'.strtoupper($culture);
setlocale(LC_TIME, $c_C); 
?>
