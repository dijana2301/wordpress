<?php
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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '{KYIZAy;yfPlIhx1:}=N)Cf(Z-(zN8}MZZD5A$9.@$>PBDdb2`v`rjuI/;#}gumd' );
define( 'SECURE_AUTH_KEY',  'P=9qV_-^47`RlivQBTUMUYsZ7}(J9jeNd<7O?wQPqH,~iX aF/=f:s:Q05,tXy#G' );
define( 'LOGGED_IN_KEY',    'IuDYF0XoBve|~f!|`Z)IA[xSBUpV+bV`Lk)gGrb(k5#V.MsnHco29e{@r8`Uhb-w' );
define( 'NONCE_KEY',        '<*4Gew*@Y9Qq_9eX 83[8}r>:D{6 T5>^Vy~iE]~Gg;a_uFHrr{.Nni[1lp/G}3i' );
define( 'AUTH_SALT',        'Z=Ay@__T~/(GGb|&AsZ/X>8j,5r,8_{.+~N>c`f3VL@FkCR}_&&r=#!_cVMnlb?~' );
define( 'SECURE_AUTH_SALT', '/skItW`NLCuSh_-+f7hOv4;Uo~uiW~m(JazP6Ssxdt9%O+wK0p{X}6(&0cX 48X$' );
define( 'LOGGED_IN_SALT',   'g5;-nohwm1!OB&~;GBwnU 3*-^j>71{^XYq(aua{k;7PEfZh9MfS2Lswm+_!Lej&' );
define( 'NONCE_SALT',       'hoP,ZxT`_j(O8i/dc@j7AK9%m*_B>[aU;3(?C=OCq`Swen{GSd2V[kh/*jL+>-@}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
