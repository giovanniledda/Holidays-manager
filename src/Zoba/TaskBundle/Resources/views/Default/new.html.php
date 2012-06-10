<?php $view->extend('::base.html.php'); ?>


<?php $view['slots']->start('body'); ?>
<?php //$view['form']->setTheme($form, array('TaskBundle:Form')) ?>
<form class="well form-horizontal" action="<?php echo $view['router']->generate('task_new') ?>" method="post" <?php echo $view['form']->enctype($form) ?> novalidate="novalidate">
    <?php echo $view['form']->errors($form) ?>

    <div class="control-group <?php if ($view['form']->errors($form['task'])): ?>error<?php endif;?>">
        <?php echo $view['form']->label($form['task'], null, array('attr' => array('class' => 'control-label'))); ?>
        <?php echo $view['form']->errors($form['task'], array('attr' => array('class' => 'help-inline'))) ?>

        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-tasks"></i></span>
                <?php echo $view['form']->widget($form['task'], array('attr' => array('class' => 'task_field'))); ?>
            </div>
        </div>
    </div>

    <div class="control-group <?php if ($view['form']->errors($form['due_date'])): ?>error<?php endif;?>">
        <?php echo $view['form']->label($form['due_date'], null, array('attr' => array('class' => 'control-label'))); ?>
        <?php echo $view['form']->errors($form['due_date']) ?>
        <div class="controls">
            <?php echo $view['form']->widget($form['due_date']) ?>
        </div>
    </div>

    <?php echo $view['form']->rest($form) ?>

    <div class="form-actions">
        <input class="btn btn-primary" type="submit" value="Invia"/>
        <button class="btn">Cancel</button>
    </div>
</form>
<?php $view['slots']->stop('body'); ?>

<?php $view['slots']->start('javascript_code'); ?>
    <script type="text/javascript" >
        function convertErrorsMarkup() {
            
            errors = $('.control-group li');
            $.each(errors, function () {
                msg = $(this).html();
                $(this).parent().next('.controls').append('<span class="help-inline">' + msg + '</span>');
            });
            $('.control-group ul').detach();
        }
        
        $(document).ready(function (){
            $('#task_due_date').datepicker({ dateFormat: "dd/mm/yy" });
            convertErrorsMarkup();
        });
    </script>
<?php $view['slots']->stop('javascript_code'); ?>
