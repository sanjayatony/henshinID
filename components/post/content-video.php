<?php
/**
 * The template for displaying content video type
 *
 * @package HenshinID
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="small-12 columns">
		<header class="entry-header">
			<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' );
			?>
			<?php get_template_part( 'components/post/content', 'meta' ); ?>
		</header>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Read more %s <span class="meta-nav">...</span>', 'henshin_id' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				if(is_single()) :
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'henshin_id' ),
						'after'  => '</div>',
					) );
				endif;
			?>
		</div>
	</div>
</article>
