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