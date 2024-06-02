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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'kZoZ&x-vVCrY@D-9XhQ.$ZxbFr_}jz&h`e,R&D3(L0jX;&8l_HW`xEB%dC?jw>+n' );
define( 'SECURE_AUTH_KEY',   '#*uM5I8]VFnu,Rou3`6fK%wH9e[nXGf}t&._5H,L1n.wtc4iOE?nj&Jbhq!5<K5g' );
define( 'LOGGED_IN_KEY',     'MU*Gs,sxD;B?%36M7sp@,N~X,^F!xS8/1x2Kl>)|gA+QdNY1FDmXS=;mXB<bkq/a' );
define( 'NONCE_KEY',         '=IEKd%^N-,<@|Ebf4&Mh4e#Uo`]!-YaSP;!u-.q3WJs)bJwhg@nCTps}mII71LgF' );
define( 'AUTH_SALT',         'xU,BNmyZzL`x./F8LXR^n=K@.dRR#wqk91|?F0ga-8#:N<x~BY/+!0Y`a5UaNaG8' );
define( 'SECURE_AUTH_SALT',  'SN)kQ6jld&xg(7BmU(z8E=8c0-bw_ogX2nb*#DsmcKa;w;1jKx92Ujn|N^ylnm]t' );
define( 'LOGGED_IN_SALT',    'A;p?%be]*^OQ^its` 7LlQ%cOD tVLsO7Phly,Dz kh0wY,Rj1[<v1%V-E{D+J|R' );
define( 'NONCE_SALT',        'pQl0s#/f36+I;T#O|JZ=;}=;nZ2:IFMJ;T,MB&tET& ,xxTjX!A:T=33ZrRiYypV' );
define( 'WP_CACHE_KEY_SALT', '!8gYEk<%^yB8`F]7:KS$`6NFa5q*0rjIW8`qrb19;3GlB5pAVij)kd9>~ FiSX4H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
