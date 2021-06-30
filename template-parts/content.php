<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<?php
	$featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<div class="article-wrapper w-100 margin-top-50 margin-bottom-50" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php insightCustom_post_thumbnail(); ?>
		<header class="entry-header">
			<span class="post-date posted-on">
				<?php the_time( get_option( 'date_format' ) ); ?>
			</span>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div>
				<p class="post-data byline">
					<span class="post-author">Author: <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a></span>
				</p>
			</div>
		</header><!-- .entry-header -->
		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>
		<div class="read-article-button">
			<a href="<?php the_permalink(); ?>" class="read-article-button">Read Article</a><span class="screen-reader-text"> <?php the_title(); ?></span><br>
		</div>
		<span class="post-cat">
			<?php
				$categories = get_the_category();
				$separator = ' | ';
				$output = '';
				if ( ! empty( $categories ) ) {
						foreach( $categories as $category ) {
								$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
						}
						echo trim( $output, $separator );
				}
			?>
		</span>
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
