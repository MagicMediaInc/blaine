<?php
/**
 * WPBakery Visual Composer Shortcodes settings
 *
 * @package MediaCenterVCExtensions
 *
 */

if ( function_exists( 'vc_map' ) ):

#-----------------------------------------------------------------
# Media Center Banner Element
#-----------------------------------------------------------------

wpb_map(	
	array(
		'name' => __( 'Banner', 'media_center_vc_extend' ),
		'base' => 'mc_banner',
		'description' => __( 'Add a banner to your page.', 'media_center_vc_extend' ),
		'class'		=> '',
		'controls' => 'full', 
		'icon' => 'icon-media-center',
		'category' => __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params' => array(
      		array(
				'type' => 'attach_image',
	         	'heading' => __( 'Banner Image', 'media_center_vc_extend' ),
	         	'param_name' => 'banner_image',	
	      	),
	      	array(
				 'type' => 'textfield',
		         'heading' => __( 'Title', 'media_center_vc_extend' ),
		         'param_name' => 'title',
		         'description' => __( 'Enter banner title', 'media_center_vc_extend' ),
		         'holder' => 'div'
	      	),
	      	array(
				 'type' => 'textfield',
		         'heading' => __( 'Subtitle Text', 'media_center_vc_extend' ),
		         'param_name' => 'subtitle',
		         'description' => __( 'Enter banner subtitle', 'media_center_vc_extend')
	      	),
	      	array(
				 'type' => 'textfield',
		         'heading' => __( 'Banner Link', 'media_center_vc_extend' ),
		         'param_name' => 'banner_link',
		         'description' => __( 'Link to banner. Default #', 'media_center_vc_extend' ),
		         'value' => '#'
	      	),
	      	array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'On Click', 'media_center_vc_extend' ),
	      		'param_name' => 'banner_link_target',
	      		'value' => array(
					__( 'Open in same page', 'media_center_vc_extend' ) => '_self',
					__( 'Open in new page', 'media_center_vc_extend' )   => '_blank'
				),
      		),
      		array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Animation on banner hover', 'media_center_vc_extend' ),
	      		'param_name' => 'banner_hover_animation',
	      		'value' => array(
					__( 'bounce', 'media_center_vc_extend' ) => 'bounce',
					__( 'flash', 'media_center_vc_extend' ) => 'flash',
					__( 'pulse', 'media_center_vc_extend' ) => 'pulse',
					__( 'rubberBand', 'media_center_vc_extend' ) => 'rubberBand',
					__( 'shake', 'media_center_vc_extend' ) => 'shake',
					__( 'swing', 'media_center_vc_extend' ) => 'swing',
					__( 'tada', 'media_center_vc_extend' ) => 'tada',
					__( 'wobble', 'media_center_vc_extend' ) => 'wobble',
					__( 'bounceIn', 'media_center_vc_extend' ) => 'bounceIn',
					__( 'bounceInDown', 'media_center_vc_extend' ) => 'bounceInDown',
					__( 'bounceInLeft', 'media_center_vc_extend' ) => 'bounceInLeft',
					__( 'bounceInRight', 'media_center_vc_extend' ) => 'bounceInRight',
					__( 'bounceInUp', 'media_center_vc_extend' ) => 'bounceInUp',
					__( 'bounceOut', 'media_center_vc_extend' ) => 'bounceOut',
					__( 'bounceOutDown', 'media_center_vc_extend' ) => 'bounceOutDown',
					__( 'bounceOutLeft', 'media_center_vc_extend' ) => 'bounceOutLeft',
					__( 'bounceOutRight', 'media_center_vc_extend' ) => 'bounceOutRight',
					__( 'bounceOutUp', 'media_center_vc_extend' ) => 'bounceOutUp',
					__( 'fadeIn', 'media_center_vc_extend' ) => 'fadeIn',
					__( 'fadeInDown', 'media_center_vc_extend' ) => 'fadeInDown',
					__( 'fadeInDownBig', 'media_center_vc_extend' ) => 'fadeInDownBig',
					__( 'fadeInLeft', 'media_center_vc_extend' ) => 'fadeInLeft',
					__( 'fadeInLeftBig', 'media_center_vc_extend' ) => 'fadeInLeftBig',
					__( 'fadeInRight', 'media_center_vc_extend' ) => 'fadeInRight',
					__( 'fadeInRightBig', 'media_center_vc_extend' ) => 'fadeInRightBig',
					__( 'fadeInUp', 'media_center_vc_extend' ) => 'fadeInUp',
					__( 'fadeInUpBig', 'media_center_vc_extend' ) => 'fadeInUpBig',
					__( 'fadeOut', 'media_center_vc_extend' ) => 'fadeOut',
					__( 'fadeOutDown', 'media_center_vc_extend' ) => 'fadeOutDown',
					__( 'fadeOutDownBig', 'media_center_vc_extend' ) => 'fadeOutDownBig',
					__( 'fadeOutLeft', 'media_center_vc_extend' ) => 'fadeOutLeft',
					__( 'fadeOutLeftBig', 'media_center_vc_extend' ) => 'fadeOutLeftBig',
					__( 'fadeOutRight', 'media_center_vc_extend' ) => 'fadeOutRight',
					__( 'fadeOutRightBig', 'media_center_vc_extend' ) => 'fadeOutRightBig',
					__( 'fadeOutUp', 'media_center_vc_extend' ) => 'fadeOutUp',
					__( 'fadeOutUpBig', 'media_center_vc_extend' ) => 'fadeOutUpBig',
					__( 'flip', 'media_center_vc_extend' ) => 'flip',
					__( 'flipInX', 'media_center_vc_extend' ) => 'flipInX',
					__( 'flipInY', 'media_center_vc_extend' ) => 'flipInY',
					__( 'flipOutX', 'media_center_vc_extend' ) => 'flipOutX',
					__( 'flipOutY', 'media_center_vc_extend' ) => 'flipOutY',
					__( 'lightSpeedIn', 'media_center_vc_extend' ) => 'lightSpeedIn',
					__( 'lightSpeedOut', 'media_center_vc_extend' ) => 'lightSpeedOut',
					__( 'rotateIn', 'media_center_vc_extend' ) => 'rotateIn',
					__( 'rotateInDownLeft', 'media_center_vc_extend' ) => 'rotateInDownLeft',
					__( 'rotateInDownRight', 'media_center_vc_extend' ) => 'rotateInDownRight',
					__( 'rotateInUpLeft', 'media_center_vc_extend' ) => 'rotateInUpLeft',
					__( 'rotateInUpRight', 'media_center_vc_extend' ) => 'rotateInUpRight',
					__( 'rotateOut', 'media_center_vc_extend' ) => 'rotateOut',
					__( 'rotateOutDownLeft', 'media_center_vc_extend' ) => 'rotateOutDownLeft',
					__( 'rotateOutDownRight', 'media_center_vc_extend' ) => 'rotateOutDownRight',
					__( 'rotateOutUpLeft', 'media_center_vc_extend' ) => 'rotateOutUpLeft',
					__( 'rotateOutUpRight', 'media_center_vc_extend' ) => 'rotateOutUpRight',
					__( 'hinge', 'media_center_vc_extend' ) => 'hinge',
					__( 'rollIn', 'media_center_vc_extend' ) => 'rollIn',
					__( 'rollOut', 'media_center_vc_extend' ) => 'rollOut',
					__( 'zoomIn', 'media_center_vc_extend' ) => 'zoomIn',
					__( 'zoomInDown', 'media_center_vc_extend' ) => 'zoomInDown',
					__( 'zoomInLeft', 'media_center_vc_extend' ) => 'zoomInLeft',
					__( 'zoomInRight', 'media_center_vc_extend' ) => 'zoomInRight',
					__( 'zoomInUp', 'media_center_vc_extend' ) => 'zoomInUp',
					__( 'zoomOut', 'media_center_vc_extend' ) => 'zoomOut',
					__( 'zoomOutDown', 'media_center_vc_extend' ) => 'zoomOutDown',
					__( 'zoomOutLeft', 'media_center_vc_extend' ) => 'zoomOutLeft',
					__( 'zoomOutRight', 'media_center_vc_extend' ) => 'zoomOutRight',
					__( 'zoomOutUp', 'media_center_vc_extend' ) => 'zoomOutUp',
				),
      		),

			array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Banner Text Position', 'media_center_vc_extend' ),
	      		'param_name' => 'banner_text_position',
	      		'value' => array(
					__( 'Left', 'media_center_vc_extend' ) => 'text-left',
					__( 'Right', 'media_center_vc_extend' )   => 'text-right',
					__( 'Center', 'media_center_vc_extend' )   => 'text-center',
				),
      		),

	      	array(
				'type' => 'textfield',
	         	'class' => '',
	         	'heading' => __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name' => 'el_class',
	         	'description' => __( 'Add your extra classes here.')
	      	)
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center Brands Carousel
#-----------------------------------------------------------------

wpb_map( 
	array(
		'name' => __( 'Brands Carousel', 'media_center_vc_extend' ),
		'base' => 'mc_brands_carousel',
		'description' => __( 'Add a brands carousel to your page', 'media_center_vc_extend' ),
		'class'		=> '',
		'controls' => 'full', 
		'icon' => 'icon-media-center',
		'category' => __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params' => array(
	      	array(
				'type' => 'textfield',
				'heading' => __( 'Title', 'media_center_vc_extend' ),
				'param_name' => 'title',
				'description' => __( 'Enter Carousel title', 'media_center_vc_extend' ),
				'holder' => 'div',
	      	),
	      	
	      	array(
				'type' => 'textfield',
		        'heading' => __( 'Order by', 'media_center_vc_extend' ),
		        'param_name' => 'orderby',
		        'description' => __( ' Sort retrieved posts by parameter. Defaults to \'date\'. One or more options can be passed', 'media_center_vc_extend' ),
		        'value' => 'date',

	      	),

	      	array(
		 	   	'type' => 'textfield',
		        'heading' => __( 'Order', 'media_center_vc_extend' ),
		        'param_name' => 'order',
		        'description' => __( 'Designates the ascending or descending order of the \'orderby\' parameter. Defaults to \'DESC\'.', 'media_center_vc_extend' ),
		        'value' => 'DESC',
	      	),

	      	array(
			    'type' => 'textfield',
		        'heading' => __( 'Number of Brands to display', 'media_center_vc_extend' ),
		        'param_name' => 'per_page',
		        'value' => '12'
	      	),
	      	array(
	      		'type'			=> 'dropdown',
	      		'heading'		=> __( 'Container Class', 'media_center_vc_extend' ),
	      		'param_name'	=> 'container_class',
	      		'value'			=> array(
	      			__( 'Container', 'media_center_vc_extend' ) 		=> 'container',
	      			__( 'Container Fluid', 'media_center_vc_extend' ) 	=> 'container-fluid',
	      			__( 'No Container', 'media_center_vc_extend' )      => 'no-container',
      			)
      		),
	      	array(
				'type' => 'textfield',
	         	'class' => '',
	         	'heading' => __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name' => 'el_class',
	         	'description' => __( 'Add your extra classes here.')
	      	)
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center Products Carousel
#-----------------------------------------------------------------

wpb_map( 
	array(
		'name' => __( 'Products Carousel', 'media_center_vc_extend' ),
		'base' => 'mc_products_carousel',
		'description' => __( 'Add products carousel to your page', 'media_center_vc_extend' ),
		'class'		=> '',
		'controls' => 'full', 
		'icon' => 'icon-media-center',
		'category' => __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params' => array(
	   		array(
	   			'type' => 'textfield',
				'heading' => __( 'Title', 'media_center_vc_extend' ),
				'param_name' => 'title',
				'description' => __( 'Enter Carousel title', 'media_center_vc_extend' ),
				'holder' => 'div'
   			),
			array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Show', 'media_center_vc_extend' ),
	      		'param_name' => 'shortcode_name',
	      		'value' => array(
					__( 'Recent Products', 'media_center_vc_extend' ) => 'recent_products',
					__( 'Featured Products', 'media_center_vc_extend' )   => 'featured_products',
					__( 'Top Rated Products', 'media_center_vc_extend' )   => 'top_rated_products',
					__( 'On Sale Products', 'media_center_vc_extend' ) => 'sale_products',
					__( 'Best Selling Products', 'media_center_vc_extend' ) => 'best_selling_products',
					__( 'Select Products by Category', 'media_center_vc_extend' ) => 'product_category',
					__( 'Select Products by IDs', 'media_center_vc_extend' ) => 'products_ids',
					__( 'Select Products by SKUs', 'media_center_vc_extend' ) => 'products_skus',
				),
				'description' => __( 'Choose what type of products you want to show in the carousel')
      		),
      		array(
      			'type' => 'textfield',
				'heading' => __( 'IDs', 'media_center_vc_extend' ),
				'param_name' => 'ids',
				'description' => __( 'Note : This option is applicable only for Select Products by IDs. Specify IDs of products you want to show separated by comma. Example : 1, 2, 3, 4, 5', 'media_center_vc_extend' ),
  			),
  			array(
      			'type' => 'textfield',
				'heading' => __( 'SKUs', 'media_center_vc_extend' ),
				'param_name' => 'skus',
				'description' => __( 'Note : This option is applicable only for Select Products by SKUs. Specify SKUs of products you want to show separated by comma. Example : foo, bar, baz', 'media_center_vc_extend' ),
  			),
  			array(
      			'type' => 'textfield',
				'heading' => __( 'Category', 'media_center_vc_extend' ),
				'param_name' => 'category',
				'description' => __( 'Note : This option is applicable only for Select Products by Category. Specify the category slug of the category of products you want to show', 'media_center_vc_extend' ),
  			),
      		array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Order By', 'media_center_vc_extend' ),
	      		'param_name' => 'orderby',
	      		'value' => array(
					__( 'Menu Order', 'media_center_vc_extend' ) => 'menu_order',
					__( 'Title', 'media_center_vc_extend' )   => 'title',
					__( 'Date', 'media_center_vc_extend' )   => 'date',
					__( 'Random', 'media_center_vc_extend' )   => 'rand',
					__( 'ID', 'media_center_vc_extend' )   => 'id',
				),
				'description' => __( 'Does not apply for Best Selling Products', 'media_center_vc_extend')
      		),
      		array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Order Direction', 'media_center_vc_extend' ),
	      		'param_name' => 'order',
	      		'value' => array(
					__( 'Descending', 'media_center_vc_extend' ) => 'desc',
					__( 'Ascending', 'media_center_vc_extend' )   => 'asc',
				),
				'description' => __( 'Does not apply for Best Selling Products', 'media_center_vc_extend')
      		),
      		array(
				'type' => 'textfield',
	         	'heading' => __( 'No of Products', 'media_center_vc_extend' ),
	         	'param_name' => 'per_page',
	         	'value' => '12'
	      	),
	      	array(
	      		'type'			=> 'dropdown',
	      		'heading'		=> __( 'Container Class', 'media_center_vc_extend' ),
	      		'param_name'	=> 'container_class',
	      		'value'			=> array(
	      			__( 'Container', 'media_center_vc_extend' ) 		=> 'container',
	      			__( 'Container Fluid', 'media_center_vc_extend' ) 	=> 'container-fluid',
	      			__( 'No Container', 'media_center_vc_extend' )      => 'no-container',
      			)
      		),
	      	array(
				'type' => 'dropdown',
	         	'heading' => __( 'No of Columns', 'media_center_vc_extend' ),
	         	'param_name' => 'columns',
	         	'value' => array(
					__( '4 - Best suited for pages with sidebar', 'media_center_vc_extend' ) => '4',
					__( '6 - Best suited for Full-width pages', 'media_center_vc_extend' )   => '6',
				),
	      	),
	      	array(
				'type' => 'textfield',
	         	'heading' => __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name' => 'el_class',
	         	'description' => __( 'Add your extra classes here.')
	      	)
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center 6-1 Products Grid
#-----------------------------------------------------------------

wpb_map( 
	array(
		'name' => __( '6-1 Products Grid', 'media_center_vc_extend' ),
		'base' => 'mc_6_1_products_grid',
		'description' => __( 'Add 6-1 Products Grid to your page', 'media_center_vc_extend' ),
		'class'		=> '',
		'controls' => 'full', 
		'icon' => 'icon-media-center',
		'category' => __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params' => array(
	   		array(
	   			'type' => 'textfield',
				'heading' => __( 'Title', 'media_center_vc_extend' ),
				'param_name' => 'title',
				'description' => __( 'Enter Carousel title', 'media_center_vc_extend' ),
				'holder' => 'div'
   			),
			array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Show', 'media_center_vc_extend' ),
	      		'param_name' => 'shortcode_name',
	      		'value' => array(
					__( 'Recent Products', 'media_center_vc_extend' ) => 'recent_products',
					__( 'Featured Products', 'media_center_vc_extend' )   => 'featured_products',
					__( 'Top Rated Products', 'media_center_vc_extend' )   => 'top_rated_products',
					__( 'On Sale Products', 'media_center_vc_extend' ) => 'sale_products',
					__( 'Best Selling Products', 'media_center_vc_extend' ) => 'best_selling_products',
					__( 'Select Products by Category', 'media_center_vc_extend' ) => 'product_category',
					__( 'Select Products by IDs', 'media_center_vc_extend' ) => 'products_ids',
					__( 'Select Products by SKUs', 'media_center_vc_extend' ) => 'products_skus',
				),
				'description' => __( 'Choose what type of products you want to show in the carousel')
      		),
      		array(
      			'type' => 'textfield',
				'heading' => __( 'IDs', 'media_center_vc_extend' ),
				'param_name' => 'ids',
				'description' => __( 'Note : This option is applicable only for Select Products by IDs. Specify IDs of products you want to show separated by comma. Example : 1, 2, 3, 4, 5', 'media_center_vc_extend' ),
  			),
  			array(
      			'type' => 'textfield',
				'heading' => __( 'SKUs', 'media_center_vc_extend' ),
				'param_name' => 'skus',
				'description' => __( 'Note : This option is applicable only for Select Products by SKUs. Specify SKUs of products you want to show separated by comma. Example : foo, bar, baz', 'media_center_vc_extend' ),
  			),
  			array(
      			'type' => 'textfield',
				'heading' => __( 'Category', 'media_center_vc_extend' ),
				'param_name' => 'category',
				'description' => __( 'Note : This option is applicable only for Select Products by Category. Specify the category slug of the category of products you want to show', 'media_center_vc_extend' ),
  			),
      		array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Order By', 'media_center_vc_extend' ),
	      		'param_name' => 'orderby',
	      		'value' => array(
					__( 'Menu Order', 'media_center_vc_extend' ) => 'menu_order',
					__( 'Title', 'media_center_vc_extend' )   => 'title',
					__( 'Date', 'media_center_vc_extend' )   => 'date',
					__( 'Random', 'media_center_vc_extend' )   => 'rand',
					__( 'ID', 'media_center_vc_extend' )   => 'id',
				),
				'description' => __( 'Does not apply for Best Selling Products', 'media_center_vc_extend')
      		),
      		array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Order Direction', 'media_center_vc_extend' ),
	      		'param_name' => 'order',
	      		'value' => array(
					__( 'Descending', 'media_center_vc_extend' ) => 'desc',
					__( 'Ascending', 'media_center_vc_extend' )   => 'asc',
				),
				'description' => __( 'Does not apply for Best Selling Products', 'media_center_vc_extend')
      		),
	      	array(
				'type' => 'textfield',
	         	'heading' => __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name' => 'el_class',
	         	'description' => __( 'Add your extra classes here.')
	      	)
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center Vertical Class
#-----------------------------------------------------------------

wpb_map( 
	array(
		'name' 			=> __( 'Vertical Menu', 'media_center_vc_extend' ),
		'base' 			=> 'mc_vertical_menu',
		'description' 	=> __( 'Add a vertical menu to your home page', 'media_center_vc_extend' ),
		'class'			=> '',
		'controls' 		=> 'full', 
		'icon' 			=> 'icon-media-center',
		'category' 		=> __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params' 		=> array(
	      	array(
				'type' 		 	=> 'textfield',
				'heading' 	 	=> __( 'Title', 'media_center_vc_extend' ),
				'param_name' 	=> 'title',
				'holder' 	 	=> 'div',
	      	),

	      	array(
				'type' 			=> 'textfield',
				'heading' 		=> __( 'Title Icon Class', 'media_center_vc_extend' ),
				'param_name' 	=> 'icon_class',
				'description' 	=> sprintf( __('Fontawesome Icon Class. Default icon is <em>fa-list</em>. For complete list of icon classes %s', 'media_center_vc_extend' ), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">' . __( 'Click here', 'media_center_vc_extend' ) . '</a>' ),
	      	),
	      	
	      	array(
				'type' 			=> 'textfield',
		        'heading' 		=> __( 'Menu', 'media_center_vc_extend' ),
		        'param_name' 	=> 'menu',
		        'description' 	=> __( 'Menu ID, slug, or name. Leave it empty to pull all categories', 'media_center_vc_extend')
	      	),

	      	array(
	      		'type'			=> 'dropdown',
	      		'heading'		=> __( 'Dropdown Trigger', 'media_center_vc_extend' ),
	      		'param_name'	=> 'dropdown_trigger',
	      		'value'			=> array(
	      			__( 'Click', 'media_center_vc_extend' ) => 'click',
	      			__( 'Hover', 'media_center_vc_extend' ) => 'hover',
      			)
      		),

      		array(
	      		'type'			=> 'dropdown',
	      		'heading'		=> __( 'Dropdown Animation', 'media_center_vc_extend' ),
	      		'param_name'	=> 'dropdown_animation',
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
      			)
      		),

	      	array(
				'type' 			=> 'textfield',
	         	'class' 		=> '',
	         	'heading' 		=> __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name' 	=> 'el_class',
	         	'description' 	=> __( 'Add your extra classes here.', 'media_center_vc_extend' )
	      	)
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center Service Icon Element
#-----------------------------------------------------------------

wpb_map( 
	array(
		'name' => __( 'Service Icon', 'media_center_vc_extend' ),
		'base' => 'mc_service_icon',
		'description' => __( 'Add a service icon to your page.', 'media_center_vc_extend' ),
		'class'		=> '',
		'controls' => 'full', 
		'icon' => 'icon-media-center',
		'category' => __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params' => array(
	      	array(
				 'type' => 'textfield',
		         'heading' => __( 'Title', 'media_center_vc_extend' ),
		         'param_name' => 'title',
		         'description' => __( 'Enter service title', 'media_center_vc_extend' ),
		         'holder' => 'div'
	      	),
	      	array(
				 'type' => 'textarea',
		         'heading' => __( 'Service Description', 'media_center_vc_extend' ),
		         'param_name' => 'description',
		         'description' => __( 'Enter service description', 'media_center_vc_extend'),
		         'holder' => 'div'
	      	),
	      	array(
				 'type' => 'textfield',
		         'heading' => __( 'Service Icon Class', 'media_center_vc_extend' ),
		         'param_name' => 'icon_class',
				 'description' => sprintf( __('Fontawesome Icon Class. Default icon is <em>fa-list</em>. For complete list of icon classes %s', 'media_center_vc_extend' ), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">' . __( 'Click here', 'media_center_vc_extend' ) . '</a>' ),
	      	),
	      	array(
				'type' => 'textfield',
	         	'class' => '',
	         	'heading' => __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name' => 'el_class',
	         	'description' => __( 'Add your extra classes here.')
	      	)
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center Team Member
#-----------------------------------------------------------------

wpb_map( 
	array(
		'name' 			=> __( 'Team Member', 'media_center_vc_extend' ),
		'base' 			=> 'mc_team_member',
		'description' 	=> __( 'Add a team member profile to your page.', 'media_center_vc_extend' ),
		'class'			=> '',
		'controls' 		=> 'full', 
		'icon' 			=> 'icon-media-center',
		'category' 		=> __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params' => array(
	      	array(
				 'type' 		=> 'textfield',
		         'heading' 		=> __( 'Full Name', 'media_center_vc_extend' ),
		         'param_name' 	=> 'name',
		         'description' 	=> __( 'Enter team member full name', 'media_center_vc_extend' ),
		         'holder' 		=> 'div'
	      	),
	      	array(
				 'type' 		=> 'textfield',
		         'heading' 		=> __( 'Designation', 'media_center_vc_extend' ),
		         'param_name' 	=> 'designation',
		         'description' 	=> __( 'Enter designation of team member', 'media_center_vc_extend'),
	      	),
	      	array(
				'type' 			=> 'attach_image',
	         	'heading' 		=> __( 'Profile Pic', 'media_center_vc_extend' ),
	         	'param_name' 	=> 'profile_pic',	
	      	),
	      	array(
	      		'type' 			=> 'dropdown',
	      		'heading'		=> __( 'Display Style', 'media_center_vc_extend' ),
	      		'value' 		=> array(
	      			__( 'Square', 'media_center_vc_extend' ) => 'square',
	      			__( 'Circle', 'media_center_vc_extend' ) => 'circle'
      			),
      			'param_name'	=> 'display_style',
      		),
      		array(
      			'type' 			=> 'textfield',
	         	'class' 		=> '',
	         	'heading' 		=> __( 'Link', 'media_center_vc_extend' ),
	         	'param_name' 	=> 'link',
	         	'description' 	=> __( 'Add link to the team member. Leave blank if there aren\'t any', 'media_center_vc_extend' )
  			),
	      	array(
				'type' 			=> 'textfield',
	         	'class' 		=> '',
	         	'heading' 		=> __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name' 	=> 'el_class',
	         	'description' 	=> __( 'Add your extra classes here.', 'media_center_vc_extend' )
	      	)
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center GMap
#-----------------------------------------------------------------

wpb_map( 
	array(
		'name'        => __( 'Google Map', 'media_center_vc_extend' ),
		'base'        => 'mc_gmap',
		'description' => __( 'Add a Google Map to your page.', 'media_center_vc_extend' ),
		'class'		  => '',
		'controls'    => 'full', 
		'icon' 		  => 'icon-media-center',
		'category'    => __( 'Media Center Elements', 'media_center_vc_extend' ),
	   	'params'      => array(
	      	array(
				 'type'       => 'textfield',
		         'heading'    => __( 'Latitude', 'media_center_vc_extend' ),
		         'param_name' => 'lat',
		         'holder'     => 'div'
	      	),
	      	array(
				'type'       => 'textfield',
		        'heading'    => __( 'Longitude', 'media_center_vc_extend' ),
		        'param_name' => 'lon',
		        'holder'     => 'div'
	      	),
	      	array(
				'type'       => 'textfield',
		        'heading'    => __( 'Zoom', 'media_center_vc_extend' ),
		        'param_name' => 'zoom',
	      	),
	      	array(
	      		'type'			=> 'textfield',
	      		'class'			=>  '',
	      		'heading'		=> __( 'Minimum Height in px', 'media_center_vc_extend' ),
	      		'param_name'	=> 'map_min_height',
	      		'value'			=> '460px'
      		),
	      	array(
				'type'        => 'textfield',
	         	'class'       => '',
	         	'heading'     => __( 'Extra Class', 'media_center_vc_extend' ),
	         	'param_name'  => 'el_class',
	         	'description' => __( 'Add your extra classes here.')
	      	),
	      	array(
	      		'type' => 'dropdown',
	      		'heading' => __( 'Display Get Direction', 'media_center_vc_extend' ),
	      		'param_name' => 'add_get_directions',
	      		'value' => array(
					__( 'Yes', 'media_center_vc_extend' ) => 'yes',
					__( 'No', 'media_center_vc_extend' )  => 'no',
				),
				'description' => __( 'Should display "Get Direction" form ?', 'media_center_vc_extend')
      		),
	   	)
	) 
);

#-----------------------------------------------------------------
# Media Center Home Page Tabs
#-----------------------------------------------------------------

wpb_map(
	array(
		'name'			=> __( 'Home Page Tabs', 'media_center_vc_extend' ),
		'base'  		=> 'mc_home_page_tabs',
		'description'	=> __( 'Product Tabs for Home', 'media_center_vc_extend' ),
		'category'		=> __( 'Media Center Elements', 'media_center_vc_extend' ),
		'icon' 			=> 'icon-media-center',
		'params' 		=> array(
			array(
				'type'			=> 'textfield',
				'heading'		=> __('Tab #1 title', 'media_center_vc_extend' ),
				'param_name'	=> 'title_tab_1',
			),

			array(
				'type'			=> 'dropdown',
				'heading'		=> __( 'Tab #1 Content, Show :', 'media_center_vc_extend' ),
				'param_name'	=> 'content_sc_tab_1',
				'value'			=> array(
					__( 'Featured Products', 'media_center' )		=> 'featured_products' ,
					__( 'On Sale Products', 'media_center' )		=> 'sale_products' 	,
					__( 'Top Rated Products', 'media_center' )		=> 'top_rated_products' ,
					__( 'Recent Products', 'media_center' )			=> 'recent_products' 	,
					__( 'Best Selling Products', 'media_center' )	=> 'best_selling_products',
				),
			),

			array(
				'type'			=> 'textfield',
				'heading'		=> __('Tab #2 title', 'media_center_vc_extend' ),
				'param_name'	=> 'title_tab_2',
			),

			array(
				'type'			=> 'dropdown',
				'heading'		=> __( 'Tab #2 Content, Show :', 'media_center_vc_extend' ),
				'param_name'	=> 'content_sc_tab_2',
				'value'			=> array(
					__( 'Featured Products', 'media_center' )		=> 'featured_products' ,
					__( 'On Sale Products', 'media_center' )		=> 'sale_products' 	,
					__( 'Top Rated Products', 'media_center' )		=> 'top_rated_products' ,
					__( 'Recent Products', 'media_center' )			=> 'recent_products' 	,
					__( 'Best Selling Products', 'media_center' )	=> 'best_selling_products',
				),
			),

			array(
				'type'			=> 'textfield',
				'heading'		=> __('Tab #3 title', 'media_center_vc_extend' ),
				'param_name'	=> 'title_tab_3',
			),

			array(
				'type'			=> 'dropdown',
				'heading'		=> __( 'Tab #3 Content, Show :', 'media_center_vc_extend' ),
				'param_name'	=> 'content_sc_tab_3',
				'value'			=> array(
					__( 'Featured Products', 'media_center' )		=> 'featured_products' ,
					__( 'On Sale Products', 'media_center' )		=> 'sale_products' 	,
					__( 'Top Rated Products', 'media_center' )		=> 'top_rated_products' ,
					__( 'Recent Products', 'media_center' )			=> 'recent_products' 	,
					__( 'Best Selling Products', 'media_center' )	=> 'best_selling_products',
				),
			),
		),
	)
);

endif;