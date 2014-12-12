<?php

global $wpdb, $yith_wcwl, $woocommerce;

if( isset( $_GET['user_id'] ) && !empty( $_GET['user_id'] ) ) {
    $user_id = $_GET['user_id'];
} elseif( is_user_logged_in() ) {
    $user_id = get_current_user_id();
}

$current_page = 1;
$limit_sql = '';

if( $pagination == 'yes' ) {
    $count = array();

    if( is_user_logged_in() || ( isset( $user_id ) && !empty( $user_id ) ) ) {
        $count = $wpdb->get_results( $wpdb->prepare( 'SELECT COUNT(*) as `cnt` FROM `' . YITH_WCWL_TABLE . '` WHERE `user_id` = %d', $user_id  ), ARRAY_A );
        $count = $count[0]['cnt'];
    } elseif( yith_usecookies() ) {
        $count[0]['cnt'] = count( yith_getcookie( 'yith_wcwl_products' ) );
    } else {
        $count[0]['cnt'] = count( $_SESSION['yith_wcwl_products'] );
    }

    $total_pages = $count/$per_page;
    if( $total_pages > 1 ) {
        $current_page = max( 1, get_query_var( 'page' ) );

        $page_links = paginate_links( array(
            'base' => get_pagenum_link( 1 ) . '%_%',
            'format' => '&page=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'show_all' => true
        ) );
    }

    $limit_sql = "LIMIT " . ( $current_page - 1 ) * 1 . ',' . $per_page;
}

if( is_user_logged_in() || ( isset( $user_id ) && !empty( $user_id ) ) )
{ $wishlist = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM `" . YITH_WCWL_TABLE . "` WHERE `user_id` = %s" . $limit_sql, $user_id ), ARRAY_A ); }
elseif( yith_usecookies() )
{ $wishlist = yith_getcookie( 'yith_wcwl_products' ); }
else
{ $wishlist = isset( $_SESSION['yith_wcwl_products'] ) ? $_SESSION['yith_wcwl_products'] : array(); }

// Start wishlist page printing
?>
<div class="row">
	<div class="col-lg-10 center-block style-cart-page inner-bottom-xs">
		
		<?php if( count( $wishlist ) > 0 ) : ?>

		<div class="section section-page-title inner-xs">
			<div class="page-header">
				<h2 class="page-title">
				<?php
					$wishlist_title = get_option( 'yith_wcwl_wishlist_title' );
					if( !empty( $wishlist_title ) ) { 
						echo apply_filters( 'yith_wcwl_wishlist_title', $wishlist_title ); 
					}else{
						echo __( 'Wishlist', 'media_center' );
					}
				?>
				</h2>
			</div>
		</div>

		<?php wc_print_notices(); ?>

		<div id="yith-wcwl-messages"></div>
		
		<form id="yith-wcwl-form" action="<?php echo esc_url( $yith_wcwl->get_wishlist_url() ) ?>" method="post">

			<div class="items-holder">
				<div class="container-fluid wishlist_table">
				 <?php
				foreach( $wishlist as $values ) :
					if( !is_user_logged_in() && !isset( $_GET['user_id'] ) ) {
						if( isset( $values['add-to-wishlist'] ) && is_numeric( $values['add-to-wishlist'] ) ) {
							$values['prod_id'] = $values['add-to-wishlist'];
							$values['ID'] = $values['add-to-wishlist'];
						} else {
							$values['prod_id'] = $values['product_id'];
							$values['ID'] = $values['product_id'];
						}
					}

					$product_obj = get_product( $values['prod_id'] );

					if( $product_obj !== false && $product_obj->exists() ) : ?>
				
					<div id="yith-wcwl-row-<?php echo $values['ID'] ?>" class="row wishlist-item cart-item cart_item">
						
						<div class="col-xs-1 col-sm-1">
							<a href="<?php echo esc_url( $yith_wcwl->get_remove_url( $values['ID'] ) )?>" data-row-id="yith-wcwl-row-<?php echo $values['ID'] ?>" class="remove_from_wishlist remove-item" title="<?php _e( 'Remove this product', 'media_center' ) ?>">&times;</a>
						</div>

	                	<div class="col-xs-10 col-sm-5">
	                		<div class="media wishlist-product">
								<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $values['prod_id'] ) ) ) ?>" class="pull-left">
									<?php echo $product_obj->get_image() ?>
								</a>
								<div class="media-body">
									<div class="title">
			                        	<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $values['prod_id'] ) ) ) ?>"><?php echo apply_filters( 'woocommerce_in_cartproduct_obj_title', $product_obj->get_title(), $product_obj ) ?></a>
			                    	</div><!-- /.title --> 
			                    	<?php
										if( get_option( 'yith_wcwl_stock_show' ) == 'yes' ){
											$availability = $product_obj->get_availability();
											$stock_status = $availability['class'];
											if( $stock_status == 'out-of-stock' ) {
												$stock_status = "Out";
												echo '<div class="availability"><span class="label label-important wishlist-out-of-stock">' . __( 'Out of Stock', 'media_center' ) . '</span></div>';
											} else {
												$stock_status = "In";
												echo '<div class="availability"><span class="label label-success wishlist-in-stock">' . __( 'In Stock', 'media_center' ) . '</span></div>';
											}
										}
									?>
								</div>
							</div>
	                    </div>
						
		                <div class="col-xs-4 col-xs-offset-1 col-sm-offset-0 col-sm-3">
		                	<div class="price">
		                	<?php
								if( $product_obj->price != '0' ) {
									if( get_option( 'woocommerce_tax_display_cart' ) == 'excl' ){ 
										echo apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_obj->get_price_excluding_tax() ), $values, '' ); 
									}else{ 
										echo apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_obj->get_price() ), $values, '' ); 
									}
								} else {
									echo apply_filters( 'yith_free_text', __( 'Free!', 'media_center' ) );
								}
							?>
							</div>
		                </div>
						
						<div class="col-xs-7 col-sm-3">
							<div class="text-right">
								<?php
								echo apply_filters( 'woocommerce_loop_add_to_cart_link',
									sprintf( '<div class="add-cart-button"><a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="le-button %s product_type_%s">%s</a></div>',
										esc_url( $product_obj->add_to_cart_url() ),
										esc_attr( $product_obj->id ),
										esc_attr( $product_obj->get_sku() ),
										$product_obj->is_purchasable() && $product_obj->is_in_stock() ? 'add_to_cart_button' : '',
										esc_attr( $product_obj->product_type ),
										esc_html( $product_obj->add_to_cart_text() )
									),
								$product_obj );
								?>
							</div>
						</div>
	              	
	              	</div><!-- /.cart-item -->

					<?php
					endif;
				endforeach;

				if( isset( $page_links ) ) : ?>
					<div class="col-xs-12 col-sm-12"><?php echo $page_links ?></div>
				<?php endif ?>
				</div><!-- /.wishlist-table -->
			</div><!-- /.items-holder -->

			<table class="table text-center semi-bold cart"></table>

			<?php
		    	do_action( 'yith_wcwl_after_wishlist' );

		    	yith_wcwl_get_template( 'share.php' );

		    	do_action( 'yith_wcwl_after_wishlist_share' );
		    ?>
		
		</form><!-- /#yith-wcwl-form -->

	<?php else: ?>

		<div class="inner-top inner-bottom-md"> 

			<h1 class="lead-title text-center cart-empty">
				<?php _e( 'No products were added <br /> to the wishlist', 'media_center' ) ?>
			</h1>
			
			<p class="return-to-shop text-center">
				<a class="wc-backward" href="<?php echo apply_filters( 'woocommerce_return_to_shop_redirect', get_permalink( wc_get_page_id( 'shop' ) ) ); ?>">
					<i class="fa fa-mail-reply"></i>
					<?php _e( 'Return To Shop', 'woocommerce' ) ?>
				</a>
			</p>

		</div>
					
	<?php endif; ?>
	
	</div><!-- .large-->
</div><!-- .row-->