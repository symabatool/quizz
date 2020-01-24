<?php
/**
 * Single Post Customizer Options
 *
 * @package shark_magazine
 */

// Add excerpt section
$wp_customize->add_section( 'shark_magazine_single_section', array(
	'title'             => esc_html__( 'Single Post Setting','shark-magazine' ),
	'description'       => esc_html__( 'Single Post Setting Options', 'shark-magazine' ),
	'panel'             => 'shark_magazine_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'shark_magazine_theme_options[sidebar_single_layout]', array(
	'sanitize_callback'   => 'shark_magazine_sanitize_select',
	'default'             => shark_magazine_theme_option('sidebar_single_layout'),
) );

$wp_customize->add_control(  new Shark_Magazine_Radio_Image_Control ( $wp_customize, 'shark_magazine_theme_options[sidebar_single_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'shark-magazine' ),
	'section'             => 'shark_magazine_single_section',
	'choices'			  => shark_magazine_sidebar_position(),
) ) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'shark_magazine_theme_options[show_single_date]', array(
	'default'           => shark_magazine_theme_option( 'show_single_date' ),
	'sanitize_callback' => 'shark_magazine_sanitize_switch',
) );

$wp_customize->add_control( new Shark_Magazine_Switch_Control( $wp_customize, 'shark_magazine_theme_options[show_single_date]', array(
	'label'             => esc_html__( 'Show Date', 'shark-magazine' ),
	'section'           => 'shark_magazine_single_section',
	'on_off_label' 		=> shark_magazine_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'shark_magazine_theme_options[show_single_category]', array(
	'default'           => shark_magazine_theme_option( 'show_single_category' ),
	'sanitize_callback' => 'shark_magazine_sanitize_switch',
) );

$wp_customize->add_control( new Shark_Magazine_Switch_Control( $wp_customize, 'shark_magazine_theme_options[show_single_category]', array(
	'label'             => esc_html__( 'Show Category', 'shark-magazine' ),
	'section'           => 'shark_magazine_single_section',
	'on_off_label' 		=> shark_magazine_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'shark_magazine_theme_options[show_single_tags]', array(
	'default'           => shark_magazine_theme_option( 'show_single_tags' ),
	'sanitize_callback' => 'shark_magazine_sanitize_switch',
) );

$wp_customize->add_control( new Shark_Magazine_Switch_Control( $wp_customize, 'shark_magazine_theme_options[show_single_tags]', array(
	'label'             => esc_html__( 'Show Tags', 'shark-magazine' ),
	'section'           => 'shark_magazine_single_section',
	'on_off_label' 		=> shark_magazine_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'shark_magazine_theme_options[show_single_author]', array(
	'default'           => shark_magazine_theme_option( 'show_single_author' ),
	'sanitize_callback' => 'shark_magazine_sanitize_switch',
) );

$wp_customize->add_control( new Shark_Magazine_Switch_Control( $wp_customize, 'shark_magazine_theme_options[show_single_author]', array(
	'label'             => esc_html__( 'Show Author', 'shark-magazine' ),
	'section'           => 'shark_magazine_single_section',
	'on_off_label' 		=> shark_magazine_show_options(),
) ) );
