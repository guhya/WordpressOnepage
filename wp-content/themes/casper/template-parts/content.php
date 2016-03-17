<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casper
 */
?>

<div id="works-section" style="padding-bottom: 0;">
	<div class="container">
		<!-- Container -->
		<?php 
			$id = get_the_ID();
			$thumbnail = get_the_post_thumbnail_url($id);
			
			if ( is_single() ) {
		?>
			<img src="<?=$thumbnail;?>" style="width:100%;">
		<?php
			}else{
		?>
			<img src="<?=$thumbnail;?>" style="width:100%;">
		<?php
			}
		?>
	
		<div class="section-title wow fadeInDown" >
			<?php if ( is_single() ) {?><hr><?php }?>
			<div class="entry-header" class="text-center">
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}
		
				if ( 'post' === get_post_type() ) : ?>
				<p class="entry-meta">
					<?php casper_posted_on(); ?>
				</p><!-- .entry-meta -->
				<?php
				endif; ?>
			</div><!-- .entry-header -->
		</div>
		
		<div class="section-content">
			<div class="clearfix"></div>			
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'casper' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
	
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casper' ),
					'after'  => '</div>',
				) );				
			?>
			<?php if (!is_single()) {?><hr><?php }?>
			<?php if ( is_single() ) {?>
				<br/>			
				<p><h5><?php casper_entry_footer(); ?></h5></p>	
				<hr>
			<?php }?>					
		</div>
		<?php if (!is_single()) {?><div class="space"></div><?php }?>
		
	</div>
</div>
	
	

