<?php

	// check function exists
	if( function_exists('acf_register_block') ) {
		add_action('acf/init', 'acf_services_block');
	}

	function acf_services_block() {
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'random-bucket-block',
			'title'				=> __('Random Block'),
			'description'		=> __('A completely random block'),
			'render_template'	=> 'template-parts/gutenblocks/a-random-assortment-of-buckets-block.php',
			'category'			=> 'layout',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M12.4 64c-3.2 0-6.1-1.3-8.5-3.5-4.8-4.8-4.8-12.5 0-17.1l13.6-13.9c2.1-2.1 5.6-2.1 7.5 0l9.6 9.6c2.1 2.1 2.1 5.3 0 7.5L20.9 60.5c-2.1 2.2-5.3 3.5-8.5 3.5zm8.8-30.7L7.6 47.2c-2.7 2.7-2.7 6.9 0 9.6 2.4 2.7 6.9 2.7 9.6 0l13.6-13.9-9.6-9.6z"/><path d="M25.7 41.1c-.8 0-1.3-.3-1.9-.8-1.1-1.1-1.1-2.7 0-3.7l24.8-25.1-.5-.3c-1.1-1.1-1.1-2.7 0-3.7l.3-.3-2.7-2.7c-1.1-1.1-1.1-2.7 0-3.7s2.7-1.1 3.7 0l13.3 13.3c1.1 1.1 1.1 2.7 0 3.7-1.1 1.1-2.7 1.1-3.7 0l-2.7-2.7-.3.3c-1.1 1.1-2.7 1.1-3.7 0l-.3-.3L27.3 40c-.2.8-.8 1.1-1.6 1.1z"/></svg>'
		));
	}

function acf_leader_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'leader_block',
			'title'				=> __('Leader Block'),
			'description'		=> __('A Simple Leader block'),
			'render_template'	=> 'template-parts/gutenblocks/leader-block.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'leader, block, leader block' ),
		));
		}
	}

add_action('acf/init', 'acf_leader_block');

function acf_testimonial_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'testimonial_block',
			'title'				=> __('Testimonial Block'),
			'description'		=> __('A Testimonial Slider block'),
			'render_template'	=> 'template-parts/gutenblocks/testimonial-block.php',
			'category'			=> 'layout',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>',
			'keywords'			=> array( 'testimonial block, testimonial slider' ),
		));
		}
	}

add_action('acf/init', 'acf_testimonial_block');

function acf_hiring_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'hiring_block',
			'title'				=> __('Hiring Block'),
			'description'		=> __('Custom Hiring block'),
			'render_template'	=> 'template-parts/gutenblocks/hiring.php',
			'category'			=> 'layout',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-j</title><path d="M332.64,64.58C313.18,43.57,286,32,256,32c-30.16,0-57.43,11.5-76.8,32.38-19.58,21.11-29.12,49.8-26.88,80.78C156.76,206.28,203.27,256,256,256s99.16-49.71,103.67-110.82C361.94,114.48,352.34,85.85,332.64,64.58Z"/><path d="M432,480H80A31,31,0,0,1,55.8,468.87c-6.5-7.77-9.12-18.38-7.18-29.11C57.06,392.94,83.4,353.61,124.8,326c36.78-24.51,83.37-38,131.2-38s94.42,13.5,131.2,38c41.4,27.6,67.74,66.93,76.18,113.75,1.94,10.73-.68,21.34-7.18,29.11A31,31,0,0,1,432,480Z"/></svg>',
			'keywords'			=> array( 'testimonial block, testimonial slider' ),
		));
		}
	}

add_action('acf/init', 'acf_hiring_block');

?>
