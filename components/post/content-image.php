<?php
/**
 * The template for displaying content image type
 *
 * @package HenshinID
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="small-12 columns">
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" data-equalizer-watch>
		<?php
			// Output the featured image.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'henshin_id-featured-image' );
			}
		?>
		</a>

		<header class="entry-header">
			<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' );
			?>
			<?php get_template_part( 'components/post/content', 'meta' ); ?>
		</header>
	</div>
	<div class="small-10 medium-8 small-centered columns">
			<div class="border"></div>
		</div>
</article>
