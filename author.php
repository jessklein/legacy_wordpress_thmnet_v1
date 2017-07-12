<?php
/**
 * The template used to display Author Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since 3.0.0
 */
?>

<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php the_post(); ?>

				<h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'twentyten' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>

<?php rewind_posts(); ?>

<?php
	/* Run the loop for the author archive page to output the authors posts
	 * If you want to overload this in a child theme then include a file
	 * called loop-author.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'author' );
?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
