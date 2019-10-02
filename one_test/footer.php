<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="site-footer" role="footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright © All Rights Reserved.  </p>
                </div>
            </div>
        </div>
    </div>
	</footer><!-- #colophon -->

</div><!-- #page -->
</div><!-- #wrapper -->
<?php wp_footer(); ?>

</body>
</html>
