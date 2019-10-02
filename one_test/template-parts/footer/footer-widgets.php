<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div class="footer-widgets">
	<div class="container">
                
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			?>
					<div class="row flex-row ">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				<?php
		}
		?>
	</div><!-- .widget-area -->
</div>
<?php endif; ?>
