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
	'label'       => esc_html__( 'About Items', 'stack' ),
	'section'     => 'about_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'about_item_title',
	],
	'button_label' => esc_html__('Add New About Item', 'stack' ),
	'settings'     => 'about_repeater',
	'default'      => [
		[
            'about_item_icon' => 'lni-microphone',
			'about_item_title' => __( 'What we do', 'stack' ),
			'about_item_desc'  => __( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores ', 'stack' ),
		],
	],
	'fields' => [
        'about_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'About Item Icon', 'stack' ),
			'default'     => '',
            'choices'     => array(
                'lni-microphone' => __('Icon 1', 'stack'),
                'lni-users' => __('Icon 2', 'stack'),
                'lni-medall-alt' => __('Icon 3', 'stack'),
            )
		],
		'about_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'About Item Title', 'stack' ),
			'default'     => '',
		],
		'about_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'About Item Description', 'stack' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 3
	],
] );


// Services Section
Kirki::add_section( 'services_section', array(
    'title'          => esc_html__( 'Services Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Services Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'services_show',
	'label'    => esc_html__( 'Services Show?', 'stack' ),
	'section'  => 'services_section',
	'default'  => true
] );

// Services Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'services_heading',
	'label'    => esc_html__( 'Services Heading', 'stack' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'Our Services', 'stack' )
] );

//  Services Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'services_desc',
	'label'    => esc_html__( 'Services Description', 'stack' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
	began to grow in 2020.', 'stack' )
] );

// Services Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Services Items', 'stack' ),
	'section'     => 'services_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'service_item_title',
	],
	'button_label' => esc_html__('Add New Service Item', 'stack' ),
	'settings'     => 'services_repeater',
	'default'      => [
		[
            'service_item_icon' => 'lni-pencil',
			'service_item_title' => __( 'Service Title', 'stack' ),
			'service_item_desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack' ),
		],
	],
	'fields' => [
        'service_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Service Item Icon', 'stack' ),
			'default'     => '',
            'choices'     => array(
                'lni-pencil' => __('Pencil', 'stack'),
                'lni-briefcase' => __('Briefcase', 'stack'),
                'lni-cog' => __('Cog', 'stack'),
                'lni-mobile' => __('Mobile', 'stack'),
                'lni-layers' => __('Layers', 'stack'),
                'lni-rocket' => __('Rocket', 'stack'),
            )
		],
		'service_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Service Item Title', 'stack' ),
			'default'     => '',
		],
		'service_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Service Item Description', 'stack' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 6
	],
] );

//  Services Items Align
Kirki::add_field( 'stack_config', [
	'type'     => 'radio-buttonset',
	'settings' => 'services_item_align',
	'label'    => esc_html__( 'Services Items Alignment', 'stack' ),
	'section'  => 'services_section',
	'default'  => 'left',
	'choices'     => [
		'left'   => esc_html__( 'Left', 'stack' ),
		'center' => esc_html__( 'Center', 'stack' ),
		'right'  => esc_html__( 'Right', 'stack' ),
	],
	'output' => array(
		array(
			'element' => '.services-item',
			'property' => 'text-align'
		)
	)
] );

//  Services Items Number
Kirki::add_field( 'stack_config', [
	'type'     => 'select',
	'settings' => 'services_item_number',
	'label'    => esc_html__( 'Services Items Number', 'stack' ),
	'section'  => 'services_section',
	'default'  => 'col-lg-4',
	'choices'     => [
		'col-lg-4'   => esc_html__( '3 Columns', 'stack' ),
		'col-lg-6' => esc_html__( '2 Columns', 'stack' ),
		'col-lg-3'  => esc_html__( '4 Columns', 'stack' ),
	]
] );

// Video Section
Kirki::add_section( 'video_section', array(
    'title'          => esc_html__( 'Video Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Video Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'video_show',
	'label'    => esc_html__( 'Video Show?', 'stack' ),
	'section'  => 'video_section',
	'default'  => true
] );

// Video URL
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'video_url',
	'label'    => esc_html__( 'Video URL', 'stack' ),
	'section'  => 'video_section',
	'default'  => 'https://www.youtube.com/watch?v=yP6kdOZHids'
] );

// Video Title
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'video_title',
	'label'    => esc_html__( 'Video Title', 'stack' ),
	'section'  => 'video_section',
	'default'  => __('Watch Video', 'stack')
] );

// Video Background
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'video_background',
	'label'       => esc_html__( 'Background Control', 'stack' ),
	'section'     => 'video_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.video-promo',
		],
	],
] );


// Team Section
Kirki::add_section( 'team_section', array(
    'title'          => esc_html__( 'Team Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Team Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'team_show',
	'label'    => esc_html__( 'Team Show?', 'stack' ),
	'section'  => 'team_section',
	'default'  => true
] );

// Team Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'team_heading',
	'label'    => esc_html__( 'Team Heading', 'stack' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'Our Team', 'stack' )
] );

//  Team Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'team_desc',
	'label'    => esc_html__( 'Team Description', 'stack' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
	began to grow in 2020.', 'stack' )
] );

// Team Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Team Items', 'stack' ),
	'section'     => 'team_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'team_title',
	],
	'button_label' => esc_html__('Add New About Item', 'stack' ),
	'settings'     => 'team_repeater',
	'fields' => [
        'team_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Team Image', 'stack' ),
			'default'     => '',
		],
		'team_facebook' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Facebook URL', 'stack' ),
			'default'     => 'https://www.facebook.com',
		],
		'team_twitter' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Twitter URL', 'stack' ),
			'default'     => 'https://www.twitter.com',
		],
		'team_instagram' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Instagram URL', 'stack' ),
			'default'     => 'https://www.instagram.com',
		],
		'team_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Team Name', 'stack' ),
			'default'     => __('John Doe', 'stack'),
		],
		'team_desg' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Team Designation', 'stack' ),
			'default'     => __('Web Developer', 'stack'),
		],
	],
    'choices' => [
		'limit' => 4
	],
] );


// Counter Section
Kirki::add_section( 'counter_section', array(
    'title'          => esc_html__( 'Counter Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Team Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'counter_show',
	'label'    => esc_html__( 'Counter Show?', 'stack' ),
	'section'  => 'counter_section',
	'default'  => true
] );

// Counter Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Counter Items', 'stack' ),
	'section'     => 'counter_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'counter_title',
	],
	'button_label' => esc_html__('Add New Counter Item', 'stack' ),
	'settings'     => 'counter_repeater',
	'fields' => [
        'counter_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Counter Icon', 'stack' ),
			'default'     => '',
			'choices'     => array(
				'lni-users' => __('Users', 'stack'),
				'lni-emoji-smile' => __('Smile', 'stack'),
				'lni-download' => __('Download', 'stack'),
				'lni-thumbs-up' => __('Thumbs Up', 'stack'),
			),
		],
		'counter_number' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Counter Number', 'stack' ),
			'default'     => '100',
		],
		'counter_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Counter Title', 'stack' ),
			'default'     => __('Users', 'stack'),
		],
		'counter_animation_name' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Counter Animation Name', 'stack' ),
			'default'     => 'fadeInUp',
			'choices'     => array(
				'fadeInUp' => __('fadeInUp', 'stack'),
				'fadeInLeft' => __('fadeInLeft', 'stack'),
				'fadeInRight' => __('fadeInRight', 'stack'),
			),
		],
		'counter_animation_duration' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Counter Animation Duration', 'stack' ),
			'default'     => '0.2s',
			'choices'     => array(
				'0.2s' => __('0.2s', 'stack'),
				'0.4s' => __('0.4s', 'stack'),
				'0.6s' => __('0.6s', 'stack'),
				'0.8s' => __('0.8s', 'stack'),
			),
		],
	],
    'choices' => [
		'limit' => 4
	],
] );

// Counter Background
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'counter_background',
	'label'       => esc_html__( 'Background', 'stack' ),
	'section'     => 'counter_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#counter',
		],
	],
] );