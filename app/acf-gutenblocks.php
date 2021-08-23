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

function acf_hero_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'hero_block',
			'title'				=> __('Hero Block'),
			'description'		=> __('A Custom Hero Block'),
			'render_template'	=> 'template-parts/gutenblocks/hero.php',
			'category'			=> 'layout',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="44" viewBox="0 0 36 44"><path data-name="Book" d="M7 0L0 7v32a5 5 0 005 5h21a7.82 7.82 0 003-1s7-5 7-8V0H7zm26 3v31c0 1.26-2 3-2 3V4H7.312a2.216 2.216 0 011.849-1H33zM17 7h4v8.88L19 14l-2 2V7zM5 41a2 2 0 01-2-2V9a2 2 0 012-2h9v15l5-4 5 4V7h4v32a2 2 0 01-2 2H5z" fill-rule="evenodd"/></svg>',
			'keywords'			=> array( 'hero' ),
		));
		}
	}

add_action('acf/init', 'acf_hero_block');

function acf_lawnguard_solutions_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'lawnguard_solutions_block',
			'title'				=> __('LawnGuard Solutions Block'),
			'description'		=> __('A Custom LawnGuard Solutions Block'),
			'render_template'	=> 'template-parts/gutenblocks/lawnguard-solutions.php',
			'category'			=> 'layout',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M12.4 64c-3.2 0-6.1-1.3-8.5-3.5-4.8-4.8-4.8-12.5 0-17.1l13.6-13.9c2.1-2.1 5.6-2.1 7.5 0l9.6 9.6c2.1 2.1 2.1 5.3 0 7.5L20.9 60.5c-2.1 2.2-5.3 3.5-8.5 3.5zm8.8-30.7L7.6 47.2c-2.7 2.7-2.7 6.9 0 9.6 2.4 2.7 6.9 2.7 9.6 0l13.6-13.9-9.6-9.6z"/><path d="M25.7 41.1c-.8 0-1.3-.3-1.9-.8-1.1-1.1-1.1-2.7 0-3.7l24.8-25.1-.5-.3c-1.1-1.1-1.1-2.7 0-3.7l.3-.3-2.7-2.7c-1.1-1.1-1.1-2.7 0-3.7s2.7-1.1 3.7 0l13.3 13.3c1.1 1.1 1.1 2.7 0 3.7-1.1 1.1-2.7 1.1-3.7 0l-2.7-2.7-.3.3c-1.1 1.1-2.7 1.1-3.7 0l-.3-.3L27.3 40c-.2.8-.8 1.1-1.6 1.1z"/></svg>',
			'keywords'			=> array( 'solutions' ),
		));
		}
	}

add_action('acf/init', 'acf_lawnguard_solutions_block');

function acf_cta_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'cta_block',
			'title'				=> __('Call To Action Block'),
			'description'		=> __('A Custom Call to Action Block'),
			'render_template'	=> 'template-parts/gutenblocks/cta.php',
			'category'			=> 'layout',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" width="44" height="40" viewbox="0 0 44 40"><path d="M35 3a6 6 0 016 6v16a6 6 0 01-6 6H16.75L10 37v-6H9a6 6 0 01-6-6V9a6 6 0 016-6h26m0-3H9a9.012 9.012 0 00-9 9v16a9.024 9.024 0 007 8.78V37a3.012 3.012 0 001.771 2.74A3.109 3.109 0 0010 40a2.99 2.99 0 001.994-.76l5.9-5.24H35a9.012 9.012 0 009-9V9a9.012 9.012 0 00-9-9zM23.5 17a1.5 1.5 0 11-1.5-1.5 1.5 1.5 0 011.5 1.5zm10 0a1.5 1.5 0 11-1.5-1.5 1.5 1.5 0 011.5 1.5zm-19.875 0a1.5 1.5 0 11-1.5-1.5 1.5 1.5 0 011.5 1.5z" fill-rule="evenodd"/></svg>',
			'keywords'			=> array( 'Call to Action, Contact, cta' ),
		));
		}
	}

add_action('acf/init', 'acf_cta_block');

?>
