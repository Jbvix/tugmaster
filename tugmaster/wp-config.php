<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/c62gtwye66po/public_html/tugmaster/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'i10098111_rq8f1' );

/** Database username */
define( 'DB_USER', 'i10098111_rq8f1' );

/** Database password */
define( 'DB_PASSWORD', 'Y.JIXwrwC3iHBgg7zmO67' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME',    'https://tuglife.live/tugmaster');
define('WP_SITEURL', 'https://tuglife.live/tugmaster');


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QcLaih3L2N1lFjHu0qYtp2ZhxbQ7nsYjQIJuQp3hA9rgLtJDHXJe0ZbPhPsGqc4Z');
define('SECURE_AUTH_KEY',  'o4ZSgk471hkKKUz2uPDURHYq9loQ4zm6TpQt2oVzixvVi5Z3A9EuMauZhGfQyR55');
define('LOGGED_IN_KEY',    'kKz7BSSCVGFrAT1gyv1JBmAaPSJ7q8G3Xvn2PC3sV9KH6JQ7Q9oKEMYKAboAL545');
define('NONCE_KEY',        'vu1kLg8Z79qeFV2j0gH0HSwRVgh7n4VKaLoKAagHLZE9AafAV9fDATlQ9lEQJmLv');
define('AUTH_SALT',        'rvwpFeogfbhF7w6YGcK1LxPo31iqFynBxV4qa7kw1F8BUjg1uQEziHodZ7WI7eoq');
define('SECURE_AUTH_SALT', 'yCdu3dhlZ97SB3uN2ra979fg9jFSJumRIwZvSx3IhnRv3OH1auCQr1NoTJq5hdNN');
define('LOGGED_IN_SALT',   'paFHwM12EZeqMLcaEdN2VV0pXMXf5GNFBYoBYqcc8DJ2XdK9UQOTeujfwpQ8LOws');
define('NONCE_SALT',       'nLIQ3fLwBc7CXGN6NgaSbflXtbTYJ0IyHRIR5bC40ddL6ZxpeRCyBSquO4oGxwrG');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'uo4n_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
