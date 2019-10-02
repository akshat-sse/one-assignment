<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage one_test
 * @since 1.0.0
 */
?>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
 <button class="menu-toggle mobile-only" aria-controls="sticky_menu" aria-expanded="false">Menu</button><div class="site-logo">
	<?php if ( has_custom_logo() ) {
	     
	     the_custom_logo();}else{ ?>

		<h1 class="site-title">
         <a href="https://wpaddon-static.cdn-one.com/themes/coach/preview/index.html" rel="home">COACH</a></h1>

	<?php } ?>
</div>
</div>
<div class="col-md-8 desktop-only">
                        <!-- START nav container -->
	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="primary-nav" class="nav primary-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
</div>
	