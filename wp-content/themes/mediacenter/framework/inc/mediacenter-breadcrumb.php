<?php 
if ( ! function_exists( 'media_center_display_breadcrumb' ) ):
function media_center_display_breadcrumb( $header_style ){

	ob_start();
	woocommerce_breadcrumb( array(
		'before'      => '<li><span>',
		'after'       => '</span></li>',
		'delimiter'   => '',
        'wrap_before' => '',
        'wrap_after'  => '',
	) );
	$woocommerce_breadcrumb_output = ob_get_contents();
	ob_end_clean();
	if ( ! empty( $woocommerce_breadcrumb_output ) ) :

		if( $header_style == 'header-style-1') :
?>
<?php 
    global $media_center_theme_options;
    if( isset( $media_center_theme_options['shop_by_departments_menu_dropdown_trigger'] ) && $media_center_theme_options['shop_by_departments_menu_dropdown_trigger'] == 'hover' ){
        $data_hover = 'data-hover="dropdown"';
    }else{
        $data_hover = '';
    }
?>
<div id="top-mega-nav" class="yamm breadcrumb-menu <?php if( $media_center_theme_options['main_navigation_menu_dropdown_animation'] != 'none' ) { echo 'animate-dropdown'; } ?>">
    <div class="container">
        <nav>
            <ul class="inline">
                <li class="dropdown le-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" <?php echo $data_hover; ?>>
                        <i class="fa fa-list"></i> <?php echo __( 'Comprar por Categorías' , 'media_center' ); ?>
                    </a>
                    <?php echo media_center_department_nav_menu(); ?>
                </li>

                <li class="breadcrumb-nav-holder"> 
                	<ul class="mc-breadcrumb">
                		<?php echo $woocommerce_breadcrumb_output; ?>
                	</ul>
                </li><!-- /.breadcrumb-nav-holder -->
            </ul>
        </nav>
    </div><!-- /.container -->
</div>
	<?php else : ?>
<div id="breadcrumb-alt" class="yamm">
    <div class="container">
        <div class="breadcrumb-nav-holder minimal">
            <ul class="mc-breadcrumb">
                <li class="dropdown le-le-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php echo media_center_department_nav_menu(); ?>
                </li>
                <?php echo $woocommerce_breadcrumb_output; ?>
            </ul>
        </div><!-- /.breadcrumb-nav-holder -->
    </div><!-- /.container -->
</div><!-- /#breadcrumb-alt -->
<?php 
		endif; 
	endif;
}
endif;