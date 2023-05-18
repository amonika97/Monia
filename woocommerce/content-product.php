<?php
/**
 * The template for displaying product content within loops.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * @package WooCommerce
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility
if ( ! isset( $product ) ) {
    return;
}
?>

<li <?php wc_product_class( 'custom-product-card', $product ); ?>>
    <a href="<?php echo esc_url( get_permalink() ); ?>" class="product-link">
        <div class="product-image">
            <?php
            /**
             * Hook: woocommerce_before_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action( 'woocommerce_before_shop_loop_item_title' );
            ?>
        </div>

        <div class="product-info">
            <?php
            /**
             * Hook: woocommerce_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_product_title - 10
             */
            do_action( 'woocommerce_shop_loop_item_title' );
            ?>

            <?php
            /**
             * Hook: woocommerce_after_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_price - 10
             */
            do_action( 'woocommerce_after_shop_loop_item_title' );
            ?>

            <?php
            /**
             * Hook: woocommerce_after_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_add_to_cart - 20
             */
            do_action( 'woocommerce_after_shop_loop_item' );
            ?>
        </div>
    </a>
</li>