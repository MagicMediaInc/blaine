<?php

function media_center_display_add_to_wishlist_button(){
	global $yith_wcwl, $product;

	$add_to_wishlist_url = $yith_wcwl->get_addtowishlist_url();
	$wishlist_url = $yith_wcwl->get_wishlist_url();
	$product_type = $product->product_type;
	$exists = $yith_wcwl->is_product_in_wishlist( $product->id );
	$label = apply_filters( 'yith_wcwl_button_label', get_option( 'yith_wcwl_add_to_wishlist_text' ) );

	$html  = '<div class="yith-wcwl-add-to-wishlist">';
    $html .= '<div class="yith-wcwl-add-button';  // the class attribute is closed in the next row

    $html .= $exists ? ' hide" style="display:none;"' : ' show"';

    $html .= '><a href="' . esc_url( $add_to_wishlist_url ) . '" data-product-id="' . $product->id . '" data-product-type="' . $product_type . '" class="add_to_wishlist btn-add-to-wishlist"><i class="fa fa-heart"></i>' . $label . '</a>';
    $html .= '</div>';

    $html .= '<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a href="' . esc_url( $wishlist_url ) . '" class="btn-add-to-wishlist"><i class="fa fa-check"></i> ' . apply_filters( 'yith-wcwl-browse-wishlist-label', __( 'Product Added', 'yit' ) ) . '</a></div>';
    $html .= '<div class="yith-wcwl-wishlistexistsbrowse ' . ( $exists ? 'show' : 'hide' ) . '" style="display:' . ( $exists ? 'block' : 'none' ) . '"><a href="' . esc_url( $wishlist_url ) . '" class="btn-add-to-wishlist"><i class="fa-th-list fa"></i> ' . apply_filters( 'yith-wcwl-browse-wishlist-label', __( 'Browse Wishlist', 'yit' ) ) . '</a></div>';
    $html .= '<div class="yith-wcwl-wishlistaddresponse"></div>';

    $html .= '</div>';

	return $html;
}

add_shortcode( 'mc_yith_wcwl_add_to_wishlist', 'media_center_display_add_to_wishlist_button' );