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
define( 'AUTH_KEY',          '=bGdF`8GY7hI?tF]@I!^q(Gf8^_(<KVl& bP]d!Y2BQ-UC%<6{~&z%@gbNXGaO1C' );
define( 'SECURE_AUTH_KEY',   '^u&GU~9&KL[s.CRDT ` kD_I_b4/sP~Yh&OYT*ezd>1&l KZ{&YFDPs,)Mb,+dPE' );
define( 'LOGGED_IN_KEY',     'anqdOi$a$-od)0prV+`6fla&qfp5:{n:$aZxwNopHHM`.*di=7-4av$~Mur[=r=:' );
define( 'NONCE_KEY',         'G/UStu+^R&I ;]R$x]SP.>l:l4l+}sGARF%/Ky(1XtIb$0mD3)0xnu#-%)ZoU5EN' );
define( 'AUTH_SALT',         ',l0Xaby6~egH(J;b<GQ3@!#gBm>5%TMIG?fI#AaSZ_O)?OV>2T v8Rf}y3*JhK+p' );
define( 'SECURE_AUTH_SALT',  'kTIj6O8-pJv~J(f1EJ_MvLfQGjl:[0`+zjd5>5Wn~sPA Z3_%M(0x$u*H!uomPn^' );
define( 'LOGGED_IN_SALT',    'xZ*KmrfJ7sK}X/5HFOkJ<kvydA_;Af/ZTxn6D%O9bXGB.na^ASzmMpLt+Ur{J^`m' );
define( 'NONCE_SALT',        '5jM4Vgv% SiSS$o0Hd]PZ;&;lY~|t>d1%2[q7?ccz~HtwsYhwvPxZY(?8$(~FL1,' );
define( 'WP_CACHE_KEY_SALT', 'vGqJ3a[e?WxY_&2fkGk~4]YQ#dyt1XDL+X87(xP&-I::_s~#Waw)32cIjTxW*l]o' );


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
