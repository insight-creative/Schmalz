<div id="swup" class="transition-fade sub-nav">
  <nav class="w-70" role="navigation" aria-label="primary navigation">
    <h2 class="screen-reader-text">Sub page navigation menu</h2>
    <div class="sub-nav-wrapper">
      <?php
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
        <?php echo $children; ?>
      </ul>
      <?php endif; ?>
    </div>
  </nav><!-- #sub-navigation -->
</div>
