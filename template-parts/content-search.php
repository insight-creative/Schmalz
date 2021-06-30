<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div class="article-wrapper w-100 w-50-m">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php insightCustom_post_thumbnail(); ?>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title g6 no-margin"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</header><!-- .entry-header -->
		<div class="continue-reading screen-reader-text">
			<?php
			$read_more_link = sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue Reading %s', 'insightCustom' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			);
			?>
			<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark" class="redButton"><?php echo $read_more_link; ?></a>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
