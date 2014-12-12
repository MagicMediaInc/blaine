<?php
if ( !class_exists( 'ReduxFramework' ) ) {
	return;
}

if ( !class_exists( "Media_Center_Theme_Options" ) ) {

	class Media_Center_Theme_Options {
		
		public function __construct( ) {
			// Base Config for Media Center
			add_action( 'after_setup_theme', array($this, 'load_config') );
		}

		public function load_config() {

			$entranceAnimations = array(
				'none'				=> __( 'No Animation', 'media_center_settings' ),
		        'bounceIn'			=> __( 'BounceIn', 'media_center_settings' ),
		        'bounceInDown'		=> __( 'BounceInDown', 'media_center_settings' ),
		        'bounceInLeft'		=> __( 'BounceInLeft', 'media_center_settings' ),
		        'bounceInRight'		=> __( 'BounceInRight', 'media_center_settings' ),
		        'bounceInUp'		=> __( 'BounceInUp', 'media_center_settings' ),
				'fadeIn'			=> __( 'FadeIn', 'media_center_settings' ),
				'fadeInDown'		=> __( 'FadeInDown', 'media_center_settings' ),
				'fadeInDownBig'		=> __( 'FadeInDown Big', 'media_center_settings' ),
				'fadeInLeft'		=> __( 'FadeInLeft', 'media_center_settings' ),
				'fadeInLeftBig'		=> __( 'FadeInLeft Big', 'media_center_settings' ),
				'fadeInRight'		=> __( 'FadeInRight', 'media_center_settings' ),
				'fadeInRightBig'	=> __( 'FadeInRight Big', 'media_center_settings' ),
				'fadeInUp'			=> __( 'FadeInUp', 'media_center_settings' ),
				'fadeInUpBig'		=> __( 'FadeInUp Big', 'media_center_settings' ),
				'flipInX'			=> __( 'FlipInX', 'media_center_settings' ),
				'flipInY'			=> __( 'FlipInY', 'media_center_settings' ),
				'lightSpeedIn'		=> __( 'LightSpeedIn', 'media_center_settings' ),
				'rotateIn' 			=> __( 'RotateIn', 'media_center_settings' ),
				'rotateInDownLeft' 	=> __( 'RotateInDown Left', 'media_center_settings' ),
				'rotateInDownRight' => __( 'RotateInDown Right', 'media_center_settings' ),
				'rotateInUpLeft' 	=> __( 'RotateInUp Left', 'media_center_settings' ),
				'rotateInUpRight' 	=> __( 'RotateInUp Right', 'media_center_settings' ),
				'roleIn'			=> __( 'RoleIn', 'media_center_settings' ),
		        'zoomIn'			=> __( 'ZoomIn', 'media_center_settings' ),
				'zoomInDown'		=> __( 'ZoomInDown', 'media_center_settings' ),
				'zoomInLeft'		=> __( 'ZoomInLeft', 'media_center_settings' ),
				'zoomInRight'		=> __( 'ZoomInRight', 'media_center_settings' ),
				'zoomInUp'			=> __( 'ZoomInUp', 'media_center_settings' ),
			);

			$sections = array(

				array(
					'title' => __('General', 'media_center_settings'),
					'icon' 	=> 'fa fa-dot-circle-o',
					'fields' => array(
						array(
							'title' => __('Favicon', 'media_center_settings'),
							'subtitle' => __('<em>Upload your custom Favicon image. <br>.ico or .png file required.</em>', 'media_center_settings'),
							'id' => 'favicon',
							'type' => 'media',
							'default' => array(
								'url' => get_template_directory_uri() . '/favicon.ico',
							),
						),
						
						array(
							'title' => __('Your Logo', 'media_center_settings'),
							'subtitle' => __('<em>Upload your logo image. Recommended dimension : 233x54 pixels</em>', 'media_center_settings'),
							'id' => 'site_logo',
							'type' => 'media',
						),
						
						array(
							'title' => __('Use text instead of logo ?', 'media_center_settings'),
							'id' => 'use_text_logo',
							'type' => 'checkbox',
							'default' => '0',
						),
						
						array(
							'title' => __('Logo Text', 'media_center_settings'),
							'subtitle' => __('<em>Will be displayed only if use text logo is checked.</em>', 'media_center_settings'),
							'id' => 'logo_text',
							'type' => 'text',
							'default' => 'Media Center',
							'required' => array(
								0 => 'use_text_logo',
								1 => '=',
								2 => 1,
							),
						),

						array(
							'title' => __('Scroll to Top', 'media_center_settings'),
							'id' => 'scroll_to_top',
							'on' => __('Enabled', 'media_center_settings'),
							'off' => __('Disabled', 'media_center_settings'),
							'type' => 'switch',
							'default' => 1,
						),
					),
				),

				array(
					'title' => __('Header', 'media_center_settings'),
					'icon' 	=> 'fa fa-arrow-circle-o-up',
					'fields' => array(
						array(
							'id'		=> 'header_style',
							'type' 		=> 'radio',
							'title'		=> __( 'Header Style', 'media_center_settings' ),
							'options' => array(
								'header-style-1' => __( 'Header 1', 'media_center_settings' ),
								'header-style-2' => __( 'Header 2', 'media_center_settings' )
							),
							'default' => 'header-style-1',
						),
						array(
							'id' => 'top_bar_info',
							'icon' => true,
							'type' => 'info',
							'raw' => __('<h3 style="margin: 0;">Top Bar</h3>', 'media_center_settings'),
						),
						array(
							'title' => __('Top Bar', 'media_center_settings'),
							'subtitle' => __('<em>Enable / Disable the Top Bar.</em>', 'media_center_settings'),
							'id' => 'top_bar_switch',
							'on' => __('Enabled', 'media_center_settings'),
							'off' => __('Disabled', 'media_center_settings'),
							'type' => 'switch',
							'default' => 1,
						),
						array(
							'title' => __('Top Bar Left', 'media_center_settings'),
							'subtitle' => __('<em>Enable / Disable the Top Bar Left Navigation.</em>', 'media_center_settings'),
							'id' => 'top_bar_left_switch',
							'on' => __('Enabled', 'media_center_settings'),
							'off' => __('Disabled', 'media_center_settings'),
							'type' => 'switch',
							'default' => 1,
						),
						array(
							'title' => __('Top Bar Right', 'media_center_settings'),
							'subtitle' => __('<em>Enable / Disable the Top Bar Right Navigation.</em>', 'media_center_settings'),
							'id' => 'top_bar_right_switch',
							'on' => __('Enabled', 'media_center_settings'),
							'off' => __('Disabled', 'media_center_settings'),
							'type' => 'switch',
							'default' => 1,
						),
						/*array(
							'title' => __('Top Bar Background Color', 'media_center_settings'),
							'subtitle' => __('<em>The Top Bar background color.</em>', 'media_center_settings'),
							'id' => 'top_bar_background_color',
							'type' => 'color',
							'default' => '#f9f9f9',
							'transparent' => false,
							'required' => array(
								0 => 'top_bar_switch',
								1 => '=',
								2 => 1,
							),
						),
						array(
							'title' => __('Top Bar Text Color', 'media_center_settings'),
							'subtitle' => __('<em>Specify the Top Bar Typography.</em>', 'media_center_settings'),
							'id' => 'top_bar_typography',
							'type' => 'color',
							'default' => '#3d3d3d',
							'transparent' => false,
							'required' => array(
								0 => 'top_bar_switch',
								1 => '=',
								2 => 1,
							),
						),*/

						array(
							'id' => 'main_header_info',
							'icon' => true,
							'type' => 'info',
							'raw' => '<h3 style="margin: 0;">Main Header</h3>',
						),

						array(
							'title' => __('Sticky Header', 'media_center_settings'),
							'subtitle' => __('<em>Enable / Disable the Sticky Header. Available only for Header Style 2</em>', 'media_center_settings'),
							'id' => 'sticky_header',
							'on' => __('Enabled', 'media_center_settings'),
							'off' => __('Disabled', 'media_center_settings'),
							'type' => 'switch',
							'default' => 0,
						),

						array(
							'title' => __('Support Phone Number', 'media_center_settings'),
							'id' => 'header_support_phone',
							'type' => 'text',
							'default' => '(+800) 123 456 7890',
						),

						array(
							'title' => __( 'Support Email Address', 'media_center_settings' ),
							'id' => 'header_support_email',
							'type' => 'text',
							'default' => 'contact@support.com',
						),

						array(
							'id' 	=> 'search_bar_info',
							'icon' 	=> true,
							'type' 	=> 'info',
							'raw' 	=> __('<h3 style="margin: 0;">Search Bar</h3>', 'media_center_settings'),
						),

						array(
							'title' 	=> __( 'Live Search', 'media_center_settings' ),
							'id'		=> 'live_search',
							'type'		=> 'switch',
							'default'	=> 1,
							'on'		=> __( 'Enabled', 'media_center_settings' ),
							'off'		=> __( 'Disabled', 'media_center_settings' )
						),

						array(
							'title' 	=> __( 'Search Result Template', 'media_center_settings' ),
							'id'		=> 'live_search_template',
							'type' 		=> 'ace_editor',
							'mode' 		=> 'html',
							'required' 	=> array( 'live_search', 'equals', 1 ),
							'default'	=> '<p>{{value}}</p>',
							'desc'		=> __( 'Available parameters : {{value}}, {{url}}, {{image}}, {{brand}} and {{{price}}}', 'media_center_settings')
						),

						array(
							'title' 	=> __( 'Show Categories Filter', 'media_center_settings' ),
							'id'		=> 'display_search_categories_filter',
							'type'		=> 'switch',
							'default'	=> 1,
							'on'		=> __( 'Yes', 'media_center_settings' ),
							'off'		=> __( 'No', 'media_center_settings' )
						),

						array(
							'title' 	=> __( 'Search Category Dropdown', 'media_center_settings' ),
							'id' 		=> 'header_search_dropdown',
							'type' 		=> 'radio',
							'options' 	=> array(
								'hsd0' 	=> __( 'Include only top level categories', 'media_center_settings' ),
								'hsd1' 	=> __( 'Include all categories', 'media_center_settings' )
							),
							'default' 	=> 'hsd0',
							'required' 	=> array( 'display_search_categories_filter', 'equals', 1 )
						),
					),
				),

				array(
					'title'				=> __( 'Navigation', 'media_center_settings' ),
					'icon'				=> 'fa fa-navicon',
					'fields'			=> array(
						array(
							'id' 		=> 'top_bar_left_info',
							'icon' 		=> true,
							'type' 		=> 'info',
							'raw' 		=> '<h3 style="margin: 0;">Top Bar Left Menu</h3>',
						),
						array(
							'title'		=> __( 'Dropdown Trigger', 'media_center_settings' ),
							'id'		=> 'top_bar_left_menu_dropdown_trigger',
							'type'		=> 'select',
							'options'	=> array(
								'click'	=> __( 'Click', 'media_center_settings' ),
								'hover'	=> __( 'Hover', 'media_center_settings' ),
							),
							'default'	=> 'click',
						),
						array(
							'title'		=> __( 'Dropdown Animation', 'media_center_settings' ),
							'id'		=> 'top_bar_left_menu_dropdown_animation',
							'type'		=> 'select',
							'options'	=> $entranceAnimations,
							'default'	=> 'fadeInUp',
						),

						array(
							'id' 		=> 'top_bar_right_info',
							'icon' 		=> true,
							'type' 		=> 'info',
							'raw' 		=> '<h3 style="margin: 0;">Top Bar Right Menu</h3>',
						),
						array(
							'title'		=> __( 'Dropdown Trigger', 'media_center_settings' ),
							'id'		=> 'top_bar_right_menu_dropdown_trigger',
							'type'		=> 'select',
							'options'	=> array(
								'click'	=> __( 'Click', 'media_center_settings' ),
								'hover'	=> __( 'Hover', 'media_center_settings' ),
							),
							'default'	=> 'click',
						),
						array(
							'title'		=> __( 'Dropdown Animation', 'media_center_settings' ),
							'id'		=> 'top_bar_right_menu_dropdown_animation',
							'type'		=> 'select',
							'options'	=> $entranceAnimations,
							'default'	=> 'fadeInUp',
						),

						array(
							'id' 		=> 'main_navigation_info',
							'icon' 		=> true,
							'type' 		=> 'info',
							'raw' 		=> '<h3 style="margin: 0;">Main Navigation Menu</h3>',
						),
						array(
							'title'		=> __( 'Dropdown Trigger', 'media_center_settings' ),
							'id'		=> 'main_navigation_menu_dropdown_trigger',
							'type'		=> 'select',
							'options'	=> array(
								'click'	=> __( 'Click', 'media_center_settings' ),
								'hover'	=> __( 'Hover', 'media_center_settings' ),
							),
							'default'	=> 'click',
						),
						array(
							'title'		=> __( 'Dropdown Animation', 'media_center_settings' ),
							'id'		=> 'main_navigation_menu_dropdown_animation',
							'type'		=> 'select',
							'options'	=> $entranceAnimations,
							'default'	=> 'fadeInUp',
						),

						array(
							'id' 		=> 'shop_by_departments_info',
							'icon' 		=> true,
							'type' 		=> 'info',
							'raw' 		=> '<h3 style="margin: 0;">Shop By Departments Menu</h3>',
						),

						array(
							'title'		=> __( 'Dropdown Trigger', 'media_center_settings' ),
							'id'		=> 'shop_by_departments_menu_dropdown_trigger',
							'type'		=> 'select',
							'options'	=> array(
								'click'	=> __( 'Click', 'media_center_settings' ),
								'hover'	=> __( 'Hover', 'media_center_settings' ),
							),
							'default'	=> 'click',
						),
						array(
							'title'		=> __( 'Dropdown Animation', 'media_center_settings' ),
							'id'		=> 'shop_by_departments_menu_dropdown_animation',
							'type'		=> 'select',
							'options'	=> $entranceAnimations,
							'default'	=> 'fadeInUp',
						),

						array(
							'id' 		=> 'wpml_info',
							'icon' 		=> true,
							'type' 		=> 'info',
							'raw' 		=> '<h3 style="margin: 0;">Language and Currency Switcher</h3>',
						),

						array(
							'title'		=> __( 'Language Switcher', 'media_center_settings' ),
							'id'		=> 'enable_language_switcher',
							'type'		=> 'switch',
							'on'		=> __( 'Enabled', 'media_center_settings' ),
							'off'		=> __( 'Disabled', 'media_center_settings' ),
							'subtitle'	=> __( '<em>Available only if WPML Plugin is enabled</em>', 'media_center_settings' ),
							'default'	=> 1,
						),

						array(
							'title'		=> __( 'Language Switcher Position', 'media_center_settings' ),
							'id'		=> 'language_switcher_position',
							'type'		=> 'select',
							'options'	=>  array(
								'top_bar_left'	=> __( 'Top Bar Left Menu', 'media_center_settings' ),
								'top_bar_right'	=> __( 'Top Bar Right Menu', 'media_center_settings' ),
							),
							'default'	=> 'top_bar_right',
						),
						array(
							'title'		=> __( 'Currency Switcher', 'media_center_settings' ),
							'id'		=> 'enable_currency_switcher',
							'type'		=> 'switch',
							'on'		=> __( 'Enabled', 'media_center_settings' ),
							'off'		=> __( 'Disabled', 'media_center_settings' ),
							'subtitle'	=> __( '<em>Available only if WPML Plugin and WooCommerce Multilingual is enabled</em>', 'media_center_settings' ),
							'default'	=> 1,
						),
						array(
							'title'		=> __( 'Currency Switcher Position', 'media_center_settings' ),
							'id'		=> 'currency_switcher_position',
							'type'		=> 'select',
							'options'	=>  array(
								'top_bar_left'	=> __( 'Top Bar Left Menu', 'media_center_settings' ),
								'top_bar_right'	=> __( 'Top Bar Right Menu', 'media_center_settings' ),
							),
							'default'	=> 'top_bar_right',
						),
					)
				),

				array(
					'title' => __('Footer', 'media_center_settings'),
					'icon' 	=> 'fa fa-arrow-circle-o-down',
					'fields' => array(
						array(
							'title' => __('Footer Contact Info Text', 'media_center_settings'),
							'id' => 'footer_contact_info_text',
							'type' => 'textarea',
							'default' => __('Feel free to contact us via phone,email or just send us mail.', 'media_center_settings'),
						),

						array(
							'title' => __('Footer Contact Info Address', 'media_center_settings'),
							'id' => 'footer_contact_info_address',
							'type' => 'textarea',
							'default' => '17 Princess Road, London, Greater London NW1 8JR, UK 1-888-8MEDIA (1-888-892-9953)',
						),

						array(
							'title' => __('Footer Payment Images', 'media_center_settings'),
							'subtitle' => __('<em>Upload your payment images. Preferred dimension for each image 40x29 px.</em>', 'media_center_settings'),
							'id' => 'credit_card_icons_gallery',
							'type' => 'gallery',
						),

						array(
							'title' => __('Footer Copyright Text', 'media_center_settings'),
							'subtitle' => __('<em>Enter your copyright information here.</em>', 'media_center_settings'),
							'id' => 'footer_copyright_text',
							'type' => 'textarea',
							'default' => '&copy; <a href="#">Media Center</a> - All Rights Reserved',
						),
					),
				),

				array(

					'title' => __('Shop', 'media_center_settings'),
					'icon' 	=> 'fa fa-shopping-cart',
					'fields' => array(
						
						array(
							'id' => 'shop_general_info',
							'icon' => true,
							'type' => 'info',
							'raw' => '<h3 style="margin: 0;">General</h3>',
						),

						array(
							'title' => __('Catalog Mode', 'media_center_settings'),
							'subtitle' => __('<em>Enable / Disable the Catalog Mode.</em>', 'media_center_settings'),
							'desc' => __('<em>When enabled, the feature Turns Off the shopping functionality of WooCommerce.</em>', 'media_center_settings'),
							'id' => 'catalog_mode',
							'on' => __('Enabled', 'media_center_settings'),
							'off' => __('Disabled', 'media_center_settings'),
							'type' => 'switch',
						),

						array(
							'title' 	=> __('Default View', 'media_center_settings'),
							'subtitle' 	=> __('<em>Choose a default view between grid and list views.</em>', 'media_center_settings'),
							'id' 		=> 'shop_default_view',
							'type'		=> 'select',
							'options'	=> array(
								'grid-view'	=> __( 'Grid View', 'media_center_settings' ),
								'list-view' => __( 'List View', 'media_center_settings' ),
							),
							'default'	=> 'grid-view',
						),

						array(
							'title' 	=> __('Remember User View ?', 'media_center_settings' ),
							'desc'		=> __( 'When user switches a view, should we maintain the view in all pages ?', 'media_center_settings' ),
							'id' 		=> 'remember_user_view',
							'type'		=> 'switch',
							'on'		=> __( 'Yes', 'media_center_settings' ),
							'off'		=> __( 'No', 'media_center_settings' ),
							'default'	=> 0
						),

						array(
							'title' => __('Product Item Size', 'media_center_settings'),
							'subtitle' => __('Product item size determines the number of products per row.', 'media_center_settings'),
							'id' => 'product_item_size',
							'type' => 'select',
							'options' => array(
								'size-small' => __( 'Small', 'media_center_settings'),
								'size-medium' => __( 'Medium', 'media_center_settings'),
								'size-big' => __( 'Large', 'media_center_settings'),
							),
							'default' => 'size-medium',
						),

						array(
							'title' 		=> __('Number of Products per Page', 'media_center_settings'),
							'subtitle' 		=> __('<em>Drag the slider to set the number of products per page <br />to be listed on the shop page and catalog pages.</em>', 'media_center_settings'),
							'id' 			=> 'products_per_page',
							'min' 			=> '3',
							'step' 			=> '1',
							'max' 			=> '48',
							'type' 			=> 'slider',
							'default' 		=> '15',
							'display_value' => 'label'
						),

						array(
							'id' => 'shop_product_item',
							'icon' => true,
							'type' => 'info',
							'raw' => '<h3 style="margin: 0;">Product Item Settings</h3>',
						),

						array(
							'title' 	=> __('Product Item Animation', 'media_center_settings'),
							'subtitle' 	=> __('<em>A list of all the product animations.</em>', 'media_center_settings'),
							'id' 		=> 'products_animation',
							'type' 		=> 'select',
							'options' 	=> $entranceAnimations,
							'default' 	=> 'none',
						),

						array(
							'title' => __('Echo Lazy loading', 'media_center_settings'),
							'subtitle' => __( '<em>Lazy load product images. Product images will not be loaded until scrolled into view.</em>', 'media_center_settings' ),
							'id' => 'lazy_loading',
							'on' => __('Enabled', 'media_center_settings'),
							'off' => __('Disabled', 'media_center_settings'),
							'type' => 'switch',
							'default' => 1,
						),

						array(
							'title' 	=> __( 'Hard Crop Images ?', 'media_center_settings' ),
							'subtitle'	=> __( 'If you do not like your images to be cropped, please select "No"', 'media_center_settings' ),
							'type'		=> 'switch',
							'on'		=> __( 'Yes', 'media_center_settings' ),
							'off'		=> __( 'No', 'media_center_settings' ),
							'id'		=> 'hard_crop_images',
							'default'	=> 0,
							'desc'		=> __( 'You will have to regenerate thumbnails after changing this setting', 'media_center_settings' ),
						),

						array(
							'id' => 'shop_page_settings',
							'icon' => true,
							'type' => 'info',
							'raw' => '<h3 style="margin: 0;">Shop Page Settings</h3>',
						),

						array(
							'id'      => 'shop_page_layout',
							'title'   => __( 'Shop Page Layout', 'media_center_settings' ),
							'type'	  => 'select',
							'options' => array(
								'full-width' 	=> __( 'Full-width', 'media_center_settings' ),
								'sidebar-left'  => __( 'Left Sidebar', 'media_center_settings' ),
								'sidebar-right' => __( 'Right Sidebar', 'media_center_settings' ),
							),
							'default' => 'sidebar-left'
						),

						array(
							'id'      => 'single_product_layout',
							'title'   => __( 'Single Product Page Layout', 'media_center_settings' ),
							'type'	  => 'select',
							'options' => array(
								'full-width' 	=> __( 'Full-width', 'media_center_settings' ),
								'sidebar-left'  => __( 'Left Sidebar', 'media_center_settings' ),
								'sidebar-right' => __( 'Right Sidebar', 'media_center_settings' ),
							),
							'default' => 'full-width'
						),

						array(
							'title'		=> __( 'Product Comparision Page', 'media_center_settings' ),
							'subtitle'	=> __( 'This sets the product comparison page for your shop', 'media_center_settings' ),
							'type'		=> 'select',
							'data'		=> 'pages',
							'id'		=> 'product_comparison_page'
						),
					),
				),

				array(
					'title' => __('Blog', 'media_center_settings'),
					'icon' 	=> 'fa fa-list-alt',
					'fields' => array(
						array(
							'title' 	=> __('Blog Layout', 'media_center_settings'),
							'subtitle' 	=> __('<em>Select the layout for the Blog Listing. <br />The second option will enable the Blog Listing Sidebar.</em>', 'media_center_settings'),
							'id' 		=> 'blog_layout',
							'type' 		=> 'image_select',
							'options' 	=> array(
								'sidebar_right' 	=> get_template_directory_uri() . '/framework/images/theme_options/icons/blog_right_sidebar.png',
								'without_sidebar' 	=> get_template_directory_uri() . '/framework/images/theme_options/icons/blog_no_sidebar.png',
								'sidebar_left' 		=> get_template_directory_uri() . '/framework/images/theme_options/icons/blog_left_sidebar.png',
							),
							'default' 	=> 'sidebar_right',
						),
						array(
							'title' 	=> __('Blog Style', 'media_center_settings'),
							'subtitle' 	=> __('<em>Select the layout style for the Blog Listing.</em>', 'media_center_settings'),
							'id' 		=> 'blog_style',
							'type' 		=> 'select',
							'options' 	=> array(
								'normal' 		=> __( 'Normal', 'media_center_settings' ),
								'list-view' 	=> __( 'List View', 'media_center_settings' ),
								'grid-view'		=> __( 'Grid View', 'media_center_settings' )
							),
							'default' 	=> 'normal',
						),
						array(
							'title' 	=> __( 'Full width Density', 'media_center_settings' ),
							'subtitle'  => __( 'Applicable only if you choose <em>without sidebar</em> option for blog layout', 'media_center_settings' ),
							'id' 		=> 'full_width_density',
							'type' 		=> 'radio',
							'options'	=> array(
								'wide' 			=> __( 'Wide', 'media_center_settings' ),
								'narrow' => __( 'Narrow', 'media_center_settings' )
							),
							'default' 	=> 'narrow',
						),
						array(
							'title'		=> __( 'Force Excerpt', 'media_center_settings' ),
							'subtitle'  => __( 'Show only excerpt instead of blog content in archive pages', 'media_center_settings' ),
							'id'		=> 'force_excerpt',
							'on' 		=> __('Yes', 'media_center_settings'),
							'off' 		=> __('No', 'media_center_settings'),
							'type' 		=> 'switch',
							'default' 	=> 0,		
						),
						array(
							'title'		=> __( 'Excerpt Length', 'media_center_settings' ),
							'id'		=> 'excerpt_length',
							'type'		=> 'text',
							'default'	=> 75,
							'required'	=> array( 'force_excerpt', 'equals', 1 )		
						),
					),
				),

				array(
					'title' => __('Styling', 'media_center_settings'),
					'icon' 	=> 'fa fa-pencil-square-o',
					'fields' => array(
						array(
							'title' 	=> __( 'Use a predefined color scheme', 'media_center_settings' ),
							'on' 		=> __('Yes', 'media_center_settings'),
							'off' 		=> __('No', 'media_center_settings'),
							'type' 		=> 'switch',
							'default' 	=> 1,
							'id' 		=> 'use_predefined_color'
						),
						array(
							'title' 	=> __('Main Theme Color', 'media_center_settings'),
							'subtitle' 	=> __('<em>The main color of the site.</em>', 'media_center_settings'),
							'id' 		=> 'main_color',
							'type' 		=> 'select',
							'options' 	=> array(
								'green' 	 => __( 'Green', 'media_center_settings' ) ,
								'blue' 		 => __( 'Blue', 'media_center_settings' ) ,
								'red' 		 => __( 'Red', 'media_center_settings' ) ,
								'orange' 	 => __( 'Orange', 'media_center_settings' ) ,
								'navy' 		 => __( 'Navy', 'media_center_settings' ) ,
								'dark-green' => __( 'Dark-green', 'media_center_settings' ) ,
							),
							'default' 	=> 'green',
							'required' 	=> array( 'use_predefined_color', 'equals', 1 ),
						),
						array(
							'id' 		=> 'main_custom_color',
							'icon' 		=> true,
							'type' 		=> 'info',
							'raw'   	=> '<h3>'. __( 'Using a Custom theme Color', 'media_center_settings' ). '</h3>' .
										   '<p>' . __( 'Using a custom color is simple but it requires a few extra steps.', 'media_center_settings' ) . '</p>' .
										   '<p>' . __( 'Method 1 (Recommended) : Using LESS', 'media_center_settings' ) . '</p>' .
										   '<ol>' .
										   '<li>'. __( 'Navigate to <em>assets/less/custom-color.less</em> file.', 'media_center_settings' ) . '</li>'.
										   '<li>'. __( 'On line 7, set <mark>@primary-color</mark> to the color of your choice.', 'media_center_settings' ) . '</li>'.
										   '<li>'. __( 'Compile <em>assets/less/custom-color.less</em> file to <em>assets/css/custom-color.css</em>', 'media_center_settings' ) . '</li>'.
										   '<li>'. __( 'You can also use <a href="http://less2css.org" target="_blank">less2css.org</a> to compile the LESS file and copy the output to <em>assets/css/custom-color.css</em>', 'media_center_settings' ) . '</li>'.
										   '</ol>'.
										   '<p>' . __( 'Method 2 : Using CSS and Find and Replace', 'media_center_settings' ) . '</p>' .
										   '<ol>' .
										   '<li>'. __( 'Navigate to <em>assets/css/green.css</em> file.', 'media_center_settings' ) . '</li>'.
										   '<li>'. __( 'Copy the entire file content and paste it in <em>assets/css/custom-color.css</em>.', 'media_center_settings' ) . '</li>'.
										   '<li>'. __( 'Open <em>assets/css/custom-color.css</em> file using your favourite code editor.', 'media_center_settings' ) . '</li>'.
										   '<li>'. __( 'Do a find and replace of green color which is #59b210 with your choice of color.', 'media_center_settings' ) . '</li>'.
										   '<li>'. __( 'We have also used darken and lighten version of the primary color. Replace them as well.', 'media_center_settings' ) . '</li>'.
										   '</ol>'.
										   '</ol>',
							'required' 	=> array( 'use_predefined_color', 'equals', 0 )
						),
					),
				),

				array(
					'title' => __('Typography', 'media_center_settings'),
					'icon' => 'fa fa-font',
					'fields' => array(
						array(
							'title' 	=> __( 'Use default font settings ?', 'media_center_settings' ),
							'subtitle'	=> __( '<em>Toggle No if you want to override with your own fonts</em>', 'media_center_settings' ),
							'id'		=> 'use_default_font',
							'type'		=> 'switch',
							'on'		=> __( 'Yes', 'media_center_settings' ),
							'off'		=> __( 'No', 'media_center_settings' ),
							'default'   => 1
						),
						array(
							'title' 		=> __('Default Font Family', 'media_center_settings'),
							'subtitle' 		=> __('<em>Pick the default font family for your site.</em>', 'media_center_settings'),
							'id' 			=> 'default_font',
							'type' 			=> 'typography',
							'line-height' 	=> false,
							'text-align' 	=> false,
							'font-style' 	=> false,
							'font-weight' 	=> false,
							'font-size' 	=> false,
							'color' 		=> false,
							'required'		=> array( 'use_default_font', 'equals', 0 ),
							'default' 		=> array(
								'font-family' 	=> 'Open Sans',
								'subsets' 		=> '',
							),
						),

						array(
							'title' 		=> __('Title Font Family', 'media_center_settings'),
							'subtitle' 		=> __('<em>Pick the font family for titles for your site.</em>', 'media_center_settings'),
							'id' 			=> 'title_font',
							'type' 			=> 'typography',
							'line-height' 	=> false,
							'text-align' 	=> false,
							'font-style' 	=> false,
							'font-weight' 	=> false,
							'font-size' 	=> false,
							'color' 		=> false,
							'default' 		=> array(
								'font-family' 	=> 'Open Sans',
								'subsets' 		=> '',
							),
							'required'		=> array( 'use_default_font', 'equals', 0 ),
						),
					),
				),

				array(
					'title' => __('Social Media', 'media_center_settings'),
					'icon' => 'fa fa-share-square-o',
					'fields' => array(
						array(
							'title' => __('Facebook', 'media_center_settings'),
							'subtitle' => __('<em>Type your Facebook profile URL here.</em>', 'media_center_settings'),
							'id' => 'facebook_link',
							'type' => 'text',
							'default' => 'https://www.facebook.com/transvelo',
						),
						array(
							'title' => __('Twitter', 'media_center_settings'),
							'subtitle' => __('<em>Type your Twitter profile URL here.</em>', 'media_center_settings'),
							'id' => 'twitter_link',
							'type' => 'text',
							'default' => 'http://twitter.com/transvelo',
						),
						array(
							'title' => __('Pinterest', 'media_center_settings'),
							'subtitle' => __('<em>Type your Pinterest profile URL here.</em>', 'media_center_settings'),
							'id' => 'pinterest_link',
							'type' => 'text',
							'default' => 'http://www.pinterest.com/',
						),
						array(
							'title' => __('LinkedIn', 'media_center_settings'),
							'subtitle' => __('<em>Type your LinkedIn profile URL here.</em>', 'media_center_settings'),
							'id' => 'linkedin_link',
							'type' => 'text',
						),
						array(
							'title' => __('Google+', 'media_center_settings'),
							'subtitle' => __('<em>Type your Google+ profile URL here.</em>', 'media_center_settings'),
							'id' => 'googleplus_link',
							'type' => 'text',
						),
						array(
							'title' => __('RSS', 'media_center_settings'),
							'subtitle' => __('<em>Type your RSS Feed URL here.</em>', 'media_center_settings'),
							'id' => 'rss_link',
							'type' => 'text',
						),

						array(
							'title' => __('Tumblr', 'media_center_settings'),
							'subtitle' => __('<em>Type your Tumblr URL here.</em>', 'media_center_settings'),
							'id' => 'tumblr_link',
							'type' => 'text',
						),

						array(
							'title' => __('Instagram', 'media_center_settings'),
							'subtitle' => __('<em>Type your Instagram profile URL here.</em>', 'media_center_settings'),
							'id' => 'instagram_link',
							'type' => 'text',
						),

						array(
							'title' => __('Youtube', 'media_center_settings'),
							'subtitle' => __('<em>Type your Youtube profile URL here.</em>', 'media_center_settings'),
							'id' => 'youtube_link',
							'type' => 'text',
						),

						array(
							'title' => __('Vimeo', 'media_center_settings'),
							'subtitle' => __('<em>Type your Vimeo profile URL here.</em>', 'media_center_settings'),
							'id' => 'vimeo_link',
							'type' => 'text',
						),

						array(
							'title' => __('Dribbble', 'media_center_settings'),
							'subtitle' => __('<em>Type your Dribble profile URL here.</em>', 'media_center_settings'),
							'id' => 'dribbble_link',
							'type' => 'text',
						),

						array(
							'title' => __('Stumble Upon', 'media_center_settings'),
							'subtitle' => __('<em>Type your Stumble Upon profile URL here.</em>', 'media_center_settings'),
							'id' => 'stumble_upon_link',
							'type' => 'text',
						),
					),
				),

				array(
					'title' => __('Custom Code', 'media_center_settings'),
					'icon' => 'fa fa-code',
					'fields' => array(

						array(
							'title' => __('Custom CSS', 'media_center_settings'),
							'subtitle' => __('<em>Paste your custom CSS code here.</em>', 'media_center_settings'),
							'id' => 'custom_css',
							'type' => 'ace_editor',
							'mode' => 'css',
						),

						array(
							'title' => __('Header JavaScript Code', 'media_center_settings'),
							'subtitle' => __('<em>Paste your custom JS code here. The code will be added to the header of your site.</em>', 'media_center_settings'),
							'id' => 'header_js',
							'type' => 'ace_editor',
							'mode' => 'javascript',
						),

						array(
							'title' => __('Footer JavaScript Code', 'media_center_settings'),
							'subtitle' => __('<em>Here is the place to paste your Google Analytics code or any other JS code you might want to add to be loaded in the footer of your website.</em>', 'media_center_settings'),
							'id' => 'footer_js',
							'type' => 'ace_editor',
							'mode' => 'javascript',
						),
					),
				),
			);

			// Change your opt_name to match where you want the data saved.
			$args = array(
				'opt_name' => 'media_center_theme_options',
				'menu_title' => __( 'MC Options', 'media_center_settings' ),
				'page_priority' => 3,
				'allow_sub_menu' => false,
				'intro_text' => '',
				'footer_credit' => '&nbsp;',
				'page_slug' => 'theme_options',
				'google_api_key' => 'AIzaSyDGJehqeZnxz4hABrNgi9KrBTG7ev6rIgY',
			);

			// Use this section if this is for a theme. Replace with plugin specific data if it is for a plugin.
			$theme = wp_get_theme();
			$args['display_name'] = $theme->get('Name');
			$args['display_version'] = $theme->get('Version');

			$ReduxFramework = new ReduxFramework($sections, $args);
		}	
	}
	new Media_Center_Theme_Options();
}