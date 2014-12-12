<?php
/**
 * Top Bar
 *
 * @author      Ibrahim Ibn Dawood
 * @package     Framework/Templates
 * @version     1.1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $media_center_theme_options;

$top_bar_left_switch = isset( $media_center_theme_options['top_bar_left_switch'] ) ? $media_center_theme_options['top_bar_left_switch'] : true;
$top_bar_right_switch = isset( $media_center_theme_options['top_bar_right_switch'] ) ? $media_center_theme_options['top_bar_right_switch'] : true;
?>

<nav class="top-bar">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin <?php if( $media_center_theme_options['top_bar_left_menu_dropdown_animation'] != 'none' ) { echo 'animate-dropdown'; } ?>">
        <?php 
            if( $top_bar_left_switch ) {
                echo media_center_top_left_nav_menu();
            }
        ?>
        </div><!-- /.col -->
        
        
        <div class="col-xs-12 col-sm-6 no-margin <?php if( $media_center_theme_options['top_bar_right_menu_dropdown_animation'] != 'none' ) { echo 'animate-dropdown'; } ?>">
        <?php 
            if( $top_bar_right_switch ) {
                echo media_center_top_right_nav_menu();
            }
        ?>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->