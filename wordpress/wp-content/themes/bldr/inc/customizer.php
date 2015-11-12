<?php
/**
 * BLDR Theme Customizer
 *
 * @package BLDR
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bldr_customize_register( $wp_customize ) {
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10; 
	
	//allows donations
    class bldr_Info extends WP_Customize_Control { 
     
        public $label = '';
        public function render_content() {
        ?>

        <?php
        }
    }	
	
	// Pro
    $wp_customize->add_section(
        'bldr_theme_info',
        array(
            'title' => __('BLDR Pro', 'bldr'), 
            'priority' => 5, 
            'description' => __('Need a little more BLDR? If you want to see what additional features <a href="http://modernthemes.net/wordpress-themes/bldr-pro/" target="_blank">BLDR Pro</a> has, check them all out right <a href="http://modernthemes.net/wordpress-themes/bldr-pro/" target="_blank">here</a>. BLDR Pro is only $18!', 'bldr'),
    ));  
	 
    //Donations section
    $wp_customize->add_setting('bldr_help', array( 
			'sanitize_callback' => 'bldr_no_sanitize',
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
    ));
	
    $wp_customize->add_control( new bldr_Info( $wp_customize, 'bldr_help', array( 
        'section' => 'bldr_theme_info', 
        'settings' => 'bldr_help',  
        'priority' => 10
    )));
	
	// nav 
	$wp_customize->add_section( 'bldr_nav', array(
	'title' => __( 'Navigation', 'bldr' ),
	'priority' => '13', 
	));

	// Nav
	$wp_customize->add_setting( 'bldr_menu_name', array(
        'default'     => 'Menu',
        'sanitize_callback' => 'bldr_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_menu_name', array(
        'label'	   => __( 'Mobile Menu Name', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_menu_name', 
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'bldr_nav_link_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_link_color', array(
        'label'	   => __( 'Navigation Link Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_link_color', 
		'priority' => 70 
    )));
	
	$wp_customize->add_setting( 'bldr_nav_link_hover_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_link_hover_color', array(
        'label'	   => __( 'Navigation Link Hover Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_link_hover_color', 
		'priority' => 75
    )));
	
	$wp_customize->add_setting( 'bldr_nav_drop_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_drop_color', array(
        'label'	   => __( 'Menu Drop Down Background Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_drop_color',
		'priority' => 95  
    )));
	
	$wp_customize->add_setting( 'bldr_nav_accent_color', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_accent_color', array(
        'label'	   => __( 'Menu Drop Down Accent Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_accent_color',
		'priority' => 100
    )));
	
	$wp_customize->add_setting( 'bldr_nav_drop_link_color', array( 
        'default'     => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_drop_link_color', array(
        'label'	   => __( 'Menu Drop Down Link Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_drop_link_color',
		'priority' => 105
    )));
	
	
	$wp_customize->add_setting( 'bldr_nav_drop_link_bg_color', array( 
        'default'     => '#f5f5f5', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_drop_link_bg_color', array(
        'label'	   => __( 'Menu Drop Down Link Background Color', 'bldr' ),
       	'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_drop_link_bg_color',
		'priority' => 115
    )));
	
	$wp_customize->add_setting( 'bldr_page_nav_bg_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_nav_bg_color', array(
        'label'	   => __( 'Page Navigation Background Color', 'bldr' ), 
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_page_nav_bg_color', 
		'priority' => 120
    )));
	
	$wp_customize->add_setting( 'bldr_page_link_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_link_color', array(
        'label'	   => __( 'Page Navigation Link Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_page_link_color', 
		'priority' => 125
    )));
	
	$wp_customize->add_setting( 'bldr_page_link_hover_color', array( 
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_link_hover_color', array(
        'label'	   => __( 'Page Navigation Link Hover Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_page_link_hover_color',
		'priority' => 130  
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_menu', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_menu', array(
        'label'	   => __( 'Mobile Menu Button Color', 'bldr' ),
        'section'  => 'bldr_nav',   
        'settings' => 'bldr_mobile_menu',
		'priority' => 135
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_menu_hover', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_menu_hover', array(
        'label'	   => __( 'Mobile Menu Button Hover Color', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_mobile_menu_hover', 
		'priority' => 140
    )));
	
	// Sticky Navigation
	$wp_customize->add_section( 'bldr_sticky_section' , array(  
	    'title'       => __( 'Sticky Navigation', 'bldr' ),
	    'priority'    => 15, 
	    'description' => __( 'Adjust your Sticky Navigation settings here.', 'bldr'),
	)); 
	
	
	$wp_customize->add_setting(
        'bldr_sticky_active',
        array(
            'sanitize_callback' => 'bldr_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'bldr_sticky_active',
        array(
            'type' => 'checkbox',
            'label' => __('Check this box if you want to disable the Sticky Header option', 'bldr'),
            'section' => 'bldr_sticky_section',
            'priority' => 50,       
    ));
	
	$wp_customize->add_setting( 'bldr_nav_bg_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_bg_color', array(
        'label'	   => __( 'Sticky Navigation Background Color', 'bldr' ), 
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_nav_bg_color', 
		'priority' => 80
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_link_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_link_color', array(
        'label'	   => __( 'Sticky Navigation Link Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_link_color', 
		'priority' => 85
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_link_hover_color', array( 
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_link_hover_color', array(
        'label'	   => __( 'Sticky Navigation Link Hover Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_link_hover_color', 
		'priority' => 90  
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_drop_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_drop_color', array(
        'label'	   => __( 'Sticky Navigation Menu Drop Down Background Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_drop_color',
		'priority' => 95  
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_accent_color', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_accent_color', array(
        'label'	   => __( 'Sticky Navigation Menu Drop Down Accent Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_accent_color',
		'priority' => 100
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_drop_link_color', array( 
        'default'     => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_drop_link_color', array(
        'label'	   => __( 'Sticky Navigation Menu Drop Down Link Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_drop_link_color',
		'priority' => 105
    )));
	
	
	$wp_customize->add_setting( 'bldr_stickynav_drop_link_bg_color', array( 
        'default'     => '#f5f5f5', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_drop_link_bg_color', array(
        'label'	   => __( 'Sticky Navigation Menu Drop Down Link Background Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_drop_link_bg_color',
		'priority' => 115
    )));

    // Logo upload
    $wp_customize->add_section( 'bldr_logo_section' , array(  
	    'title'       => __( 'Logo and Icons', 'bldr' ),
	    'priority'    => 20, 
	    'description' => __( 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.', 'bldr'),
	)); 

	$wp_customize->add_setting( 'bldr_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bldr_logo', array( 
		'label'    => __( 'Home Logo', 'bldr' ), 
		'section'  => 'bldr_logo_section', 
		'settings' => 'bldr_logo',
		'priority' => 1,
	))); 
	
	$wp_customize->add_setting( 'bldr_logo_page', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bldr_logo_page', array( 
		'label'    => __( 'Page Logo', 'bldr' ),
		'section'  => 'bldr_logo_section', 
		'settings' => 'bldr_logo_page',
		'priority' => 1,
	)));
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', array(
	    'sanitize_callback' => 'bldr_sanitize_text',
		'default'	        => '165'   
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo_size', array( 
		'label'    => __( 'Change the width of the Logo in PX.', 'bldr' ),
		'description'    => __( 'Only enter numeric value', 'bldr' ),
		'section'  => 'bldr_logo_section', 
		'settings' => 'logo_size', 
		'type'     => 'number', 
		'priority'   => 2,
		'input_attrs' => array(
            'style' => 'margin-bottom: 15px;',  
        ),
	)));
	
	//Favicon Upload
	$wp_customize->add_setting(
		'site_favicon',
		array(
			'default' => (get_stylesheet_directory_uri( 'stylesheet_directory') . '/img/favicon.png'), 
			'sanitize_callback' => 'esc_url_raw',
	));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
               'label'          => __( 'Upload your favicon (16x16 pixels)', 'bldr' ),
			   'type' 			=> 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'site_favicon',
               'priority' => 2,
    )));
	
    //Apple touch icon 144
    $wp_customize->add_setting(
        'apple_touch_144',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_144',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (144x144 pixels)', 'bldr' ),
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_144',
               'priority'       => 11,
    )));
	
    //Apple touch icon 114
    $wp_customize->add_setting(
        'apple_touch_114',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw', 
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_114',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (114x114 pixels)', 'bldr' ),
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_114',
               'priority'       => 12,
    )));
	
    //Apple touch icon 72
    $wp_customize->add_setting(
        'apple_touch_72',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_72',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (72x72 pixels)', 'bldr' ),
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_72',
               'priority'       => 13,
    )));
	
    //Apple touch icon 57
    $wp_customize->add_setting(
        'apple_touch_57',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_57',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (57x57 pixels)', 'bldr' ), 
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_57',
               'priority'       => 14,
    )));
	
	// Hero Section
	$wp_customize->add_section( 'bldr_slider_section', array(
		'title'          => __( 'Home Hero Section', 'bldr' ),
		'priority'       => 25, 
		'description' => __( 'Edit your Home Page Hero', 'bldr'), 
	));
	
	$wp_customize->add_setting('active_hero',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_hero', 
    array(
        'type' => 'checkbox',
        'label' => __( 'Hide Hero', 'bldr' ),  
        'section' => 'bldr_slider_section', 
		'priority'   => 10
    ));
	
	// Main Background
	$wp_customize->add_setting( 'bldr_main_bg', array(
		'default' => (get_stylesheet_directory_uri( 'stylesheet_directory') . '/img/bldr.jpg'),   
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bldr_main_bg', array( 
		'label'    => __( 'Hero Image', 'bldr' ), 
		'section'  => 'bldr_slider_section',  
		'settings' => 'bldr_main_bg', 
		'priority'   => 20
	) ) ); 
	
	// First Heading
	$wp_customize->add_setting( 'bldr_first_heading' ,
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_first_heading', array( 
    'label' => __( 'Hero Heading', 'bldr' ),    
    'section' => 'bldr_slider_section',
    'settings' => 'bldr_first_heading',
	'priority'   => 30
	) ) );
	
	// Second Heading
	$wp_customize->add_setting( 'bldr_second_heading' ,
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_second_heading', array( 
    'label' => __( 'Hero Second Heading', 'bldr' ),    
    'section' => 'bldr_slider_section',
    'settings' => 'bldr_second_heading', 
	'priority'   => 40
	) ) );
	
	// Hero Button Text
	$wp_customize->add_setting( 'bldr_hero_button_text',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_hero_button_text', array( 
    'label' => __( 'Hero Button Text', 'bldr' ),   
    'section' => 'bldr_slider_section',
    'settings' => 'bldr_hero_button_text',  
	'priority'   => 45 
	) ) );
	
	// Page Drop Downs 
	$wp_customize->add_setting('hero_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'bldr_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_button_url', array( 
    	'label' => __( 'Hero Button URL', 'bldr' ), 
    	'section' => 'bldr_slider_section', 
		'type' => 'dropdown-pages',
    	'settings' => 'hero_button_url',
		'priority'   => 50 
	)));
	
	// Page URL
	$wp_customize->add_setting( 'page_url_text',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	));  

	$wp_customize->add_control( 'page_url_text', array( 
		'type'     => 'url',
		'label'    => __( 'External URL Option', 'bldr' ), 
		'description' => __( 'If you use an external URL, leave the Hero Button URL Link above empty. Must include http:// before any URL.', 'bldr' ),
		'section'  => 'bldr_slider_section',   
		'settings' => 'page_url_text',
		'priority'   => 60
	));
	
	// Social Panel
	$wp_customize->add_panel( 'bldr_footer_panel', array(
    'priority'       => 38,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Footer Options', 'bldr' ),
    'description'    		 => __( 'Edit your footer options', 'bldr' ),
	)); 
	
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => __( 'Footer', 'bldr' ),
    	'priority' => 10,
    	'description' => __( 'Customize your footer area', 'bldr' ),
		'panel' => 'bldr_footer_panel'
	) );
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'bldr_footerid',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_footerid', array(
    'label' => __( 'Footer Byline Text', 'bldr' ), 
    'section' => 'footer-custom', 
    'settings' => 'bldr_footerid',
	'priority'   => 10
	)));
	
	$wp_customize->add_setting( 'bldr_footer_color', array( 
        'default'     => '#161B1F',  
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_color', array(
        'label'	   => __( 'Footer Background Color', 'bldr'),
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_color',
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'bldr_footer_heading_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_heading_color', array(
        'label'	   => __( 'Footer Heading Color', 'bldr'), 
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_heading_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'bldr_footer_text_color', array( 
        'default'     => '#6c7980',  
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_text_color', array(
        'label'	   => __( 'Footer Text Color', 'bldr'),
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_text_color', 
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'bldr_footer_link_color', array( 
        'default'     => '#cccccc', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_link_color', array(
        'label'	   => __( 'Footer Link Color', 'bldr'), 
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_link_color', 
		'priority' => 50
    )));
	
	// Social Panel
	$wp_customize->add_panel( 'social_panel', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Social Section', 'bldr' ),
    'description'    		 => __( 'Edit your social media icons', 'bldr' ),
	)); 
	
	// Social Section 
	$wp_customize->add_section( 'bldr_settings', array(
    	'title'          => __( 'Social Media Icons', 'bldr' ),
        'priority'       => 38,
		'panel' => 'social_panel',  
    ) );
	
	
	$wp_customize->add_setting(
        'bldr_social_new_window', 
        array(
            'sanitize_callback' => 'bldr_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'bldr_social_new_window',
        array(
            'type' => 'checkbox',
            'label' => __('Open links in new window?', 'bldr'),
            'section'  => 'bldr_settings',
            'priority' => 5,       
    ));
	
	
	// Footer Social Section 
	$wp_customize->add_setting('active_footer_social',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_checkbox', 
	)); 
	
	$wp_customize->add_control( 
    'active_footer_social', 
    array(
        'type' => 'checkbox',
        'label' => __( 'Hide Social Section', 'bldr' ), 
        'section' => 'bldr_settings', 
		'priority'   => 10
    ));
	
	// Social Text
	$wp_customize->add_setting( 'footer_social_text',
	   array(
	       'sanitize_callback' => 'bldr_sanitize_text',
	   )); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_text', array(
		'label'    => __( 'Social Heading', 'bldr' ),
		'section'  => 'bldr_settings',
		'settings' => 'footer_social_text', 
		'priority'   => 20
	)));
		
	$wp_customize->add_setting( 'bldr_social_bg_color', array( 
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',  
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_bg_color', array(
        'label'	   => __( 'Social Background Color', 'bldr'), 
        'section'  => 'bldr_settings',
        'settings' => 'bldr_social_bg_color', 
		'priority' => 150
    )));
	
	$wp_customize->add_setting( 'bldr_social_border_color', array( 
        'default'     => '#dadada', 
        'sanitize_callback' => 'sanitize_hex_color',  
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_border_color', array(
        'label'	   => __( 'Social Border Color', 'bldr'), 
        'section'  => 'bldr_settings', 
        'settings' => 'bldr_social_border_color', 
		'priority' => 155
    )));
	
	// Social Icon Colors
	$wp_customize->add_setting( 'bldr_social_color', array( 
        'default'     => '#888888', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_color', array(
        'label'	   => __( 'Social Icon Color', 'bldr' ),
        'section'  => 'bldr_settings',
        'settings' => 'bldr_social_color', 
		'priority' => 160
    )));
	
	$wp_customize->add_setting( 'bldr_social_color_hover', array( 
        'default'     => '#039BE5', 
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_color_hover', array(
        'label'	   => __( 'Social Icon Hover Color', 'bldr' ),
        'section'  => 'bldr_settings',
        'settings' => 'bldr_social_color_hover', 
		'priority' => 170
    )));
	
	// Facebook
	$wp_customize->add_setting( 'bldr_fb',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_fb', array(
		'label'    => __( 'Facebook URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_fb',
		'priority'   => 30
	))); 
	
	// Twitter
	$wp_customize->add_setting( 'bldr_twitter',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_twitter', array(
		'label'    => __( 'Twitter URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_twitter',
		'priority'   => 40
	))); 
	
	// LinkedIn
	$wp_customize->add_setting( 'bldr_linked',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_linked', array(
		'label'    => __( 'LinkedIn URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_linked',
		'priority'   => 50
	)));
	
	// Google Plus
	$wp_customize->add_setting( 'bldr_google',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_google', array(
		'label'    => __( 'Google Plus URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_google',
		'priority'   => 60
	)));
	
	// Instagram
	$wp_customize->add_setting( 'bldr_instagram',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_instagram', array(
		'label'    => __( 'Instagram URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_instagram',
		'priority'   => 70
	)));
	
	// Flickr
	$wp_customize->add_setting( 'bldr_flickr',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_flickr', array(
		'label'    => __( 'Flickr URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_flickr',
		'priority'   => 80
	)));
	
	// Pinterest
	$wp_customize->add_setting( 'bldr_pinterest',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_pinterest', array(
		'label'    => __( 'Pinterest URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_pinterest',
		'priority'   => 90
	)));
	
	// Youtube
	$wp_customize->add_setting( 'bldr_youtube',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_youtube', array(
		'label'    => __( 'YouTube URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_youtube',  
		'priority'   => 100
	)));
	
	// Vimeo
	$wp_customize->add_setting( 'bldr_vimeo',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_vimeo', array(
		'label'    => __( 'Vimeo URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_vimeo',
		'priority'   => 110
	)));
	
	// Tumblr
	$wp_customize->add_setting( 'bldr_tumblr',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_tumblr', array(
		'label'    => __( 'Tumblr URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_tumblr', 
		'priority'   => 120
	)));
	
	// Dribbble
	$wp_customize->add_setting( 'bldr_dribbble',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_dribbble', array(
		'label'    => __( 'Dribbble URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_dribbble',
		'priority'   => 130
	)));
	
	// behance
	$wp_customize->add_setting( 'bldr_behance',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_behance', array(
		'label'    => __( 'Behance URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_behance',
		'priority'   => 133
	)));
	
	// RSS
	$wp_customize->add_setting( 'bldr_rss',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_rss', array(
		'label'    => __( 'RSS URL:', 'bldr' ), 
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_rss',
		'priority'   => 140
	)));
	
	// Fonts  
    $wp_customize->add_section(
        'bldr_typography',
        array(
            'title' => __('Google Fonts', 'bldr' ),   
            'priority' => 45,
    ));
	
    $font_choices = 
        array(
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt',
    );
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'bldr_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
            'description' => __('Select your desired font for the headings. Source Sans Pro is the default Heading font.', 'bldr'),
            'section' => 'bldr_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'bldr_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
            'description' => __( 'Select your desired font for the body. Source Sans Pro is the default Body font.', 'bldr' ), 
            'section' => 'bldr_typography',   
            'choices' => $font_choices
    ));
	
	// Colors
	$wp_customize->add_setting( 'bldr_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_text_color', array(
        'label'	   => __( 'Text Color', 'bldr' ),
        'section'  => 'colors',
        'settings' => 'bldr_text_color',
		'priority' => 10 
    )));
	
	$wp_customize->add_setting( 'bldr_custom_color', array( 
        'default'     => '#039BE5', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_custom_color', array(
        'label'	   => __( 'Theme Color', 'bldr' ),
        'section'  => 'colors',
        'settings' => 'bldr_custom_color', 
		'priority' => 20
    )));
	
    $wp_customize->add_setting( 'bldr_link_color', array( 
        'default'     => '#039BE5',   
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_link_color', array(
        'label'	   => __( 'Link Color', 'bldr'),
        'section'  => 'colors',
        'settings' => 'bldr_link_color',
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'bldr_hover_color', array(
        'default'     => '#039BE5', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_hover_color', array(
        'label'	   => __( 'Hover Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_hover_color',
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'bldr_site_title_color', array(
        'default'     => '#efefef', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_site_title_color', array(
        'label'	   => __( 'Site Title Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_site_title_color',
		'priority' => 40 
    )));
	
	$wp_customize->add_setting( 'bldr_page_site_title_color', array(
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_site_title_color', array(
        'label'	   => __( 'Page + Sticky Nav Site Title Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_page_site_title_color',
		'priority' => 43
    )));
	
	$wp_customize->add_setting( 'bldr_blockquote', array(
        'default'     => '#f5f5f5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_blockquote', array(
        'label'	   => __( 'Blockquote Background', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_blockquote', 
		'priority' => 45
    )));
	
	$wp_customize->add_setting( 'bldr_blockquote_border', array(
        'default'     => '#222222', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_blockquote_border', array(
        'label'	   => __( 'Blockquote Accent Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_blockquote_border', 
		'priority' => 50 
    )));
	
	$wp_customize->add_setting( 'bldr_entry', array(
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_entry', array(
        'label'	   => __( 'Entry Title Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_entry',
		'priority' => 55
    )));
	
	$wp_customize->add_setting( 'bldr_button_text', array( 
        'default'     => '#FFFFFF', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_button_text', array(
        'label'	   => __( 'Button Text Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_button_text',  
		'priority' => 60
    )));
	
	//Animations
	$wp_customize->add_section( 'bldr_animations' , array(  
	    'title'       => __( 'Animations', 'bldr' ),
	    'priority'    => 50,  
	    'description' => __( 'We can make things fly across the screen.', 'bldr' ),
	)); 
	
    $wp_customize->add_setting(
        'bldr_animate',
        array(
            'sanitize_callback' => 'bldr_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'bldr_animate',
        array(
            'type' => 'checkbox',
            'label' => __('Check this box if you want to disable the animations.', 'bldr'),
            'section' => 'bldr_animations',  
            'priority' => 1,           
    ));
	
	// Choose excerpt or full content on blog
    $wp_customize->add_section( 'bldr_layout_section' , array( 
	    'title'       => __( 'Layout', 'bldr' ),
	    'priority'    => 51,   
	    'description' => __( 'Change how BLDR displays posts', 'bldr' ),
	));

	$wp_customize->add_setting( 'bldr_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'bldr_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_post_content', array(
		'label'    => __( 'Post content', 'bldr' ),
		'section'  => 'bldr_layout_section',
		'settings' => 'bldr_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content', 
			),
	)));
	
	//Excerpt
    $wp_customize->add_setting(
        'exc_length',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '50',
    )); 
	
    $wp_customize->add_control( 'exc_length', array( 
        'type'        => 'number',
        'priority'    => 2, 
        'section'     => 'bldr_layout_section',
        'label'       => __('Excerpt length', 'bldr'),
        'description' => __('Choose your excerpt length here. Default: 50 words', 'bldr'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5,
            'style' => 'padding: 15px;',
        ), 
	));
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'bldr_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
	
}
add_action( 'customize_register', 'bldr_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bldr_customize_preview_js() {
	wp_enqueue_script( 'bldr_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'bldr_customize_preview_js' );

/**
 * Sanitizes a hex color. Identical to core's sanitize_hex_color(), which is not available on the wp_head hook.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or null.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().
 *
 * @since 1.7
 */
function bldr_sanitize_hex_color( $color ) {
	if ( '#ea474b' === $color ) 
		return '';

	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;

	return null;
}

/**
 * Sanitizes our post content value (either excerpts or full post content).
 *
 * @since 1.7 
 */
function bldr_sanitize_index_content( $content ) {
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	} 
}

//Checkboxes
function bldr_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

//Integers
function bldr_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

//Text
function bldr_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Sanitizes Fonts 
function bldr_sanitize_fonts( $input ) {  
    $valid = array(
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
            'Oswald:400,700' => 'Oswald',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',    
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt', 
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function bldr_no_sanitize( $input ) {
} 

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function bldr_add_customizer_css() {
	
	$color = ( get_theme_mod( 'bldr_link_color', __( '#039BE5', 'bldr' ) ) );
	
	?>
	<!-- BLDR customizer CSS --> 
	<style>
		
		<?php if ( get_theme_mod( 'bldr_link_color' ) ) : ?>
		a { color: <?php echo $color; ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_hover_color' ) ) : ?>
		a:hover {
			color: <?php echo esc_attr( get_theme_mod( 'bldr_hover_color', __( '#039BE5', 'bldr' ) )) ?>;   
		}
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_social_color' ) ) : ?>
		.social-media-icons .fa { color: <?php echo esc_attr( get_theme_mod( 'bldr_social_color', __( '#888888', 'bldr' ) )) ?>; -o-transition:.5s;
  		-ms-transition:.5s;
  		-moz-transition:.5s;
  		-webkit-transition:.5s;
  		transition:.5s;  }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_social_color_hover' ) ) : ?>
		.social-media-icons .fa:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_social_color_hover', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_social_bg_color' ) ) : ?>
		.social-bar { background: <?php echo esc_attr( get_theme_mod( 'bldr_social_bg_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_social_border_color' ) ) : ?>
		.social-bar { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_social_border_color', __( '#dadada', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_color' ) ) : ?>
		.site-footer { background: <?php echo esc_attr( get_theme_mod( 'bldr_footer_color', __( '#161B1F', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_text_color' ) ) : ?>
		.site-footer { color: <?php echo esc_attr( get_theme_mod( 'bldr_footer_text_color', __( '#6c7980', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_heading_color' ) ) : ?>
		.site-footer .widget-title { color: <?php echo esc_attr( get_theme_mod( 'bldr_footer_heading_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_link_color' ) ) : ?>
		.site-footer a { color: <?php echo esc_attr( get_theme_mod( 'bldr_footer_link_color', __( '#cccccc', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		 
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { background: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		.services .service-icon { background: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_site_title_color' ) ) : ?>
		.site-header-home h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'bldr_site_title_color', __( '#efefef', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_text_color' ) ) : ?> 
		body, button, input, select, textarea { color: <?php echo esc_attr( get_theme_mod( 'bldr_text_color', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_link_color' ) ) : ?>
		.site-header-home .main-navigation a { color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_link_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_link_hover_color' ) ) : ?>
		.site-header-home .main-navigation a:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_link_hover_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_nav_bg_color' ) ) : ?>
		.banner--clone { background: <?php echo esc_attr( get_theme_mod( 'bldr_nav_bg_color', __( '#ffffff', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_link_color' ) ) : ?>
		.banner--clone .main-navigation a { color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_link_color', __( '#404040', 'bldr' ) )) ?> !important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_link_hover_color' ) ) : ?> 
		.banner--clone .main-navigation a:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_link_hover_color', __( '#404040', 'bldr' ) )) ?> !important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_drop_color' ) ) : ?>
		.banner--clone .main-navigation ul ul { background: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_drop_color', __( '#ffffff', 'bldr' ) )) ?> !important; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_stickynav_accent_color' ) ) : ?> 
		.banner--clone .main-navigation ul ul { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_accent_color', __( '#039be5', 'bldr' ) )) ?>!important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_drop_link_color' ) ) : ?> 
		.banner--clone .main-navigation ul ul a { color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_drop_link_color', __( '#666666', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_drop_link_bg_color' ) ) : ?>
		.banner--clone .main-navigation ul ul a:hover { background: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_drop_link_bg_color', __( '#f5f5f5', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_nav_bg_color' ) ) : ?>
		.site-header { background: <?php echo esc_attr( get_theme_mod( 'bldr_page_nav_bg_color', __( '#ffffff', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_link_color' ) ) : ?>
		.site-header .main-navigation a { color: <?php echo esc_attr( get_theme_mod( 'bldr_page_link_color', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_link_hover_color' ) ) : ?>
		.site-header .main-navigation a:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_page_link_hover_color', __( '#404040', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_drop_color' ) ) : ?>
		.main-navigation ul ul { background: <?php echo esc_attr( get_theme_mod( 'bldr_nav_drop_color', __( '#ffffff', 'bldr' ) )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_accent_color' ) ) : ?>
		.main-navigation ul ul { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_accent_color', __( '#039be5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_drop_link_color' ) ) : ?>
		.main-navigation ul ul a { color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_drop_link_color', __( '#666666', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_drop_link_bg_color' ) ) : ?>
		.main-navigation ul ul a:hover { background: <?php echo esc_attr( get_theme_mod( 'bldr_nav_drop_link_bg_color', __( '#f5f5f5', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_blockquote' ) ) : ?>
		blockquote { background: <?php echo esc_attr( get_theme_mod( 'bldr_blockquote', __( '#f5f5f5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_blockquote_border' ) ) : ?>
		blockquote { border-color:<?php echo esc_attr( get_theme_mod( 'bldr_blockquote_border', __( '#222222', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_entry' ) ) : ?> 
		.entry-title { color: <?php echo esc_attr( get_theme_mod( 'bldr_entry', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_site_title_color' ) ) : ?> 
		.banner--clone h1.site-title a, h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'bldr_page_site_title_color', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_button_text' ) ) : ?>  
		 button, input[type="button"], input[type="reset"], input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'bldr_button_text', __( '#FFFFFF', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu' ) ) : ?>  
		 .navigation-container button, .navigation-container input[type="button"], .navigation-container input[type="reset"], .navigation-container input[type="submit"] { background-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu' ) ) : ?>  
		 .navigation-container button, .navigation-container input[type="button"], .navigation-container input[type="reset"], .navigation-container input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu_hover' ) ) : ?>  
		 .navigation-container button:hover, .navigation-container input[type="button"]:hover, .navigation-container input[type="reset"]:hover, .navigation-container input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu_hover', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu_hover' ) ) : ?>  
		 .navigation-container button:hover, .navigation-container input[type="button"]:hover, .navigation-container input[type="reset"]:hover, .navigation-container input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu_hover', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		  
	</style> 
<?php } 

add_action( 'wp_head', 'bldr_add_customizer_css' );
