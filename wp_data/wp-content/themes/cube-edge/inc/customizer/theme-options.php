<?php
/**
 * Theme Options.
 *
 * @package cube_edge
 */

// Add Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'cube-edge' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Multiple Items Slider
$wp_customize->add_section('multiple_items_slider', array(    
	'title'       => __('Multiple Items Slider', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('enable_multiple_items_slider', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('enable_multiple_items_slider', 
	array(		
		'label' 	=> __('Enable Section', 'cube-edge'),
		'section' 	=> 'multiple_items_slider',
		'settings'  => 'enable_multiple_items_slider',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('number_of_multiple_items_slider_column', 
	array(
	'default' 			=> 2,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_multiple_items_slider_column', 
	array(
	'label'       => __('Number of Column (Min: 2 | Max: 4)', 'cube-edge'),
	'section'     => 'multiple_items_slider',   
	'settings'    => 'number_of_multiple_items_slider_column',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 2,
			'max'	=> 4,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('number_of_multiple_items_slider', 
	array(
	'default' 			=> 4,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_multiple_items_slider', 
	array(
	'label'       => __('Number of Posts (Max: 50)', 'cube-edge'),
	'section'     => 'multiple_items_slider',   
	'settings'    => 'number_of_multiple_items_slider',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('multiple_items_slider_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('multiple_items_slider_category', 
	array(		
		'label' 	=> __('Select Categories', 'cube-edge'),
		'section' 	=> 'multiple_items_slider',
		'settings'  => 'multiple_items_slider_category',
		'type' 		=> 'select',
		'choices' 	=> cube_edge_get_post_categories(),
	)
);

// Highlighted Posts section
$wp_customize->add_section('highlighted_posts_section', array(    
	'title'       => __('Highlighted Post Options', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('highlighted_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('highlighted_posts', 
	array(		
		'label' 	=> __('Enable Highlighted Posts', 'cube-edge'),
		'section' 	=> 'highlighted_posts_section',
		'settings'  => 'highlighted_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('number_of_highlighted_posts_items', 
	array(
	'default' 			=> 3,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_highlighted_posts_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'cube-edge'),
	'section'     => 'highlighted_posts_section',   
	'settings'    => 'number_of_highlighted_posts_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('highlighted_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('highlighted_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'cube-edge'),
		'section' 	=> 'highlighted_posts_section',
		'settings'  => 'highlighted_posts_category',
		'type' 		=> 'select',
		'choices' 	=> cube_edge_get_post_categories(),
	)
);

// Top Stories Section
$wp_customize->add_section('top_stories_section', array(    
	'title'       => __('Top Stories Options', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('top_stories', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('top_stories', 
	array(		
		'label' 	=> __('Enable Top Stories', 'cube-edge'),
		'section' 	=> 'top_stories_section',
		'settings'  => 'top_stories',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('top_stories_section_title', 
	array(
		'default'           => 'Top Stories',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('top_stories_section_title', 
	array(
		'label'       => __('Section Title', 'cube-edge'),
		'section'     => 'top_stories_section',   
		'settings'    => 'top_stories_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('number_of_top_stories_items', 
	array(
	'default' 			=> 4,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_top_stories_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'cube-edge'),
	'section'     => 'top_stories_section',   
	'settings'    => 'number_of_top_stories_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('top_stories_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('top_stories_category', 
	array(		
		'label' 	=> __('Select Categories', 'cube-edge'),
		'section' 	=> 'top_stories_section',
		'settings'  => 'top_stories_category',
		'type' 		=> 'select',
		'choices' 	=> cube_edge_get_post_categories(),
	)
);

// Popular Post section
$wp_customize->add_section('popular_posts_section', array(    
	'title'       => __('Popular Post Options', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('popular_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('popular_posts', 
	array(		
		'label' 	=> __('Enable Popular Posts', 'cube-edge'),
		'section' 	=> 'popular_posts_section',
		'settings'  => 'popular_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('popular_posts_section_title', 
	array(
		'default'           => 'Popular Posts',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('popular_posts_section_title', 
	array(
		'label'       => __('Section Title', 'cube-edge'),
		'section'     => 'popular_posts_section',   
		'settings'    => 'popular_posts_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('number_of_popular_posts_items', 
	array(
	'default' 			=> 12,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_popular_posts_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'cube-edge'),
	'section'     => 'popular_posts_section',   
	'settings'    => 'number_of_popular_posts_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('popular_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('popular_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'cube-edge'),
		'section' 	=> 'popular_posts_section',
		'settings'  => 'popular_posts_category',
		'type' 		=> 'select',
		'choices' 	=> cube_edge_get_post_categories(),
	)
);

// Trending Post section
$wp_customize->add_section('trending_posts_section', array(    
	'title'       => __('Trending Post Options', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('trending_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('trending_posts', 
	array(		
		'label' 	=> __('Enable Trending Posts', 'cube-edge'),
		'section' 	=> 'trending_posts_section',
		'settings'  => 'trending_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('trending_posts_section_title', 
	array(
		'default'           => 'Trending Posts',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('trending_posts_section_title', 
	array(
		'label'       => __('Section Title', 'cube-edge'),
		'section'     => 'trending_posts_section',   
		'settings'    => 'trending_posts_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('number_of_trending_posts_items', 
	array(
	'default' 			=> 4,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_trending_posts_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'cube-edge'),
	'section'     => 'trending_posts_section',   
	'settings'    => 'number_of_trending_posts_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('trending_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('trending_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'cube-edge'),
		'section' 	=> 'trending_posts_section',
		'settings'  => 'trending_posts_category',
		'type' 		=> 'select',
		'choices' 	=> cube_edge_get_post_categories(),
	)
);

// Recent Post section
$wp_customize->add_section('recent_posts_section', array(    
	'title'       => __('Recent Post Options', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('recent_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('recent_posts', 
	array(		
		'label' 	=> __('Enable Recent Posts', 'cube-edge'),
		'section' 	=> 'recent_posts_section',
		'settings'  => 'recent_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('recent_posts_section_title', 
	array(
		'default'           => 'Recent Posts',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('recent_posts_section_title', 
	array(
		'label'       => __('Section Title', 'cube-edge'),
		'section'     => 'recent_posts_section',   
		'settings'    => 'recent_posts_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('number_of_recent_posts_items', 
	array(
	'default' 			=> 8,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_recent_posts_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'cube-edge'),
	'section'     => 'recent_posts_section',   
	'settings'    => 'number_of_recent_posts_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('recent_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('recent_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'cube-edge'),
		'section' 	=> 'recent_posts_section',
		'settings'  => 'recent_posts_category',
		'type' 		=> 'select',
		'choices' 	=> cube_edge_get_post_categories(),
	)
);

// Editors Choice section
$wp_customize->add_section('editors_choice_section', array(    
	'title'       => __('Editors Choice Options', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('editors_choice', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('editors_choice', 
	array(		
		'label' 	=> __('Enable Editors Choice', 'cube-edge'),
		'section' 	=> 'editors_choice_section',
		'settings'  => 'editors_choice',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('editors_choice_section_title', 
	array(
		'default'           => 'Editors Choice',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('editors_choice_section_title', 
	array(
		'label'       => __('Section Title', 'cube-edge'),
		'section'     => 'editors_choice_section',   
		'settings'    => 'editors_choice_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('number_of_editors_choice_items', 
	array(
	'default' 			=> 6,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'cube_edge_sanitize_number_range'
	)
);

$wp_customize->add_control('number_of_editors_choice_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'cube-edge'),
	'section'     => 'editors_choice_section',   
	'settings'    => 'number_of_editors_choice_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('editors_choice_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_edge_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('editors_choice_category', 
	array(		
		'label' 	=> __('Select Categories', 'cube-edge'),
		'section' 	=> 'editors_choice_section',
		'settings'  => 'editors_choice_category',
		'type' 		=> 'select',
		'choices' 	=> cube_edge_get_post_categories(),
	)
);

// Sidebar section
$wp_customize->add_section('section_sidebar', array(    
	'title'       => __('Sidebar Options', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
));

// Blog Sidebar Option
$wp_customize->add_setting('blog_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'cube_edge_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('blog_sidebar', 
	array(		
	'label' 	=> __('Blog Sidebar', 'cube-edge'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'blog_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'cube-edge'),						
		'right-sidebar' => __( 'Right Sidebar', 'cube-edge'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'cube-edge'),	
		),	
	)
);

// Single Post Sidebar Option
$wp_customize->add_setting('single_post_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'cube_edge_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('single_post_sidebar', 
	array(		
	'label' 	=> __('Single Post Sidebar', 'cube-edge'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'single_post_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'cube-edge'),						
		'right-sidebar' => __( 'Right Sidebar', 'cube-edge'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'cube-edge'),	
		),	
	)
);

// Archive Sidebar Option
$wp_customize->add_setting('archive_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'cube_edge_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('archive_sidebar', 
	array(		
	'label' 	=> __('Archive Sidebar', 'cube-edge'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'archive_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'cube-edge'),						
		'right-sidebar' => __( 'Right Sidebar', 'cube-edge'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'cube-edge'),	
		),	
	)
);

// Page Sidebar Option
$wp_customize->add_setting('page_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'cube_edge_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('page_sidebar', 
	array(		
	'label' 	=> __('Page Sidebar', 'cube-edge'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'page_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'cube-edge'),						
		'right-sidebar' => __( 'Right Sidebar', 'cube-edge'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'cube-edge'),	
		),	
	)
);

// Excerpt Length
$wp_customize->add_section('section_excerpt_length', 
	array(    
	'title'       => __('Excerpt Length', 'cube-edge'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'excerpt_length', array(
	'default'           => '28',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'cube_edge_sanitize_number_range',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'excerpt_length', array(
	'label'       => __( 'Excerpt Length', 'cube-edge' ),
	'description' => __( 'Note: Min 5 & Max 100.', 'cube-edge' ),
	'section'     => 'section_excerpt_length',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 5, 'max' => 100, 'style' => 'width: 55px;' ),
) );