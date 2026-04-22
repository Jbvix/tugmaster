<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage import-export-company
 * @since import-export-company 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function import_export_company_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Import_Export_Company_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Import Export Company Pro', 'import-export-company' ),
		'button_text'      => __( 'Upgrade Pro', 'import-export-company' ),
		'url'              => 'https://www.wpradiant.net/products/import-export-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'import_export_company_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function import_export_company_custom_control_scripts() {
	wp_enqueue_script( 'import-export-company-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'import-export-company-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'import_export_company_custom_control_scripts' );
