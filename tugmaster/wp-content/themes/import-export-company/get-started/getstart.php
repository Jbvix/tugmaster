<?php
/**
 * Admin functions.
 *
 * @package Import Export Company
 */

define('IMPORT_EXPORT_COMPANY_SUPPORT',__('https://wordpress.org/support/theme/import-export-company/','import-export-company'));
define('IMPORT_EXPORT_COMPANY_REVIEW',__('https://wordpress.org/support/theme/import-export-company/reviews/#new-post','import-export-company'));
define('IMPORT_EXPORT_COMPANY_DOC_URL',__('https://preview.wpradiant.net/tutorial/import-export-company-free/','import-export-company'));
define('IMPORT_EXPORT_COMPANY_BUY_NOW',__('https://www.wpradiant.net/products/import-export-wordpress-theme','import-export-company'));
define('IMPORT_EXPORT_COMPANY_LIVE_DEMO',__('https://preview.wpradiant.net/import-export-company/','import-export-company'));
define('IMPORT_EXPORT_COMPANY_PRO_DOC',__('https://preview.wpradiant.net/tutorial/import-export-company-pro/','import-export-company'));
define('IMPORT_EXPORT_COMPANY_BUY_BUNDLE',__('https://www.wpradiant.net/products/wordpress-theme-bundle','import-export-company'));


/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function import_export_company_admin_menu_page() {

	$import_export_company_theme = wp_get_theme( get_template() );

	add_theme_page(
		$import_export_company_theme->display( 'Name' ),
		$import_export_company_theme->display( 'Name' ),
		'manage_options',
		'import-export-company',
		'import_export_company_do_admin_page'
	);

}
add_action( 'admin_menu', 'import_export_company_admin_menu_page' );

function import_export_company_admin_theme_style() {
	wp_enqueue_style('import-export-company-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'import_export_company_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function import_export_company_do_admin_page() {

	$import_export_company_theme = wp_get_theme( get_template() );
	?>
	<div class="import-export-company-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $import_export_company_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'import-export-company' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'import-export-company' ); ?></a>
				</span>
				<span>
					<a class="button btn-bundle" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_BUY_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Buy Bundle', 'import-export-company' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'import-export-company' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $import_export_company_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
       <p>
			    <a class="button button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e( 'Visit Site', 'import-export-company' ); ?></a>
		   </p>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $import_export_company_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $import_export_company_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->

  <nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'import-export-company' ); ?>">
    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'import-export-company' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'import-export-company' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'import-export-company' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'import-export-company', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'import-export-company' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'import-export-company', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'import-export-company' ); ?></a>
  </nav>

    <?php
      import_export_company_main_screen();

      import_export_company_changelog_screen();

      import_export_company_free_vs_pro();
}
/**
 * Output the main about screen.
 */
function import_export_company_main_screen() {
  if ( isset( $_GET['page'] ) && 'import-export-company' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
  ?>
    
<div class="four-col">

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'import-export-company' ); ?></h3>

		<p>
			<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.', 'import-export-company' ); ?>
		</p>

		<p>
			<a class="button green button-primary" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'import-export-company' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'import-export-company' ); ?></h3>

		<p>
			<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'import-export-company' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'import-export-company' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'import-export-company' ); ?></h3>
		<p>
			<?php esc_html_e( 'We would love to hear your feedback.', 'import-export-company' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'import-export-company' ); ?></a>
		</p>

	</div><!-- .col -->


	<div class="col">

		<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'import-export-company' ); ?></h3>

		<p>
			<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'import-export-company' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'import-export-company' ); ?></a>
		</p>

	</div><!-- .col -->

  	<div class="col">

		<h3><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Live Demo', 'import-export-company' ); ?></h3>

		<p>
			<?php esc_html_e( 'Preview the live demo to explore the homepage, inner pages, and overall design flow before setup.', 'import-export-company' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'View Live Demo', 'import-export-company' ); ?></a>
		</p>

	</div><!-- .col -->

	<?php $theme_slug = get_stylesheet(); ?>

	<div class="col">
			<h3>
				<i class="dashicons dashicons-admin-links"></i>
				<?php esc_html_e( 'Quick Link', 'import-export-company' ); ?>
			</h3>

			<div class="import-export-company-card-body">
				<div class="import-export-company-card-btn-grp">

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//header&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Header', 'import-export-company' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//footer&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Footer', 'import-export-company' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//sidebar&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Sidebar', 'import-export-company' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'All Template Parts', 'import-export-company' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . $theme_slug . '//front-page&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Frontpage', 'import-export-company' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . $theme_slug . '//archive&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Archive Page', 'import-export-company' ); ?>
					</a>         

				</div>
			</div>
	</div>

</div><!-- .four-col -->
  <?php
  }
}

/**
 * Output the changelog screen.
 */
function import_export_company_changelog_screen() {
  if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
    global $wp_filesystem;
    ?>
    <div class="wrap about-wrap">
      <p class="about-description"><?php esc_html_e( 'Want to know whats been happening with the latest changes?', 'import-export-company' ); ?></p>
      <?php
        // Get the path to the readme.txt file.
        $readme_file = get_template_directory() . '/README.txt';
        if ( ! file_exists( $readme_file ) || ! is_readable( $readme_file ) ) {
          $readme_file = get_template_directory() . '/readme.txt';
        }

        // Check if the readme file exists and is readable.
        if ( file_exists( $readme_file ) && is_readable( $readme_file ) ) {
          $changelog = file_get_contents( $readme_file );
          $changelog_list = import_export_company_parse_changelog( $changelog );
          echo wp_kses_post( $changelog_list );
        } else {
          echo '<p>Changelog file does not exist or is not readable.</p>';
        }
      ?>
    </div>
    <?php
  }
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function import_export_company_parse_changelog( $content ) {
  // Explode content with '== ' to separate main content into an array of headings.
  $content = explode( '== ', $content );

  $changelog_isolated = '';

  // Find the part that starts with 'Changelog ==', i.e., isolate changelog.
  foreach ( $content as $key => $value ) {
    if ( strpos( $value, 'Changelog ==' ) === 0 ) {
      $changelog_isolated = str_replace( 'Changelog ==', '', $value );
    }
  }

  // Explode $changelog_isolated to manipulate it and add HTML elements.
  $changelog_array = explode( '- ', $changelog_isolated );

  // Prepare the HTML structure.
  $changelog = '<pre class="changelog">';
  foreach ( $changelog_array as $value ) {
    // Add opening and closing div and span, only the first span element will have the heading class.
    $value = '<div class="block"><span class="heading">- ' . esc_html( $value ) . '</span></div>';
    // Append the value to the changelog.
    $changelog .= $value;
  }
  $changelog .= '</pre>';

  return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function import_export_company_free_vs_pro() {
  if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
  ?>
    <div class="wrap about-wrap">

      <h3 class="about-description"><?php esc_html_e( 'Compare Free Vs Pro', 'import-export-company' ); ?></h3>
      <div class="vs-theme-table">
        <table>
          <thead>
            <tr><th class="head" scope="col"><?php esc_html_e( 'Theme Features', 'import-export-company' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'import-export-company' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'import-export-company' ); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><span><?php esc_html_e( 'Responsive Design', 'import-export-company' ); ?></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Painless Setup', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Color Options', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium site demo', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Block Layout', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium Patterns', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Fonts', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Slider Block', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Listing Block', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Filter Block', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Gallery Block', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Carousel Block', 'import-export-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td class="feature feature--empty"></td>
              <td class="feature feature--empty"></td>
              <td headers="comp-2" class="td-btn-2"><a target="_blank" href="<?php echo esc_url( IMPORT_EXPORT_COMPANY_BUY_NOW ); ?>" class="sidebar-button single-btn" target="_blank"><?php esc_html_e( 'Buy It Now', 'import-export-company' ); ?></a>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <?php
  }
}
