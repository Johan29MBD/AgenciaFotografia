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
define( 'DB_NAME', 'agenciafotografia' );

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
define( 'AUTH_KEY',         'O|{=>ohm7K(0o:h_}PJ+$>aQ;yDLNOO_dmS[kki+?:f-0%+]zN0$OsvlDa% #7{>' );
define( 'SECURE_AUTH_KEY',  '1~Ws=zlyNA8v(%NH0%#k`vl-!QuBRMlhD.MP~]5:>R8H$dkTE)~4S[G_E+EvGuTi' );
define( 'LOGGED_IN_KEY',    '%aQv-?:k!!v1M*5%+-eE]v/WavF[6-:5t(w&V|.?BLIV32MO>z@q(LFt@302wWgW' );
define( 'NONCE_KEY',        'RZhT-?@#T:1;$9.?#9/IEJoSQ*Az4(6uMYD[q(]P>5M,g[Lg)hs)}/@9o_jB|<h!' );
define( 'AUTH_SALT',        '`$>Dc.z2Dx3b75#DKqE<3uCtTGoS/f>:+OD]![Y3QWaG Vallb_JsHk+8E~x/WiO' );
define( 'SECURE_AUTH_SALT', 'th}xcq|j!.AGSBnGRn#C/6,0D<B.%jk$ua6HNe/2_93s;$4Jv<)Pn304`Sk4jS.T' );
define( 'LOGGED_IN_SALT',   'ZeRr?Jz3dk{W/Ec~*1$#UoLT-eYnW6+BunEDx(;!-{Ha4[:L2r@>]YQ5?arEzN=s' );
define( 'NONCE_SALT',       'hzB6)nDx @&m`2Eq7%g%X3-(+_Ru0*0G[abk5GX<h37) 0$(BK-wI^3rJSuxl:wm' );

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
