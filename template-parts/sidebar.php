<?php
	if ($post->post_parent)	{
		$ancestors=get_post_ancestors($post->ID);
		$root=count($ancestors)-1;
		$parent = $ancestors[$root];
	} else {
		$parent = $post->ID;
	}
	if (is_page()) {
	  if ( $post->post_parent ) {
	    $children = wp_list_pages( array(
	      'title_li' => '',
	      'child_of' => $post->post_parent,
	      'echo'     => 0
	    ) );
	  } else {
	    $children = wp_list_pages( array(
	      'title_li' => '',
	      'child_of' => $post->ID,
	      'echo'     => 0
	    ) );
	  }
	  if ( $children ) : ?>
	  <ul>
	    <?php
	    if ( $parent == "209" || $parent == "211" || $parent == "483" || $parent == "217" ) {
				?>
	      <li><a href="<?php echo esc_url( get_permalink( $parent )); ?>" class="subnav-back flex flex-row flex-align-center"><?php get_template_part( '/app/svg-icons/chevron-left' ); ?><?php echo get_the_title($parent); ?></a></li>
				<?php
	    }
	    ?>
	    <?php echo $children;
			if ( $parent == "483") {
				?>
	      <li><a href="https://support.laforceinc.com/" class="external flex flex-row flex-align-center" target="_blank">Security Systems Remote Support <?php get_template_part("/app/svg-icons/external-link"); ?></a></li>
				<span class="screen-reader-text">Opens Security Systems Remote Support link in a new window</span>
				<?php
	    } elseif ( $parent == "217") {
				?>
	      <li><a href="https://www2.appone.com/Search/Search.aspx?ServerVar=laforceinc.appone.com" class="external flex flex-row flex-align-center" target="_blank">Job Openings <?php get_template_part("/app/svg-icons/external-link"); ?></a></li>
				<span class="screen-reader-text">Opens Job Openings link in a new window</span>
				<?php
			}
			?>
	  </ul>
	  <?php endif;
	}
?>
