<?php 
// Do not include opening php tag
// Add to functions.php in your child theme

/* Declutter UI: Remove meta boxes from post editor */
add_action( 'admin_menu' , 'remove_genesis_post_scripts_box' );
function remove_genesis_post_scripts_box() {
	// remove Scripts meta box in page and post
	remove_meta_box( 'genesis_inpost_scripts_box', 'page', 'normal' );
	remove_meta_box( 'genesis_inpost_scripts_box', 'post', 'normal' );
	
	// remove SEO meta box in page and post
	remove_meta_box( 'genesis_inpost_seo_box', 'page', 'normal' );
	remove_meta_box( 'genesis_inpost_seo_box', 'post', 'normal' );
}
