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
define( 'DB_NAME', 'player_data' );

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
define( 'AUTH_KEY',         'ne@.f.de*SRhp>4Rzl`mHF`}b0Jw/G9O]N`sgH#:ZmN8q17_YuExPY3#ju_bRfzQ' );
define( 'SECURE_AUTH_KEY',  ':K.h%6nzqGI$mN<^?q0?I-{D}d!pc:uxwst ro2JmkM7QG2.,XT=S|Gn!{X ps-C' );
define( 'LOGGED_IN_KEY',    '^rlq_-gx!yu{M?]X~x6X)bOk88f|pc,y:3U|e_5kjf4Uw,K7Z_]f0C!1Fh3E0nrj' );
define( 'NONCE_KEY',        '*N$_W]``D3qc+W-GWi[XqGfdjLQ~yrcLOu7JW!(tR*SlSVuE?4tQ-eZIsGlRoi-]' );
define( 'AUTH_SALT',        ')1(*z1)k$^y)g.38C(1+7DPth-3M8 3]U&<EO&:m#J@Kai-<e)+*OdW&daI6ee9i' );
define( 'SECURE_AUTH_SALT', 'aZH6Mgm/~b):CV;)Qoc8SJ_|^:5-U:+zX,%L+4z8sH_#%12S[P]]=U5@HvA8cc$6' );
define( 'LOGGED_IN_SALT',   'Q=PA5@cT7lneTo:f1hV>.vlrWgqy}M.gC,=hMvg6/1:>[_^fM.^,[FvJ8B5M%7{J' );
define( 'NONCE_SALT',       'B)-$w3w:=AfB]n_j0oK8^%4|?6h@7-(@+.`#Lq(|Tk5GY)70=<qzU_xT9Tb,pDKh' );

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
