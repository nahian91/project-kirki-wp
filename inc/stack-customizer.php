<?php

Kirki::add_config( 'stack_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


Kirki::add_panel( 'stack_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Stack Options', 'stack' ),
    'description' => esc_html__( 'Description', 'stack' ),
) );

Kirki::add_field( 'stack_config', [
	'type'        => 'custom',
	'settings'    => 'bannar_content_setting',
	'section'     => 'bannar_section',
	'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'Bannar Content', 'stack' ) . '</h3>',
	'priority'    => 10,
] );

// Bannar Section
Kirki::add_section( 'bannar_section', array(
    'title'          => esc_html__( 'Bannar Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

// Bannar Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'bannar_heading',
	'label'    => esc_html__( 'Bannar Heading', 'stack' ),
	'section'  => 'bannar_section',
	'default'  => esc_html__( 'We Discover, Design & Build Digital
    Presence of Businesses', 'stack' ),
	'priority' => 10,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.head-title',
            'function' => 'html'
        )
    )
] );

// Bannar Heading Typography
Kirki::add_field( 'stack_config', [
	'type'        => 'typography',
	'settings'    => 'bannar_heading_typo',
	'label'       => esc_html__( 'Bannar Heading Typography', 'stack' ),
	'section'     => 'bannar_section',
	'default'     => [
		'font-family'    => 'Titillium Web',
		'variant'        => '700',
		'font-size'      => '30px',
		'line-height'    => '48px',
		'letter-spacing' => '0',
		'color'          => '#585b60',
		'text-transform' => 'uppercase',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area .contents .head-title',
		],
	],
] );

// Bannar Btn Text
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'bannar_btn_text',
	'label'    => esc_html__( 'Bannar Button Text', 'stack' ),
	'section'  => 'bannar_section',
	'default'  => esc_html__( 'Explore', 'stack' ),
	'priority' => 10,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-common',
            'function' => 'html'
        )
    )
] );

// Bannar Btn Link
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'bannar_btn_link',
	'label'    => esc_html__( 'Bannar Button Link', 'stack' ),
	'section'  => 'bannar_section',
	'default'  => esc_html__( 'https://www.google.com', 'stack' ),
	'priority' => 10,
] );

// Bannar Image
Kirki::add_field( 'stack_config', [
	'type'     => 'image',
	'settings' => 'bannar_image',
	'label'    => esc_html__( 'Bannar Image', 'stack' ),
	'section'  => 'bannar_section',
	'default'  => '',
] );

// Bannar Section
Kirki::add_field( 'stack_config', [
	'type'        => 'custom',
	'settings'    => 'bannar_section_setting',
	'section'     => 'bannar_section',
	'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'Bannar Section', 'stack' ) . '</h3>',
	'priority'    => 10,
] );

// Bannar Section Image
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'bannar_section_image', 
	'label'       => esc_html__( 'Bannar Section Background', 'kirki' ),
	'section'     => 'bannar_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'fixed',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area',
		],
	],
] );


// About Section
Kirki::add_section( 'about_section', array(
    'title'          => esc_html__( 'About Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

// About Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'about_heading',
	'label'    => esc_html__( 'About Heading', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'We are helping to grow
    your business.', 'stack' )
] );

// About Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'about_desc',
	'label'    => esc_html__( 'About Description', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'stack' )
] );


// About Btn Text
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'about_btn_text',
	'label'    => esc_html__( 'About Button Text', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'More About Us', 'stack' ),
] );

// Bannar Btn Link
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'about_btn_link',
	'label'    => esc_html__( 'About Button Link', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'https://www.google.com', 'stack' ),
	'priority' => 10,
] );


// About Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'About Items', 'kirki' ),
	'section'     => 'about_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'kirki' ),
		'field' => 'about_item_title',
	],
	'button_label' => esc_html__('Add New About Item', 'kirki' ),
	'settings'     => 'about_repeater',
	'default'      => [
		[
            'about_item_icon' => 'lni-microphone',
			'about_item_title' => __( 'What we do', 'kirki' ),
			'about_item_desc'  => __( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores ', 'kirki' ),
		],
	],
	'fields' => [
        'about_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'About Item Icon', 'kirki' ),
			'default'     => '',
            'choices'     => array(
                'lni-microphone' => __('Icon 1', 'stack'),
                'lni-users' => __('Icon 2', 'stack'),
                'lni-medall-alt' => __('Icon 3', 'stack'),
            )
		],
		'about_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'About Item Title', 'kirki' ),
			'default'     => '',
		],
		'about_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'About Item Description', 'kirki' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 3
	],
] );