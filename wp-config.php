<?php
define('WP_CACHE', true); // Added by WP Rocket
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'castovni_wp694' );

/** MySQL database username */
define( 'DB_USER', 'castovni_wp694' );

/** MySQL database password */
define( 'DB_PASSWORD', 'upKr94][O@.Z4S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h7gw8qszbiwim8ecytrtravidvmyarrjeeyjgy7wwfxmn63wvwo5b4qcytidmw41' );
define( 'SECURE_AUTH_KEY',  'hzfiu9i7mgzd7gsju2jdlhwrlym7c6f18qozoxfcyfdzjtxqs63z4vbtxx9oswah' );
define( 'LOGGED_IN_KEY',    'ffa6veoqykv7jymf6186zchj6qrrno5hqatuexinnlwnzsxutlxwvue4rqpje7k7' );
define( 'NONCE_KEY',        'ishbuf0rk9dac3meak5gjbnrxknovk1bp4seo3yrnvvzguga1dmfqxaivkqim4yu' );
define( 'AUTH_SALT',        'snv0nkq7atl7gqrtsuklsl7u5pkb7mg7fvdodhc5bnhd7r4tk9fvatk9b6qk4zhj' );
define( 'SECURE_AUTH_SALT', 'zrzoif4100mkqdwtpwpogpl3lr19m86whvnw2qal1qlj7aqkjfwxahbu9afzeoyn' );
define( 'LOGGED_IN_SALT',   'uegwhuitixrcxyo24lwvxl9sj2y5pu65osxpll4vwgr87tto3cngy4bxwuo8gfav' );
define( 'NONCE_SALT',       '1dgbsyziu9vpwxzfjuoqe1ayduiuqkrua887e4uvyxfqu2vu2yeahenc98ae6cwz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4t_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
