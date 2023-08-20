<section class="container">
    <div class="section">
        <?php do_action( 'woocommerce_before_single_product' ); ?>
    </div>
</section>
<section class="container">
    <div class="section data-product">
        <div class="product-galery">
            <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
        </div>
        <div class="product-summary">
            <?php 
                do_action( 'woocommerce_single_product_summary' );
                do_action( 'woocommerce_simple_add_to_cart' );
                do_action( 'woocommerce_after_add_to_cart_quantity' );
            ?>
        </div>
    </div>
</section>
<section class="container">
    <div class="section">
        <?php do_action( 'woocommerce_after_single_product_summary' );
            do_action( 'woocommerce_after_main_content' );
        ?>
    </div>
</section>