<?php
function insightcustom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'insightcustom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'insightcustom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 1', 'insightcustom' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'insightcustom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title footer-widget">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 2', 'insightcustom' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'insightcustom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title footer-widget">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 3', 'insightcustom' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'insightcustom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title footer-widget">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'insightcustom_widgets_init' );
?>
