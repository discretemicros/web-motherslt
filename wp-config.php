<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u219031756_mlt' );

/** Database username */
define( 'DB_USER', 'u219031756_mltu' );

/** Database password */
define( 'DB_PASSWORD', 'Trust20221!' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}Yw3eP .4$x@Q1k+jvXzUFb5fZFQ tI8S4-<VxZCi=P!&U]Yh$uBJ[Hs>,wdLu/3' );
define( 'SECURE_AUTH_KEY',   'x!bB/JI2nRkJQl=.036ii3(e2F+%9 yLY<$ip_~r9E{X%(p|3Fa8M<q1Q^O{$<E^' );
define( 'LOGGED_IN_KEY',     'mN#;(V[6i:/^fSwhjY8-J.H#kJmD?w1DhaGGRwBm~~1-*g9oxFK[t_,uGQ6!2G4q' );
define( 'NONCE_KEY',         '=7%jiNto.pRI{`{D?Z9{N)li.+$%{$3L8CZT$!GecD&gyz!^Ie=%w1`^~gykHpxo' );
define( 'AUTH_SALT',         '^d`|j-x0=q9 u%qL:%h|s<T.0o;N#rQ{rM{r?f9H*r:#1jV6xMq?)W{Y%]K0x|r2' );
define( 'SECURE_AUTH_SALT',  'JIv11T#x )5*1`S8.e]8=0Ga#2P&cJJkrj=88HJjvmsH: Y<*blulydrx)%js4eg' );
define( 'LOGGED_IN_SALT',    '-R8IQQosEq@bK&St7~X;ZQt`}ZH6:C1&*^bXIzZSEZR;2*-l_]ZWobP1?w?_X*gQ' );
define( 'NONCE_SALT',        '|K/+>9$a1F4k*tqaA0I<U_4ZBzI>9@eV.qlAE=r3Bzxy8gFs[wK;q/p&U5C)[[/f' );
define( 'WP_CACHE_KEY_SALT', 'UUaSm@|leamR#Ubo<.+5OP<?tlY@!ne?aLG9om5aET9QM=x&ewvN.06QQQNc!n@N' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
