<?php
/**
 * The sidebar containing the main widget area.
 * @package _wpstartertheme
 */

if ( is_active_sidebar( 'main-sidebar' ) ) {
    dynamic_sidebar( 'main-sidebar' );
}

?>