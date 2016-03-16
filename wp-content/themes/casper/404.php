<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package casper
 */

get_header(); ?>

	<!-- Header -->
	<header class="text-center" name="home">
		<div class="intro-text">
			<h1 class="wow fadeInDown">
				<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'casper' ); ?>
			</h1>
			<p class="wow fadeInDown" ><?php esc_html_e( 'It looks like nothing was found at this location.', 'casper' ); ?></p>
		</div>
	</header>

<?php
get_footer();
