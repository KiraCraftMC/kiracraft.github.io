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
define( 'DB_NAME', 'forum' );

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
define( 'AUTH_KEY',         'Y!w}}VKQ3N>8NkN{aZ0_~hLR{(94qR8u]{T~z^l?NR26yngFN6%qcwZ#G}S~4|?H' );
define( 'SECURE_AUTH_KEY',  'q8WAFFE{~acPNk+SJ06Wu0!gQG[?S?C}!23EWC=}*<Pvn?649t[NVY`m~Kz/{%YT' );
define( 'LOGGED_IN_KEY',    'Y~lN}>X%Ni-Rm%$;L=lo~ L*xypQ>3)6T8{}z=M38g}1 lcSFo<>P(@2v%iig*KI' );
define( 'NONCE_KEY',        'e(%YW3C$mJqYEI>_U}%bxrF_sA~qOh >Fx1-/Kzfs@~IL]:%27$68olb%+ykFcFr' );
define( 'AUTH_SALT',        'unSTO1a>,PUlz$&40A54W:15w<{+q WJ@=KC|^sdw8kD=<bu|n3!.6U<@C4*twMg' );
define( 'SECURE_AUTH_SALT', 'G}TAj)1S`_WKoWThf.qUN,(b6)k.kH^.G06BzA{>%`cSx@p/*.ibqmgKVMq>$m{j' );
define( 'LOGGED_IN_SALT',   'k7TA]vFz5/S)q<442s=gLhUZx<Nmve0NX$@}&YlzT(PRjUK^$*~UNs.AT-e{|^Cf' );
define( 'NONCE_SALT',       '&JqO!UzePnmc%o-%x.:aLJStE4paHKu5N92T5qR8r|2p=8uVbbW_kMk7y,u-cf?q' );

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
