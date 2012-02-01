<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
		<?php
		function my_scripts_method() {
		    wp_register_script( 'mainJS', get_bloginfo('template_directory') . '/application.js', array('jquery'));
		    wp_enqueue_script( 'mainJS' );
		}    

		add_action('wp_enqueue_scripts', 'my_scripts_method');
		?>
		<?php wp_head(); ?>

</head>

<body id="index" class="home">
	<div id="top"></div>
	
	<div id="container">
		<?php wp_nav_menu( array( 'container_id' => 'menu', 'theme_location' => 'primary' ) ); ?>
	
		<div id="content">