<?php
function enable_more_buttons($buttons) {
	$buttons[] = 'hr';
	return $buttons;
}
add_theme_support( 'menus' );
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'kalmia' ),
) );

add_filter("mce_buttons", "enable_more_buttons");
// function register_my_menus() {
//   register_nav_menus(
//     array('home-left-footer-menu' => __( 'Venstre spalte på forsiden' ),
//  					'home-right-footer-menu' => __( 'Højre spalte på forsiden' ))
//   );
// }
// add_action( 'init', 'register_my_menus' );
?>