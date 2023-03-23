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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kiraforum' );

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
define( 'AUTH_KEY',         'C=Tjnnz}A t8:ClD)!:}|z%{*&xB/q^ALSiDf6~4K_(C-IHD%rS1-Y|aDgptWgv}' );
define( 'SECURE_AUTH_KEY',  '@B>F6/hu.<-AxDZOz+{)42-iBDc$-CQI/X`PWBgEua6l#.]E*Z50E~1yA7W9lJdc' );
define( 'LOGGED_IN_KEY',    'mik6uK;6z=bi|qtYMr7cb}W^!i.skM[N} 0~Oy=p53`v0`vPS[T:qOPW*s03Mcd~' );
define( 'NONCE_KEY',        ',D0()B~*V;r~BXr]XeztCg?Iq3{%2m[S2)a2<7hr]?^{$@C{f}ptipL()f/)JgAa' );
define( 'AUTH_SALT',        'VHK^$=]2.,>Qhs#JYf(iVucWXNNU]05&Lp4~7t+ODmMTy+<xP}w]+X-Nmvj4PB`6' );
define( 'SECURE_AUTH_SALT', 'eHFeO6zf=xa1xOqDLi0QLqJ0SX!0g=B 5a3@/h=UDsl8rhXHFq5Y|I`FBeQ<38^c' );
define( 'LOGGED_IN_SALT',   'D,1x>UuNk{p{>tz`T#>l#FY;`yMRSkHB6Ei5erKA|Z,JPy_<@|E1dVrh#U*o*>F%' );
define( 'NONCE_SALT',       '5^^wkPUNI,Q~K[eV]N;jjPgJ6)>z]z^IW9q]E:4Dlj)i88.,! I)uY1+oD<&9S8T' );

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
