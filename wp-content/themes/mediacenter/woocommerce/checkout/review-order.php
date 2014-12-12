<?php
/**
 * Review order form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.8
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php if ( ! is_ajax() ) : ?><div id="order_review"><?php endif; ?>


<?php
	do_action( 'woocommerce_review_order_before_cart_contents' );

	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

		if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			?>
			<div class="row no-margin order-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                <div class="col-xs-2 col-sm-1 no-margin">
                	<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="qty product-quantity">' . sprintf( '%s &times;', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
                </div>

                <div class="col-xs-10 col-sm-9">
                    <div class="title">
                    	<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ); ?>
                    </div>
                    <?php echo WC()->cart->get_item_data( $cart_item ); ?>
                    <?php woocommerce_show_brand( $_product->id ); ?>
                </div>

                <div class="col-xs-12 col-sm-2 no-margin">
                    <div class="price"><?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?></div>
                </div>
            </div><!-- /.order-item -->
			<?php
		}
	}

	do_action( 'woocommerce_review_order_after_cart_contents' );
?>
		
<div class="row no-margin" id="total-area">
    <div class="col-xs-12 col-lg-7 col-lg-offset-5 no-margin-right">
        <div id="subtotal-holder">
            <ul class="tabled-data inverse-bold no-border">
                
                <li class="cart-subtotal">
					<label><?php _e( 'Cart Subtotal', 'woocommerce' ); ?></label>
					<div class="value"><?php wc_cart_totals_subtotal_html(); ?></div>
				</li>

				<?php foreach ( WC()->cart->get_coupons( 'cart' ) as $code => $coupon ) : ?>
					<li class="cart-discount coupon-<?php echo esc_attr( $code ); ?>">
						<label><?php wc_cart_totals_coupon_label( $coupon ); ?></label>
						<div class="value"><?php wc_cart_totals_coupon_html( $coupon ); ?></div>
					</li>
				<?php endforeach; ?>

				<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

					<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

					<?php wc_cart_totals_shipping_html(); ?>

					<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

				<?php endif; ?>

				<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
					<li class="fee">
						<label><?php echo esc_html( $fee->name ); ?></label>
						<div class="value text-right"><?php wc_cart_totals_fee_html( $fee ); ?></div>
					</li>
				<?php endforeach; ?>

				<?php if ( WC()->cart->tax_display_cart === 'excl' ) : ?>
					<?php if ( get_option( 'woocommerce_tax_total_display' ) === 'itemized' ) : ?>
						<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
							<li class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
								<label><?php echo esc_html( $tax->label ); ?></label>
								<div class="value"><?php echo wp_kses_post( $tax->formatted_amount ); ?></div>
							</li>
						<?php endforeach; ?>
					<?php else : ?>
						<li class="tax-total">
							<label><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></label>
							<div class="value"><?php echo wc_price( WC()->cart->get_taxes_total() ); ?></div>
						</li>
					<?php endif; ?>
				<?php endif; ?>

				<?php foreach ( WC()->cart->get_coupons( 'order' ) as $code => $coupon ) : ?>
					<li class="order-discount coupon-<?php echo esc_attr( $code ); ?>">
						<label><?php wc_cart_totals_coupon_label( $coupon ); ?></label>
						<div class="value"><?php wc_cart_totals_coupon_html( $coupon ); ?></div>
					</li>
				<?php endforeach; ?>


            </ul><!-- /.tabled-data -->
			
			<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

            <ul class="tabled-data inverse-bold " id="total-field">
                <li>
                	<label><?php _e( 'Order Total', 'woocommerce' ); ?></label>
					<div class="value"><?php wc_cart_totals_order_total_html(); ?></div>
                </li>
            </ul><!-- /.tabled-data -->

            <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

        </div><!-- /#subtotal-holder -->
    </div><!-- /.col -->
</div><!-- /.total-area -->

<?php do_action( 'woocommerce_review_order_before_payment' ); ?>

<div id="payment">
	<?php if ( WC()->cart->needs_payment() ) : ?>
	<div id="payment-method-options" class="payment_methods methods">
		<?php
			$available_gateways = WC()->payment_gateways->get_available_payment_gateways();
			if ( ! empty( $available_gateways ) ) {

				// Chosen Method
				if ( isset( WC()->session->chosen_payment_method ) && isset( $available_gateways[ WC()->session->chosen_payment_method ] ) ) {
					$available_gateways[ WC()->session->chosen_payment_method ]->set_current();
				} elseif ( isset( $available_gateways[ get_option( 'woocommerce_default_gateway' ) ] ) ) {
					$available_gateways[ get_option( 'woocommerce_default_gateway' ) ]->set_current();
				} else {
					current( $available_gateways )->set_current();
				}

				foreach ( $available_gateways as $gateway ) {
					?>
					<div class="radio payment-method-option payment_method_<?php echo $gateway->id; ?>">
						<label for="payment_method_<?php echo $gateway->id; ?>">
							<input id="payment_method_<?php echo $gateway->id; ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
							<span class="payment-gateway-title"><?php echo $gateway->get_title(); ?></span> <?php echo $gateway->get_icon(); ?>
							<?php
								if ( $gateway->has_fields() || $gateway->get_description() ) :
									echo '<div class="no-margin-p payment_box payment_method_' . $gateway->id . '" ' . ( $gateway->chosen ? '' : 'style="display:none;"' ) . '>';
									$gateway->payment_fields();
									echo '</div>';
								endif;
							?>
						</label>
					</div><!-- /.payment-method-option -->
					<?php
				}
			} else {

				if ( ! WC()->customer->get_country() )
					$no_gateways_message = __( 'Please fill in your details above to see available payment methods.', 'woocommerce' );
				else
					$no_gateways_message = __( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' );

				echo '<p class="alert aler-warning">' . apply_filters( 'woocommerce_no_available_payment_methods_message', $no_gateways_message ) . '</p>';

			}
		?>
	</div><!-- /.payment-methods -->
	<?php endif; ?>

	<div class="place-order-button form-row place-order">

		<noscript><?php _e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ); ?><br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php _e( 'Update totals', 'woocommerce' ); ?>" /></noscript>

		<?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>

		<?php do_action( 'woocommerce_review_order_before_submit' ); ?>

		<?php
		$order_button_text = apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'woocommerce' ) );

		echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="le-button big button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' );
		?>

		<?php if ( wc_get_page_id( 'terms' ) > 0 && apply_filters( 'woocommerce_checkout_show_terms', true ) ) { 
			$terms_is_checked = apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) );
			?>
			<div class="form-row terms pull-left">
				<label for="terms" class="checkbox">
					<input type="checkbox" class="input-checkbox" name="terms" <?php checked( $terms_is_checked, true ); ?> id="terms" />
					<?php printf( __( 'I&rsquo;ve read and accept the <a href="%s" target="_blank">terms &amp; conditions</a>', 'woocommerce' ), esc_url( get_permalink( wc_get_page_id( 'terms' ) ) ) ); ?>
				</label>
			</div>
		<?php } ?>

		<?php do_action( 'woocommerce_review_order_after_submit' ); ?>

	</div>

	<div class="clear"></div>

</div>

<?php do_action( 'woocommerce_review_order_after_payment' ); ?>

<?php if ( ! is_ajax() ) : ?></div><?php endif; ?>