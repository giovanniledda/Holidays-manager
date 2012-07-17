<!DOCTYPE html>
<html>
    <?php echo $view->render('::head.html.php'); ?>
    <body>
        <?php $view['slots']->output('notify') ?>
        
        <?php echo $view->render('::navbar-profile.html.php'); ?>
        <?php echo $view->render('::subnavbar.html.php'); ?>

        <div class="main">

            <div class="main-inner">

                <div class="container">

                    <div class="row">

                        <?php if ($app->getUser()): ?>
                            <div class="span6">
                                <?php echo $view->render('::main-content.html.php'); ?>
                            </div> <!-- /span6 -->

                            <div class="span6">	
                                <?php echo $view->render('::secundary-content.html.php'); ?>
                            </div> <!-- /span6 -->
                        <?php endif; ?>

                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /main-inner -->

        </div> <!-- /main -->

        <?php echo $view->render('::extra-footer.html.php'); ?>
        <?php echo $view->render('::footer.html.php'); ?>

        <?php $view['slots']->output('javascript_code') ?>
    </body>

</html>


