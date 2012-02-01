<?php
/*
Template Name: Forside
*/
?>
<?php get_header(); ?>
<img id="forside_launch" src="<?php echo bloginfo('template_directory'); ?>/images/forside_launch.png" alt="KALMIA - Effektiv og helhedsoriteret stressbehandling" />
<div class="clearfix" id="home_hero">
	<img id="home_hero_image" src="<?php echo bloginfo('template_directory'); ?>/images/Kalmia_stresscenter_forside.jpg" alt="Kalmia - Stresscentret" width="346" height="237">
	<div id="home_hero_text">ET PROFESSIONELT TILBUD SOM FÅR STRESSRAMTE UD AF EN BEHANDLINGS­KRÆVENDE TILSTAND</div>
</div>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
<div class="clearfix" id="home_footer">
	<div id="home_footer_left_column" class="home_links">
		<h1>Til virksomheden</h1>
			<a href="/til-virksomheden#Behandling af stress">Behandling af stress</a>
			<a href="/til-virksomheden#Forebyggende råd til virksomheden">Forebyggende råd til virksomheden</a>
			<a href="/til-virksomheden#Erhvervsrettede tiltag">Erhvervsrettede tiltag</a>
			<a href="/forskning#Haveterapi Nacadia">Haveterapi Nacadia</a>
	</div>
	<div id="home_footer_right_column" class="home_links">
		<h1>Til den stressramte</h1>
			<a href="/til-den-stressramte#Sygemeldt af stress">Sygemeldt af stress</a>
			<a href="/til-den-stressramte#Advarselstegn">Advarselstegn</a>
			<a href="/til-den-stressramte#Hvad kan du selv gøre?">Hvad kan du selv gøre?</a>
			<a href="/forskning#Haveterapi Nacadia">Haveterapi Nacadia</a>
		<?//php wp_nav_menu( array( 'theme_location' => 'home-right-footer-menu' ) ); ?>
	</div>
</div>
<?php get_footer(); ?>

