<section class="container">
    <div class="section data-product">
        <div class="product-galery">
            <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
        </div>
        <div class="product-summary">
            <?php 
                do_action( 'woocommerce_single_product_summary' );
                include(TEMPLATEPATH . '/parts/widgets/share.php');
            ?>
        </div>
    </div>
</section>