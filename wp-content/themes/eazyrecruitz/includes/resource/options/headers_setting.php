<?php
return array(
	'title'      => esc_html__( 'Header Setting', 'eazyrecruitz' ),
	'id'         => 'headers_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'      => 'header_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Header Source Type', 'eazyrecruitz' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'eazyrecruitz' ),
				'e' => esc_html__( 'Elementor', 'eazyrecruitz' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'header_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'eazyrecruitz' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'	=> -1
			],
			'required' => [ 'header_source_type', '=', 'e' ],
		),
		array(
			'id'       => 'header_style_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Settings', 'eazyrecruitz' ),
			'required' => array( 'header_source_type', '=', 'd' ),
		),
		array(
		    'id'       => 'header_style_settings',
		    'type'     => 'image_select',
		    'title'    => esc_html__( 'Choose Header Styles', 'eazyrecruitz' ),
		    'subtitle' => esc_html__( 'Choose Header Styles', 'eazyrecruitz' ),
		    'options'  => array(

			    'header_v1'  => array(
				    'alt' => esc_html__( 'Header Style 1', 'eazyrecruitz' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header1.png',
			    ),
			    'header_v2'  => array(
				    'alt' => esc_html__( 'Header Style 2', 'eazyrecruitz' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header2.png',
			    ),
				'header_v3'  => array(
				    'alt' => esc_html__( 'Header Style 3', 'eazyrecruitz' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header3.png',
			    ),
			    'header_v4'  => array(
				    'alt' => esc_html__( 'Header Style 4', 'eazyrecruitz' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header4.png',
			    ),
				'header_v5'  => array(
				    'alt' => esc_html__( 'Header Style 5', 'eazyrecruitz' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header5.png',
			    ),
			),
			'required' => array( 'header_source_type', '=', 'd' ),
			'default' => 'header_v1',
	    ),
		array(
			'id'       => 'header_v1_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style One Settings', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
		),
		array(
            'id' => 'header_topbar_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable Header Topbar', 'eazyrecruitz'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
        ),
		array(
		    'id'       => 'phone_no_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'email_address_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'location_info_v1',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Our Location Info', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Our Location Info', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'btn_title_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'btn_link_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'menu_list_v1',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Header Topbar Menu List', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Menu List', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
			'id'    => 'header_v1_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
		),
		array(
            'id' => 'search_form_icon_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable Search icon', 'eazyrecruitz'),
            'default' => false,
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
        ),
		array(
		    'id'       => 'appointment_btn_title_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'appointment_btn_link_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'heading_title_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Mobile Info Contact Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Contact Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'address_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		/***********************************************************************
								Header Version 2 Start
		************************************************************************/
		array(
			'id'       => 'header_v2_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Two Settings', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
		),
		array(
            'id' => 'header_topbar_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable Header Topbar', 'eazyrecruitz'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
        ),
		array(
		    'id'       => 'phone_no_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'email_address_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'location_info_v2',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Our Location Info', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Our Location Info', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'btn_title_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'btn_link_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'menu_list_v2',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Header Topbar Menu List', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Menu List', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
			'id'    => 'header_v2_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
		),
		array(
            'id' => 'search_form_icon_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable Search icon', 'eazyrecruitz'),
            'default' => false,
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
        ),
		array(
		    'id'       => 'appointment_btn_title_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'appointment_btn_link_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'heading_title_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Mobile Info Contact Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Contact Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'address_v2',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		/***********************************************************************
								Header Version 3 Start
		************************************************************************/
		array(
			'id'       => 'header_v3_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Three Settings', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v3' ),
		),
		array(
            'id' => 'search_form_icon_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable Search icon', 'eazyrecruitz'),
            'default' => false,
			'required' => array( 'header_style_settings', '=', 'header_v3' ),
        ),
		array(
		    'id'       => 'appointment_btn_title_v3',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
		array(
		    'id'       => 'appointment_btn_link_v3',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
		array(
			'id'    => 'header_v3_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v3' ),
		),
		array(
		    'id'       => 'heading_title_v3',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Mobile Info Contact Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Contact Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
		array(
		    'id'       => 'address_v3',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
		array(
		    'id'       => 'phone_no_v3',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
		array(
		    'id'       => 'email_address_v3',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
		/***********************************************************************
								Header Version 4 Start
		************************************************************************/
		array(
			'id'       => 'header_v4_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Four Settings', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
		),
		array(
            'id' => 'header_topbar_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable Header Topbar', 'eazyrecruitz'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
        ),
		array(
		    'id'       => 'phone_no_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'email_address_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'location_info_v4',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Our Location Info', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Our Location Info', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'btn_title_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'btn_link_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'menu_list_v4',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Header Topbar Menu List', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Menu List', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
			'id'    => 'header_v4_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
		),
		array(
            'id' => 'search_form_icon_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable Search icon', 'eazyrecruitz'),
            'default' => false,
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
        ),
		array(
		    'id'       => 'appointment_btn_title_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'appointment_btn_link_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'heading_title_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Mobile Info Contact Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Contact Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'address_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		/***********************************************************************
								Header Version 5 Start
		************************************************************************/
		array(
			'id'       => 'header_v5_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Five Settings', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v5' ),
		),
		array(
            'id' => 'header_topbar_v5',
            'type' => 'switch',
            'title' => esc_html__('Enable Header Topbar', 'eazyrecruitz'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v5' ),
        ),
		array(
		    'id'       => 'phone_no_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'email_address_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'location_info_v5',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Our Location Info', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Our Location Info', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'btn_title_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'btn_link_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Apply Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Apply Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'menu_list_v5',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Header Topbar Menu List', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Menu List', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
			'id'    => 'header_v5_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'eazyrecruitz' ),
			'required' => array( 'header_style_settings', '=', 'header_v5' ),
		),
		array(
            'id' => 'search_form_icon_v5',
            'type' => 'switch',
            'title' => esc_html__('Enable Search icon', 'eazyrecruitz'),
            'default' => false,
			'required' => array( 'header_style_settings', '=', 'header_v5' ),
        ),
		array(
		    'id'       => 'appointment_btn_title_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'appointment_btn_link_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Appointment Button Link', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Appointment Button Link', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'heading_title_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Mobile Info Contact Title', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Contact Title', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
		    'id'       => 'address_v5',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Address', 'eazyrecruitz' ),
		    'desc'     => esc_html__( 'Enter The Address', 'eazyrecruitz' ),
		    'required' => array( 'header_style_settings', '=', 'header_v5' ),
	    ),
		array(
			'id'       => 'header_style_section_end',
			'type'     => 'section',
			'indent'      => false,
			'required' => [ 'header_source_type', '=', 'd' ],
		),
	),
);