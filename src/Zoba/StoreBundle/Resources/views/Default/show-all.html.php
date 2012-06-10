<?php $view->extend('::base.html.php') ?>

<?php $view['slots']->set('title', 'Il mio fighissimo test') ?>

<?php $view['slots']->start('body') ?>
<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="span4 hero-unit">
            <p>Prodotto #<?php echo $product->getId(); ?></p>
            <p>Categoria #<?php echo $product->getCategory() ? $product->getCategory()->getId() : 'non associata'; ?></p>
            <p data-identifier="<?php echo $product->getId(); ?>" class="product-rating" id="<?php echo $product->getRating(). '_' . $product->getId(); ?>"></p>
        </div>
    <?php endforeach; ?>
</div>    
<?php $view['slots']->stop('body') ?>

<?php $view['slots']->start('javascript_code'); ?>
<script type="text/javascript" >
    $(document).ready(function () {
        
        function fireNotify(elem_id) {
            
            jSuccess('Bravo !!<br />Salvataggio del <strong>Prodotto </strong>#' + elem_id,
                {
                    autoHide : true, // added in v2.0
                    clickOverlay : false, // added in v2.0
                    MinWidth : 350,
                    TimeShown : 1500,
                    ShowTimeEffect : 200,
                    HideTimeEffect : 200,
                    LongTrip :20,
                    HorizontalPosition : 'center',
                    VerticalPosition : 'top',
                    ShowOverlay : true,
                    ColorOverlay : '#000',
                    OpacityOverlay : 0.3,
                    onClosed : function(){ // added in v2.0

                    },
                    onCompleted : function(){ // added in v2.0

                    }
                }
            );
        }
        
        $(".notify").click(function (e) {
            e.preventDefault();
            fireNotify($(this));
        });
        
        
        $(".product-rating").jRating({
            step:true,
            length : 5, 
            rateMax : 5, 
            decimalLength: 1,
            phpPath : '<?php echo $view['router']->generate('store_update_product_rating'); ?>',
            bigStarsPath : '/jrating/css/icons/stars.png', // path of the icon stars.png
            smallStarsPath : '/jrating/css/icons/small.png', // path of the icon small.png
            onSuccess : function(data){
                fireNotify(data.id);
            },
            onError : function(){
                jError('Errore! Riprova, dai!');
            }
        });
    });
</script>
<?php $view['slots']->stop('javascript_code'); ?>