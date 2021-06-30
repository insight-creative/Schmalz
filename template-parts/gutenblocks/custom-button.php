<?php $linkOptions = get_field('open_link_in_new_tab'); ?>
<p><a href="<?php echo get_field('button_link') ?>" <?php if( $linkOptions == '1' ) { echo "target='_blank'"; } ?> class="btn-fill-alt fill-alt"><?php echo get_field("button_text"); ?></a></p>
