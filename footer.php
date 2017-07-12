<?php
/**
 * The template used to display the footer
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since 3.0.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php get_sidebar( 'footer' ); ?>

			
		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
