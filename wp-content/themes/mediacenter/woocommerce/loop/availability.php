<?php
/**
 * Availability
 *
 * @author 		Ibrahim Ibn Dawood
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;

$availability = $product->get_availability();
$stock_status = $availability['class'];
if( $stock_status == 'out-of-stock' ) {
	$label = __( 'No Disponible', 'media_center' ) ;
	$label_class = 'not-available';
} else {
	$label = __( 'Disponible', 'media_center' ) ;
	$label_class = 'available';
}

echo apply_filters( 'media_center_loop_availability',
	sprintf( '<div class="availability"><label>%s</label><span class="%s">%s</span></div>',
		__( 'Disponibilidad:', 'media_center' ),
		$label_class,
		$label
	),
$product );