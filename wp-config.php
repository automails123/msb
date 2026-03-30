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
define( 'DB_NAME', 'msb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         ')O&jpYe_B03i~.Zax~jjlA]j>|0,dZkNHa^qX1AezMw)vh}q]y2?Eyin3dth+m>~');
define('SECURE_AUTH_KEY',  '$zbnx[fS${H!OgFz`9i%Cp0P2L!Jd66qu(}Wz<.M;Ut*(p|[rc)J3f<6arY&(B.p');
define('LOGGED_IN_KEY',    'i&vdL+&444-mK9<wnuE=-xeAR@_]Rh!WqEhmo)7[<aXGmzLb(E{gmaKza#iGw-<|');
define('NONCE_KEY',        ']/NZ6k;$@BNk9hQNl^{t#JADx[xZdk%WpFtH2q5,U&Ri4>7DzG~WF+zc-s,!f.*w');
define('AUTH_SALT',        '9-<+~!(%fMcvu6%fXHa]47L2t^H&*Xdw:|=]P^VLtNzgH&N>To|Z:V-1&yyFt~+-');
define('SECURE_AUTH_SALT', 'w1~?z$Om]K]Q4%#pr*hy^Ke0f/jkOQ=-Hnd@&|y_zMJl=,cO+tW$HBcGQZ?an}_#');
define('LOGGED_IN_SALT',   'qDx60l~82fs}Y7ov+jSx!-;/V-`zXgT(04sZ0&D)^d|*VGHG7_MqUjgQKepKA1S7');
define('NONCE_SALT',       '#FG<I8%k3wzc6xeWi1n)|$.4NDl4bk5o=mrW!]6#&VRyT@3|EI`NXP6E*=.#~18,');

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
