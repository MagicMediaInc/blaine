<?php
/**
 * Single Product Rating
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' )
	return;

$count   = $product->get_rating_count();
$average = $product->get_average_rating();
$based_on = sprintf( _n( '%s customer review', '%s customer reviews', $count, 'woocommerce' ),  $count );
if ( $count > 0 ) : ?>

	<div class="clearfix woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<a href="#reviews" class="woocommerce-review-link" rel="nofollow">
			<div class="star-rating" title="<?php printf( __( 'Rated %s out of 5 based on %s', 'woocommerce' ), $average, $based_on ); ?>">
				<span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
					<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php _e( 'out of 5', 'woocommerce' ); ?>
				</span>
			</div>
		</a>
	</div>

<?php endif; ?>