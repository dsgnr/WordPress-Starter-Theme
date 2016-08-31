<?php
/**
 * The sidebar containing the main widget area.
 * @package _wordpress-starter-theme
 */

if ( is_active_sidebar( 'main-sidebar' ) ) {
    dynamic_sidebar( 'main-sidebar' );
}

?>