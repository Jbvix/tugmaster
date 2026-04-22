<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage import-export-company
 * @since import-export-company 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since import-export-company 1.0
	 *
	 * @return void
	 */
	function import_export_company_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'import-export-company-border',
				'label' => esc_html__( 'Borders', 'import-export-company' ),
			)
		);

		
	}
	add_action( 'init', 'import_export_company_register_block_styles' );
}