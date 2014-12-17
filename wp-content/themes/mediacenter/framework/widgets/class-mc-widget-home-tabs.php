<?php
/**
 * Home Tabs Widget
 *
 * @author 		Ibrahim Ibn Dawood
 * @category 	Widgets
 * @package 	MediaCenter/Framework/Widgets
 * @version 	1.0.0
 * @extends 	WC_Widget
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class MC_Widget_Home_Tabs extends WC_Widget {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->widget_cssclass    = 'tab-holder';
		$this->widget_description = __( 'A list or dropdown of product categories.', 'media_center' );
		$this->widget_id          = 'media_center_home_tabs';
		$this->widget_name        = __( 'Media Center Home Tabs', 'media_center' );
		$this->settings           = array(
			'title_tab_1'  => array(
				'type'  => 'text',
				'std'   => __( 'Featured', 'media_center' ),
				'label' => __( 'Tab #1 Title', 'media_center' )
			),
			'content_tab_1' => array(
				'type'    => 'select',
				'std'     => 'featured_products',
				'label'   => __( 'Show', 'media_center' ),
				'options' => array(
					'featured_products' 	=> __( 'Productos Catacterísticos', 'media_center' ),
					'sale_products' 		=> __( 'Productos en Venta', 'media_center' ),
					'top_rated_products' 	=> __( 'Mejores Productos', 'media_center' ),
					'recent_products' 		=> __( 'Productos Recientes', 'media_center' ),
					'best_selling_products' => __( 'Mejores Vendidos', 'media_center' ),
				)
			),
			'title_tab_2'  => array(
				'type'  => 'text',
				'std'   => __( 'Nuevas adquisiciones', 'media_center' ),
				'label' => __( 'Tab #2 Title', 'media_center' )
			),
			'content_tab_2' => array(
				'type'    => 'select',
				'std'     => 'recent_products',
				'label'   => __( 'Ver', 'media_center' ),
				'options' => array(
					'featured_products' 	=> __( 'Productos Catacterísticos', 'media_center' ),
					'sale_products' 		=> __( 'Productos en Venta', 'media_center' ),
					'top_rated_products' 	=> __( 'Mejores Productos', 'media_center' ),
					'recent_products' 		=> __( 'Productos Recientes', 'media_center' ),
					'best_selling_products' => __( 'Mejores Vendidos', 'media_center' ),
				)
			),
			'title_tab_3'  => array(
				'type'  => 'text',
				'std'   => __( 'MEjores Ventas', 'media_center' ),
				'label' => __( 'Tab #3 Title', 'media_center' )
			),
			'content_tab_3' => array(
				'type'    => 'select',
				'std'     => 'best_selling_products',
				'label'   => __( 'Show', 'media_center' ),
				'options' => array(
					'featured_products' 	=> __( 'Productos Catacterísticos', 'media_center' ),
					'sale_products' 		=> __( 'Productos en Venta', 'media_center' ),
					'top_rated_products' 	=> __( 'Mejores Productos', 'media_center' ),
					'recent_products' 		=> __( 'Productos Recientes', 'media_center' ),
					'best_selling_products' => __( 'Mejores Vendidos', 'media_center' ),
				)
			),
			'product_item_size' => array(
				'type'    => 'select',
				'std'     => 'size-medium',
				'label'   => __( 'Tamaño del Producto', 'media_center' ),
				'options' => array(
					'size-big'    => __( 'Grande', 'media_center' ),
					'size-medium' => __( 'Mediano', 'media_center' ),
					'size-small'  => __( 'Pequeño', 'media_center' ),
				)
			),
			'screen_width' => array(
				'type'    => 'select',
				'std'     => '100',
				'label'   => __( 'Layout Type', 'media_center' ),
				'options' => array(
					'100' => __( 'Full Width', 'media_center' ),
					'75'  => __( 'Has Sidebar', 'media_center' )
				)
			)
		);
		parent::__construct();
	}

	/**
	 * widget function.
	 *
	 * @see WP_Widget
	 * @access public
	 * @param array $args
	 * @param array $instance
	 * @return void
	 */
	public function widget( $args, $instance ) {

		if ( $this->get_cached_widget( $args ) )
			return;

		ob_start();
		extract( $args );

		$vars['title_tab_1']   		= sanitize_title( $instance['title_tab_1'] );
		$sc_tab_1 					= sanitize_title( $instance['content_tab_1'] );
		$vars['title_tab_2']   		= sanitize_title( $instance['title_tab_2'] );
		$sc_tab_2 					= sanitize_title( $instance['content_tab_2'] );
		$vars['title_tab_3']   		= sanitize_title( $instance['title_tab_3'] );
		$sc_tab_3 					= sanitize_title( $instance['content_tab_3'] );

		echo $before_widget;

		$vars['content_tab_1'] = do_shortcode( '['. $sc_tab_1 . ' product_item_size="size-medium" screen_width="100" per_page="4"]' );
		$vars['content_tab_2'] = do_shortcode( '['. $sc_tab_2 . ' product_item_size="size-medium" screen_width="100" per_page="4"]' );
		$vars['content_tab_3'] = do_shortcode( '['. $sc_tab_3 . ' product_item_size="size-medium" screen_width="100" per_page="4"]' );

		echo wc_get_template('framework/templates/widgets/home-page-tabs.php', $vars );

		echo $after_widget;

		$content = ob_get_clean();

		echo $content;

		$this->cache_widget( $args, $content );
	}
}

register_widget( 'MC_Widget_Home_Tabs' );