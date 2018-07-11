<?php
function harvestly_customize_register($wp_customize){
	// Frontpage Panel
	$wp_customize->add_panel('frontpage_panel', array(
		'title'			=> 'Frontpage Section',
		'priority'		=> 30,
	));
	
	// Banner Section
	$wp_customize->add_section('banner', array(
		'title'			=> 'Banner',
		'description'	=> sprintf( 'Options for banner area'),
		'priority'		=> 10,
		'panel'			=> 'frontpage_panel'
	));
	$wp_customize->add_setting( 'banner_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
		'label'		=> 'Banner Image',
		'section'	=> 'banner',
		'settings'	=> 'banner_image',
		'priority'	=> 1,
	)));
	$wp_customize->add_setting( 'banner_caption1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'banner_caption1', array(
		'label'		=> 'Caption 1',
		'section'	=> 'banner',
		'priority'	=> 2,
	));
	$wp_customize->selective_refresh->add_partial( 'banner_caption1', array(
		'selector' => '.caption p',
	) );
	$wp_customize->add_setting( 'banner_caption2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'banner_caption2', array(
		'label'		=> 'Caption 2',
		'section'	=> 'banner',
		'priority'	=> 3,
	));
	
	// === About Section ===
	$wp_customize->add_section('frontpage_about', array(
		'title'			=> 'About',
		'description'	=> sprintf( 'Options for About Us'),
		'priority'		=> 20,
		'panel'			=> 'frontpage_panel'
	));
	
	// About Box 1 - Icon
	$wp_customize->add_setting( 'about_icon1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_icon1', array(
		'label'		=> 'Box Icon 1',
		'section'	=> 'frontpage_about',
		'priority'	=> 1,
	));
	$wp_customize->selective_refresh->add_partial( 'about_icon1', array(
		'selector' => '.about-icon-1 .fa',
	) );
	
	// About Box 1 - Title
	$wp_customize->add_setting( 'about_box_title1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_box_title1', array(
		'label'		=> 'Box Title 1',
		'section'	=> 'frontpage_about',
		'priority'	=> 2,
	));
	
	// About Box 1 - Desc
	$wp_customize->add_setting( 'about_box_desc1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_box_desc1', array(
		'label'		=> 'Box Description 1',
		'section'	=> 'frontpage_about',
		'priority'	=> 3,
	));
	
	// About Box 2 - Icon
	$wp_customize->add_setting( 'about_icon2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_icon2', array(
		'label'		=> 'Box Icon 2',
		'section'	=> 'frontpage_about',
		'priority'	=> 4,
	));
	$wp_customize->selective_refresh->add_partial( 'about_icon2', array(
		'selector' => '.about-icon-2 .fa',
	) );
	
	// About Box 2 - Title
	$wp_customize->add_setting( 'about_box_title2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_box_title2', array(
		'label'		=> 'Box Title 2',
		'section'	=> 'frontpage_about',
		'priority'	=> 5,
	));
	
	// About Box 2 - Desc
	$wp_customize->add_setting( 'about_box_desc2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_box_desc2', array(
		'label'		=> 'Box Description 2',
		'section'	=> 'frontpage_about',
		'priority'	=> 6,
	));
	
	// About Box 3 - Icon
	$wp_customize->add_setting( 'about_icon3', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_icon3', array(
		'label'		=> 'Box Icon 3',
		'section'	=> 'frontpage_about',
		'priority'	=> 7,
	));
	$wp_customize->selective_refresh->add_partial( 'about_icon3', array(
		'selector' => '.about-icon-3 .fa',
	) );
	
	// About Box 3 - Title
	$wp_customize->add_setting( 'about_box_title3', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_box_title3', array(
		'label'		=> 'Box Title 3',
		'section'	=> 'frontpage_about',
		'priority'	=> 8,
	));
	
	// About Box 3 - Desc
	$wp_customize->add_setting( 'about_box_desc3', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'about_box_desc3', array(
		'label'		=> 'Box Description 3',
		'section'	=> 'frontpage_about',
		'priority'	=> 9,
	));
	
	// === Funny Counter Section ===
	$wp_customize->add_section('frontpage_funny', array(
		'title'			=> 'Funny Counter',
		'description'	=> sprintf( 'Options for Funny Counter'),
		'priority'		=> 30,
		'panel'			=> 'frontpage_panel'
	));
	
	// Funny Counter Background
	$wp_customize->add_setting( 'funny_bg_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'funny_bg_image', array(
		'label'		=> 'Background Image',
		'section'	=> 'frontpage_funny',
		'settings'	=> 'funny_bg_image',
		'priority'	=> 1,
	)));
	
	// Funny Counter Title
	$wp_customize->add_setting( 'funny_title', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_title', array(
		'label'		=> 'Title',
		'section'	=> 'frontpage_funny',
		'priority'	=> 2,
	));
	$wp_customize->selective_refresh->add_partial( 'funny_title', array(
		'selector' => '.funnyheader h2',
	) );
	
	// Funny Counter 1 - Icon
	$wp_customize->add_setting( 'funny_icon1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_icon1', array(
		'label'		=> 'Icon 1',
		'section'	=> 'frontpage_funny',
		'priority'	=> 3,
	));
	$wp_customize->selective_refresh->add_partial( 'funny_icon1', array(
		'selector' => '.funnyfact1 .fa',
	) );
	
	// Funny Counter 1 - Counter
	$wp_customize->add_setting( 'funny_counter1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'absint',
	));
	$wp_customize->add_control( 'funny_counter1', array(
		'label'		=> 'Counter 1',
		'section'	=> 'frontpage_funny',
		'priority'	=> 4,
	));
	
	// Funny Counter 1 - Desc
	$wp_customize->add_setting( 'funny_desc1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_desc1', array(
		'label'		=> 'Description 1',
		'section'	=> 'frontpage_funny',
		'priority'	=> 5,
	));
	
	// Funny Counter 2 - Icon
	$wp_customize->add_setting( 'funny_icon2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_icon2', array(
		'label'		=> 'Icon 2',
		'section'	=> 'frontpage_funny',
		'priority'	=> 6,
	));
	$wp_customize->selective_refresh->add_partial( 'funny_icon2', array(
		'selector' => '.funnyfact2 .fa',
	) );
	
	// Funny Counter 2 - Counter
	$wp_customize->add_setting( 'funny_counter2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'absint',
	));
	$wp_customize->add_control( 'funny_counter2', array(
		'label'		=> 'Counter 2',
		'section'	=> 'frontpage_funny',
		'priority'	=> 7,
	));
	
	// Funny Counter 2 - Desc
	$wp_customize->add_setting( 'funny_desc2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_desc2', array(
		'label'		=> 'Description 2',
		'section'	=> 'frontpage_funny',
		'priority'	=> 8,
	));
	
	// Funny Counter 3 - Icon
	$wp_customize->add_setting( 'funny_icon3', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_icon3', array(
		'label'		=> 'Icon 3',
		'section'	=> 'frontpage_funny',
		'priority'	=> 9,
	));
	$wp_customize->selective_refresh->add_partial( 'funny_icon3', array(
		'selector' => '.funnyfact3 .fa',
	) );
	
	// Funny Counter 3 - Counter
	$wp_customize->add_setting( 'funny_counter3', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'absint',
	));
	$wp_customize->add_control( 'funny_counter3', array(
		'label'		=> 'Counter 3',
		'section'	=> 'frontpage_funny',
		'priority'	=> 10,
	));
	
	// Funny Counter 3 - Desc
	$wp_customize->add_setting( 'funny_desc3', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_desc3', array(
		'label'		=> 'Description 3',
		'section'	=> 'frontpage_funny',
		'priority'	=> 11,
	));
	
	// Funny Counter 4 - Icon
	$wp_customize->add_setting( 'funny_icon4', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_icon4', array(
		'label'		=> 'Icon 4',
		'section'	=> 'frontpage_funny',
		'priority'	=> 12,
	));
	$wp_customize->selective_refresh->add_partial( 'funny_icon4', array(
		'selector' => '.funnyfact4 .fa',
	) );
	
	// Funny Counter 4 - Counter
	$wp_customize->add_setting( 'funny_counter4', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'absint',
	));
	$wp_customize->add_control( 'funny_counter4', array(
		'label'		=> 'Counter 4',
		'section'	=> 'frontpage_funny',
		'priority'	=> 13,
	));
	
	// Funny Counter 4 - Desc
	$wp_customize->add_setting( 'funny_desc4', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'funny_desc4', array(
		'label'		=> 'Description 4',
		'section'	=> 'frontpage_funny',
		'priority'	=> 14,
	));
	
	// === Our Service Section ===
	$wp_customize->add_section('frontpage_service', array(
		'title'			=> 'Our Service',
		'description'	=> sprintf( 'Options for Our Service'),
		'priority'		=> 40,
		'panel'			=> 'frontpage_panel'
	));
	
	// Our Service Row 1
	$wp_customize->add_setting( 'service_row1', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'service_row1', array(
		'label'		=> 'Row 1',
		'section'	=> 'frontpage_service',
		'priority'	=> 1,
	));
	$wp_customize->selective_refresh->add_partial( 'service_row1', array(
		'selector' => '.service-row-1',
	) );
	
	// Our Service Row 2
	$wp_customize->add_setting( 'service_row2', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'service_row2', array(
		'label'		=> 'Row 2',
		'section'	=> 'frontpage_service',
		'priority'	=> 2,
	));
	$wp_customize->selective_refresh->add_partial( 'service_row2', array(
		'selector' => '.service-row-2',
	) );
	
	// Our Service Row 3
	$wp_customize->add_setting( 'service_row3', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'service_row3', array(
		'label'		=> 'Row 3',
		'section'	=> 'frontpage_service',
		'priority'	=> 3,
	));
	$wp_customize->selective_refresh->add_partial( 'service_row3', array(
		'selector' => '.service-row-3',
	) );
	
	// === Our Creative Team Section ===
	$wp_customize->add_section('frontpage_creative', array(
		'title'			=> 'Our Creative Team',
		'description'	=> sprintf( 'Options for Our Creative Team'),
		'priority'		=> 50,
		'panel'			=> 'frontpage_panel'
	));
	
	// Creative Team 1
	$wp_customize->add_setting( 'team1_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'team1_image', array(
		'label'		=> 'Team 1 Photo',
		'section'	=> 'frontpage_creative',
		'settings'	=> 'team1_image',
		'priority'	=> 1,
	)));
	$wp_customize->selective_refresh->add_partial( 'team1_image', array(
		'selector' => '.team1',
	) );
	$wp_customize->add_setting( 'team1_name', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'team1_name', array(
		'label'		=> 'Team 1 Name',
		'section'	=> 'frontpage_creative',
		'priority'	=> 2,
	));
	$wp_customize->add_setting( 'team1_title', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'team1_title', array(
		'label'		=> 'Team 1 Title',
		'section'	=> 'frontpage_creative',
		'priority'	=> 3,
	));
	$wp_customize->add_setting( 'team1_fb', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team1_fb', array(
		'label'		=> 'Team 1 Facebook',
		'section'	=> 'frontpage_creative',
		'priority'	=> 4,
	));
	$wp_customize->add_setting( 'team1_twitter', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team1_twitter', array(
		'label'		=> 'Team 1 Twitter',
		'section'	=> 'frontpage_creative',
		'priority'	=> 5,
	));
	$wp_customize->add_setting( 'team1_dribble', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team1_dribble', array(
		'label'		=> 'Team 1 Dribble',
		'section'	=> 'frontpage_creative',
		'priority'	=> 6,
	));
	
	// Creative Team 2
	$wp_customize->add_setting( 'team2_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'team2_image', array(
		'label'		=> 'Team 2 Photo',
		'section'	=> 'frontpage_creative',
		'settings'	=> 'team2_image',
		'priority'	=> 7,
	)));
	$wp_customize->selective_refresh->add_partial( 'team2_image', array(
		'selector' => '.team2 img',
	) );
	$wp_customize->add_setting( 'team2_name', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'team2_name', array(
		'label'		=> 'Team 2 Name',
		'section'	=> 'frontpage_creative',
		'priority'	=> 8,
	));
	$wp_customize->add_setting( 'team2_title', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'team2_title', array(
		'label'		=> 'Team 2 Title',
		'section'	=> 'frontpage_creative',
		'priority'	=> 9,
	));
	$wp_customize->add_setting( 'team2_fb', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team2_fb', array(
		'label'		=> 'Team 2 Facebook',
		'section'	=> 'frontpage_creative',
		'priority'	=> 10,
	));
	$wp_customize->add_setting( 'team2_twitter', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team2_twitter', array(
		'label'		=> 'Team 2 Twitter',
		'section'	=> 'frontpage_creative',
		'priority'	=> 11,
	));
	$wp_customize->add_setting( 'team2_dribble', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team2_dribble', array(
		'label'		=> 'Team 2 Dribble',
		'section'	=> 'frontpage_creative',
		'priority'	=> 12,
	));
	
	// Creative Team 3
	$wp_customize->add_setting( 'team3_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'team3_image', array(
		'label'		=> 'Team 3 Photo',
		'section'	=> 'frontpage_creative',
		'settings'	=> 'team3_image',
		'priority'	=> 13,
	)));
	$wp_customize->selective_refresh->add_partial( 'team3_image', array(
		'selector' => '.team3 img',
	) );
	$wp_customize->add_setting( 'team3_name', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'team3_name', array(
		'label'		=> 'Team 3 Name',
		'section'	=> 'frontpage_creative',
		'priority'	=> 14,
	));
	$wp_customize->add_setting( 'team3_title', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'team3_title', array(
		'label'		=> 'Team 3 Title',
		'section'	=> 'frontpage_creative',
		'priority'	=> 15,
	));
	$wp_customize->add_setting( 'team3_fb', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team3_fb', array(
		'label'		=> 'Team 3 Facebook',
		'section'	=> 'frontpage_creative',
		'priority'	=> 16,
	));
	$wp_customize->add_setting( 'team3_twitter', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team3_twitter', array(
		'label'		=> 'Team 3 Twitter',
		'section'	=> 'frontpage_creative',
		'priority'	=> 17,
	));
	$wp_customize->add_setting( 'team3_dribble', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'team3_dribble', array(
		'label'		=> 'Team 3 Dribble',
		'section'	=> 'frontpage_creative',
		'priority'	=> 18,
	));
	
	// === Testimonial Section ===
	$wp_customize->add_section('frontpage_testimonial', array(
		'title'			=> 'Testimonial',
		'description'	=> sprintf( 'Option for Testimonial'),
		'priority'		=> 51,
		'panel'			=> 'frontpage_panel'
	));
	$wp_customize->add_setting( 'testimonial_bg_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'testimonial_bg_image', array(
		'label'		=> 'Testimonial Background Image',
		'section'	=> 'frontpage_testimonial',
		'settings'	=> 'testimonial_bg_image',
		'priority'	=> 1,
	)));
	
	// === Contact Us Section ===
	$wp_customize->add_section('frontpage_contact', array(
		'title'			=> 'Contact Us',
		'description'	=> sprintf( 'Options for Contact Us'),
		'priority'		=> 60,
		'panel'			=> 'frontpage_panel'
	));
	
	// Google Map
	$wp_customize->add_setting( 'google_map', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_google_map',
	));
	$wp_customize->add_control( 'google_map', array(
		'label'		=> 'Google Map',
		'section'	=> 'frontpage_contact',
		'priority'	=> 1,
	));
	$wp_customize->selective_refresh->add_partial( 'google_map', array(
		'selector' => '.contact-left',
	) );
	
	// Customer Service 1
	$wp_customize->add_setting( 'cs1_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cs1_image', array(
		'label'		=> 'CS1 Photo',
		'section'	=> 'frontpage_contact',
		'settings'	=> 'cs1_image',
		'priority'	=> 2,
	)));
	$wp_customize->selective_refresh->add_partial( 'cs1_image', array(
		'selector' => '.cs1',
	) );
	$wp_customize->add_setting( 'cs1_name', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'cs1_name', array(
		'label'		=> 'CS1 Name',
		'section'	=> 'frontpage_contact',
		'priority'	=> 3,
	));
	
	// Customer Service 2
	$wp_customize->add_setting( 'cs2_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cs2_image', array(
		'label'		=> 'CS2 Photo',
		'section'	=> 'frontpage_contact',
		'settings'	=> 'cs2_image',
		'priority'	=> 4,
	)));
	$wp_customize->selective_refresh->add_partial( 'cs2_image', array(
		'selector' => '.cs2',
	) );
	$wp_customize->add_setting( 'cs2_name', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'cs2_name', array(
		'label'		=> 'CS2 Name',
		'section'	=> 'frontpage_contact',
		'priority'	=> 5,
	));
	
	// Customer Service 3
	$wp_customize->add_setting( 'cs3_image', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cs3_image', array(
		'label'		=> 'CS3 Photo',
		'section'	=> 'frontpage_contact',
		'settings'	=> 'cs3_image',
		'priority'	=> 6,
	)));
	$wp_customize->selective_refresh->add_partial( 'cs3_image', array(
		'selector' => '.cs3',
	) );
	$wp_customize->add_setting( 'cs3_name', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'cs3_name', array(
		'label'		=> 'CS3 Name',
		'section'	=> 'frontpage_contact',
		'priority'	=> 7,
	));
	
	// Our Address
	$wp_customize->add_setting( 'contact_address', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'harvestly_sanitize_input',
	));
	$wp_customize->add_control( 'contact_address', array(
		'label'		=> 'Our Address',
		'section'	=> 'frontpage_contact',
		'priority'	=> 8,
	));
	$wp_customize->selective_refresh->add_partial( 'contact_address', array(
		'selector' => '.contact-right h3',
	) );
	
	// Footer Panel
	$wp_customize->add_panel('footer_panel', array(
		'title'			=> 'Footer',
		'priority'		=> 40,
	));
	
	// Footer Logo
	$wp_customize->add_section('footer_logo_section', array(
		'title'			=> 'Logo',
		'description'	=> sprintf( 'Options for footer logo'),
		'priority'		=> 10,
		'panel'			=> 'footer_panel'
	));
	
	// Footer Logo
	$wp_customize->add_setting( 'footer_logo', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
		'label'		=> 'Logo',
		'section'	=> 'footer_logo_section',
		'settings'	=> 'footer_logo',
		'priority'	=> 1,
	)));
	$wp_customize->selective_refresh->add_partial( 'footer_logo', array(
		'selector' => '.logo-bottom',
	) );
	
	// Footer Social Media
	$wp_customize->add_section('footer_social', array(
		'title'			=> 'Social Media',
		'description'	=> sprintf( 'Options for social media'),
		'priority'		=> 20,
		'panel'			=> 'footer_panel'
	));
	
	// Footer - Facebook
	$wp_customize->add_setting( 'footer_fb', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_fb', array(
		'label'		=> 'Facebook',
		'section'	=> 'footer_social',
		'priority'	=> 1,
	));
	$wp_customize->selective_refresh->add_partial( 'footer_fb', array(
		'selector' => '.footer-social .fb',
	) );
	
	// Footer - Twitter
	$wp_customize->add_setting( 'footer_twitter', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_twitter', array(
		'label'		=> 'Twitter',
		'section'	=> 'footer_social',
		'priority'	=> 2,
	));
	
	// Footer - Dribble
	$wp_customize->add_setting( 'footer_dribble', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_dribble', array(
		'label'		=> 'Dribble',
		'section'	=> 'footer_social',
		'priority'	=> 3,
	));
	
	// Footer - Google
	$wp_customize->add_setting( 'footer_google', array(
		'default'	=> null,
		'type'		=> 'theme_mod',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_google', array(
		'label'		=> 'Google',
		'section'	=> 'footer_social',
		'priority'	=> 4,
	));
}

add_action('customize_register', 'harvestly_customize_register');


function harvestly_sanitize_input( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function harvestly_sanitize_google_map( $input ) {
	return wp_kses($input, array(
		'iframe'	=> array(
			'src'			=> array(),
		),
	));
}
