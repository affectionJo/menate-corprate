<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'menate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'pMv1lyZfz7qrXyXCuJwc7D3ys3bQDcdrKlMtPOvLLEzXOmYweN282A7rxJUxRPO8' );
define( 'SECURE_AUTH_KEY',  'jiDu5UtxkuQvpHlUCdfxkSyRa5VenN3YB0B1PsYkig0DuCJSvEHCBmAowRdoSSPk' );
define( 'LOGGED_IN_KEY',    'Md1Ydc0TkHKe6Nsrs1dIvSOcxcJvLyxlF0zjhXJdNSsjkbdzEDiuq4rn5VPahOqL' );
define( 'NONCE_KEY',        '0Dkf0xiCbVubseS8VzwLfgjXpUc4NI2yvHU6yEUIipbhVr6TZ4WVwFeiTHBzCzRi' );
define( 'AUTH_SALT',        'En2OHtPbfNNvUxdhcM4jz9a0XaNUDGaFYb6Uo6RINm1xbKsH6TbgfILEHcQ0IdQm' );
define( 'SECURE_AUTH_SALT', 'igqJdEyNzW5OdVKzJ1lHCoXCk8hFKFFow7gjdeNjk8rDwTc7RXFYyAKLISbFfuLy' );
define( 'LOGGED_IN_SALT',   'cNzcWZ36kktSF68QSu43RDsW4024uguVnU6QdTfTRI2jcaYs9Plt9mfII1tvfxMM' );
define( 'NONCE_SALT',       'iiK74eAEoFfwKyURIq6BX7voL1rUW6kOIC8tzbSbptKqn1Zx3NUQcjRMaIu7oV7L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
