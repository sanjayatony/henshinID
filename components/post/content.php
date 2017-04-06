<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HenshinID
 */

?>
<?php if(is_single()) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php else : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
<?php endif;?>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="post-thumbnail <?php echo is_single() ? '':'medium-5 small-12 columns';?>">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'henshin_id-featured-image' ); ?>
			</a>
		</div>
	<?php endif; ?>
	<div class="<?php echo is_single() ? '':'medium-7 small-12 columns';?>">
		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}

			if ( 'post' === get_post_type() ) : ?>
			<?php get_template_part( 'components/post/content', 'meta' ); ?>
			<?php
			endif; ?>
		</header>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Read more %s <span class="meta-nav">...</span>', 'henshin_id' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'henshin_id' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
	<?php if(is_single()) :
			get_template_part( 'components/post/content', 'footer' );
		else : ?>
		<div class="small-10 medium-8 small-centered columns">
			<div class="border"></div>
		</div>
	<?php endif; ?>


</article><!-- #post-## -->