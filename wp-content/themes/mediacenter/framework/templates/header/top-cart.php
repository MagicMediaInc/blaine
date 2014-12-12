<?php
/**
 * Toop Cart
 *
 * @author      Ibrahim Ibn Dawood
 * @package     Framework/Templates
 * @version     1.1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $media_center_theme_options, $yith_wcwl, $yith_woocompare;
?>
<div class="top-cart-row-container">
    <div class="wishlist-compare-holder">
        
        <?php if (class_exists('YITH_WCWL')) : ?>
        <div class="wishlist">
            <a id="yith-wishlist-link" href="<?php echo esc_url( $yith_wcwl->get_wishlist_url() ); ?>">
                <i class="fa fa-heart"></i> 
                <?php echo __( 'Wishlist', 'media_center' ); ?> 
                <span id="top-cart-wishlist-count" class="value">(<?php echo yith_wcwl_count_products(); ?>)</span> 
            </a>
        </div><!-- /.wishlist -->
        <?php endif; ?>

        <?php if (class_exists('YITH_Woocompare')) : ?>
        <div class="compare">
            <?php
                $product_compare_page_url = '';
                if( !empty( $media_center_theme_options['product_comparison_page'] ) ){
                    $product_compare_page_url = get_permalink( $media_center_theme_options['product_comparison_page'] );
                    $product_compare_class = 'compare';
                }else{
                    $product_compare_page_url = add_query_arg( array( 'iframe' => 'true' ), $yith_woocompare->obj->view_table_url() );
                    $product_compare_class = 'yith-woocompare-open compare';
                }
            ?>
            <a id="yith-woocompare-link" href="<?php echo $product_compare_page_url; ?>" class="<?php echo $product_compare_class; ?>">
                <i class="fa fa-exchange"></i> 
                <?php echo __( 'Compare', 'media_center' ); ?>
                <span id="top-cart-compare-count" class="value">(<?php echo count( $yith_woocompare->obj->products_list ); ?>)</span> 
            </a>
        </div><!-- /.compare -->
        <?php endif; ?>
    </div><!-- /.wishlist-compare-holder -->

    <?php 
        $catalog_mode = false ;
        if( isset( $media_center_theme_options['catalog_mode'] ) && $media_center_theme_options['catalog_mode'] == 1 ){
            $catalog_mode = true;
        }
        if ( class_exists( 'WooCommerce' ) && ! $catalog_mode ) : ?>
    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    <div class="top-cart-holder dropdown animate-dropdown">
        <div class="basket widget_shopping_cart_content">
            <?php woocommerce_mini_cart();?>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
    <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
    <?php endif; ?>
</div><!-- /.top-cart-row-container -->