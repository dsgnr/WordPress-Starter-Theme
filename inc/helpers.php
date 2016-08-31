<?php
/********************************************************************
    Useful helpers functions that can be called in the function file
*********************************************************************/



/*********************
RANDOM CLEANUP ITEMS
*********************/
// remove the p from around imgs
// http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
function remove_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// Custom excerpt more
function custom_excerpt_more($more) {
	global $post;
	return '...  <a class="excerpt-read-more" href="'. get_permalink( $post->ID ) . '" title="'. __( 'Read ', 'wordpress-starter-theme' ) . esc_attr( get_the_title( $post->ID ) ).'">'. __( 'Read more &raquo;', 'wordpress-starter-theme' ) .'</a>';
}

?>
