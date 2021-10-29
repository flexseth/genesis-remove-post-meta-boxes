<?php /*
Add to functions.php in your child theme
*/


/* Declutter UI: Remove scripts section from post editor */
add_action( 'admin_menu' , 'remove_genesis_post_scripts_box' );
function remove_genesis_post_scripts_box() {
	remove_meta_box( 'genesis_inpost_scripts_box', 'page', 'normal' );
	remove_meta_box( 'genesis_inpost_scripts_box', 'post', 'normal' );
}
