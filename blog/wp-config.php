<?php
define( 'WP_CACHE', true );

 // Added by AirLift

// 



/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i9835229_wrbr1' );
// define( 'DB_NAME', 'wp_juststart' );

/** Database username */
define( 'DB_USER', 'juststart229' );
// define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '52295229_wrbr1ERah!' );
// define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'koksjptlvejssdwaoqytgngowfm4yhwolvshzll5fnskchqd09suvemi840uvxks' );
define( 'SECURE_AUTH_KEY',  'phnwiun8jorlqovn6houwkjfi0ujvvlmoi9blefu0y28h6ffx3cimrz5zoevmxjr' );
define( 'LOGGED_IN_KEY',    '06jiipnqffcthexecpok4lh7mvlopbkdwixyaagsqms1tklx69rjrk0bqxur5imx' );
define( 'NONCE_KEY',        'crf5pgvw6d4vdkev05w7qojacpg69hkzqadjzpzhxz2s1tk89kbd5593yufqj61q' );
define( 'AUTH_SALT',        'ombspoah71uujd6ocn2lykkc3h1o4pgflgrq4hhatadcgwjwmtxdcjd0rskxlfgu' );
define( 'SECURE_AUTH_SALT', '3ofpgsplmflve82mev6wjwggbwqopgj5x1tpzribmycb9c2mvnjbynuyexasnmew' );
define( 'LOGGED_IN_SALT',   'xvjeve90vowfgi9skgtfh5mya0kasvfhjb1oxmmhnr9i5te1jretrnttszvhsv8t' );
define( 'NONCE_SALT',       'yi3svauwnbylmwovobl61kitlwqmm31bjy8eggja3ykfrfmdgnno1sr6pgwy4xar' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplo_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );


/* Add any custom values between this line and the "stop editing" line. */



// define( 'DISALLOW_FILE_EDIT', true );
// define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
