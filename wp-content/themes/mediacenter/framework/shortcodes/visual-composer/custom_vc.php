<?php

// Remove VC Elements
vc_remove_element( 'vc_posts_slider' );
vc_remove_element( 'vc_posts_grid' );
vc_remove_element( 'vc_carousel' );
vc_remove_element( 'vc_cta_button' );
vc_remove_element( 'vc_cta_button2' );
vc_remove_element( 'vc_button' );
vc_remove_element( 'vc_button2' );
vc_remove_element( 'vc_gallery' );
vc_remove_element( 'vc_images_carousel' );

// Custom Column Classes
// ...............................................................

function custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
	if ($tag =='vc_row' || $tag =='vc_row_inner') {
		$class_string = str_replace('vc_row-fluid', '', $class_string);
	}
	if($tag =='vc_column' || $tag =='vc_column_inner') {
		$class_string = str_replace('vc_col', 'col', $class_string);
	}
	return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2);

# ---------------------------------------------------------------
# Modified or added options for Visual Composer default elements
# ---------------------------------------------------------------

function add_media_center_vc_params() {

	// Apply updtes to default VC elements using add param function
	// ===============================================================
	
	if (function_exists('vc_add_param')) {

		// Add custom row options
		// ===============================================================

		// Add parameters to 'vc_row'
		$base = 'vc_row';
		$extraParams = array(
			array(
				'type' => 'checkbox',
				'param_name' => 'has_container',
				'value' => array(
					__('Has Container ?', 'media_center') => 'true'
				),
				'description' => __('Wrap the row element with container.', 'media_center')
			),
			array(
				'type' => 'dropdown',
				'heading' => __('Container Class', 'media_center'),
				'param_name' => 'container_class',
				'value' => array(
					__('Container', 'media_center') => 'container',
					__('Container Fluid', 'media_center') => 'container-fluid',
				),
				'description' => __('Specify the class for the container. Will be applied only if has container is set to true.', 'media_center')
			),
			array(
				'type' 			=> 'dropdown',
				'heading'		=> __( 'CSS3 Animation', 'media_center' ),
				'param_name'	=> 'row_animation',
				'value'			=> array(
					__( 'No Animation', 'media_center_settings' ) 			=> 	'none',
		        	__( 'BounceIn', 'media_center_settings' ) 				=> 	'bounceIn',
		        	__( 'BounceInDown', 'media_center_settings' ) 			=> 	'bounceInDown',
		        	__( 'BounceInLeft', 'media_center_settings' ) 			=> 	'bounceInLeft',
		        	__( 'BounceInRight', 'media_center_settings' ) 			=> 	'bounceInRight',
		        	__( 'BounceInUp', 'media_center_settings' ) 			=> 	'bounceInUp',
					__( 'FadeIn', 'media_center_settings' ) 				=> 	'fadeIn',
					__( 'FadeInDown', 'media_center_settings' ) 			=> 	'fadeInDown',
					__( 'FadeInDown Big', 'media_center_settings' ) 		=> 	'fadeInDownBig',
					__( 'FadeInLeft', 'media_center_settings' ) 			=> 	'fadeInLeft',
					__( 'FadeInLeft Big', 'media_center_settings' ) 		=> 	'fadeInLeftBig',
					__( 'FadeInRight', 'media_center_settings' ) 			=> 	'fadeInRight',
					__( 'FadeInRight Big', 'media_center_settings' ) 		=> 	'fadeInRightBig',
					__( 'FadeInUp', 'media_center_settings' ) 				=> 	'fadeInUp',
					__( 'FadeInUp Big', 'media_center_settings' ) 			=> 	'fadeInUpBig',
					__( 'FlipInX', 'media_center_settings' ) 				=> 	'flipInX',
					__( 'FlipInY', 'media_center_settings' ) 				=> 	'flipInY',
					__( 'Light SpeedIn', 'media_center_settings' ) 			=> 	'lightSpeedIn',
					__( 'RotateIn', 'media_center_settings' ) 				=> 	'rotateIn',
					__( 'RotateInDown Left', 'media_center_settings' ) 		=> 	'rotateInDownLeft',
					__( 'RotateInDown Right', 'media_center_settings' ) 	=> 	'rotateInDownRight',
					__( 'RotateInUp Left', 'media_center_settings' ) 		=> 	'rotateInUpLeft',
					__( 'RotateInUp Right', 'media_center_settings' ) 		=> 	'rotateInUpRight',
					__( 'RoleIn', 'media_center_settings' ) 				=> 	'roleIn',
		        	__( 'ZoomIn', 'media_center_settings' ) 				=> 	'zoomIn',
					__( 'ZoomInDown', 'media_center_settings' ) 			=> 	'zoomInDown',
					__( 'ZoomInLeft', 'media_center_settings' ) 			=> 	'zoomInLeft',
					__( 'ZoomInRight', 'media_center_settings' ) 			=> 	'zoomInRight',
					__( 'ZoomInUp', 'media_center_settings' ) 				=> 	'zoomInUp',
				),
				'description'	=> __( 'Choose the animation effect on the row when scrolled into view.', 'media_center' ),
			),
		);
		foreach ($extraParams as $params) {
			vc_add_param( $base, $params );
		}

		// Update 'vc_row' to include custom shortcode template and re-map shortcode
		vc_map_update( 'vc_row');

		//Add parameters to vc_accordion
		$base 			= 'vc_accordion';
		$extraParams 	= array(
			array(
				'type'			=> 'dropdown',
				'param_name'	=> 'accordion_style',
				'value'			=> array(
					__( 'Style 1', 'media_center' ) => 'style-1',
					__( 'Style 2', 'media_center' ) => 'style-2',
				),
			)
		);
		foreach ($extraParams as $params) {
			vc_add_param( $base, $params );
		}

		// Update 'vc_row' to include custom shortcode template and re-map shortcode
		vc_map_update( 'vc_accordion');

	}

}

add_action( 'wp_loaded', 'add_media_center_vc_params' );