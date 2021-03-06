<?php
return array(
	'title'      => esc_html__( 'Logo Setting', 'eazyrecruitz' ),
	'id'         => 'logo_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'image_favicon',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Favicon', 'eazyrecruitz' ),
			'subtitle' => esc_html__( 'Insert site favicon image', 'eazyrecruitz' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/favicon.ico' ),
			//'required' => array( array( 'logo_type', 'equals', 'image' ) ),
		),
		array(
            'id' => 'normal_logo_show',
            'type' => 'switch',
            'title' => esc_html__('Enable Logo One', 'eazyrecruitz'),
            'default' => true,
        ),
		array(
			'id'       => 'image_normal_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo One ', 'eazyrecruitz' ),
			'subtitle' => esc_html__( 'Insert site Logo One image', 'eazyrecruitz' ),
			'required' => array( 'normal_logo_show', '=', true ),
		),
		array(
			'id'       => 'normal_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Logo One Dimentions', 'eazyrecruitz' ),
			'subtitle' => esc_html__( 'Select Logo One  Dimentions', 'eazyrecruitz' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show', '=', true ),
		),
		array(
            'id' => 'normal_logo_show2',
            'type' => 'switch',
            'title' => esc_html__('Enable Logo Two', 'eazyrecruitz'),
            'default' => true,
        ),
		array(
			'id'       => 'image_normal_logo2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Two', 'eazyrecruitz' ),
			'subtitle' => esc_html__( 'Insert site logo Two image', 'eazyrecruitz' ),
			'required' => array( 'normal_logo_show2', '=', true ),
		),
		array(
			'id'       => 'normal_logo_dimension2',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Logo Two Dimentions', 'eazyrecruitz' ),
			'subtitle' => esc_html__( 'Select Logo Two Dimentions', 'eazyrecruitz' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show2', '=', true ),
		),
		array(
            'id' => 'normal_logo_show3',
            'type' => 'switch',
            'title' => esc_html__('Enable Home Three Logo', 'eazyrecruitz'),
            'default' => true,
        ),
		array(
			'id'       => 'image_normal_logo3',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Three', 'eazyrecruitz' ),
			'subtitle' => esc_html__( 'Insert site logo Three image', 'eazyrecruitz' ),
			'required' => array( 'normal_logo_show3', '=', true ),
		),
		array(
			'id'       => 'normal_logo_dimension3',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Logo Three Dimentions', 'eazyrecruitz' ),
			'subtitle' => esc_html__( 'Select Logo Three Dimentions', 'eazyrecruitz' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show3', '=', true ),
		),
		array(
			'id'       => 'logo_settings_section_end',
			'type'     => 'section',
			'indent'      => false,
		),
	),
);
