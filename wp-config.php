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
define( 'DB_NAME', 'digied' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wpgXOVp{3?E;u{XPM,6p5?4O<vzLW1C1CU~~e:]06xdJ)<V&G0!ylmbDoEu~&&vv' );
define( 'SECURE_AUTH_KEY',  'n0rH|82Sc@owv`ve~yrN;ITe[@?h#vB{o)$S?[qh(B[/0{|9+}kN``Qx6|yqv^ue' );
define( 'LOGGED_IN_KEY',    '5z2guhiRPbEi*1-cu3$T]7*;wDU7+E{`0Gj})iil)rmLet?;+y5+-gmYP/|+J*E(' );
define( 'NONCE_KEY',        'GiEc!K)O*^-mP3tS?^$j4q|cL`bItIb`.vO2AQfaw,x$:0&]eD=)G*hD:xTnYt/y' );
define( 'AUTH_SALT',        '1$eTQOH*{/;LFnt8r_ 5Y;#ll:.nO7mZDeRhV85w{YP0RoAH9|pV&7aU4Q!oiD!3' );
define( 'SECURE_AUTH_SALT', 'ii_Yxj1CH{l@c^ )LvJt2F{~5y:vn=p;V5W]y#C3oS.`*l/Vqv7c=s5Y.DYUEz^a' );
define( 'LOGGED_IN_SALT',   '[F/&et*%,0V6 +4s4]?8R<5%J!3|9{*u~N3]BO-Ida`iWbEp[mQxeGTnH&7q/.YS' );
define( 'NONCE_SALT',       'hwG(9StlZImKbM2.Yx1YF2DemJqdHchU5ZklHn*(^!9=b1D1yV`q?p8QDQbLaO)A' );

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
