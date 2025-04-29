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
define( 'AUTH_KEY',          '[Pn%,CSN mX5U5-; N) oa7&Iu?caG]38R2*qmd5G@;*.{|)> Dz@I@:K)|Q1>QN' );
define( 'SECURE_AUTH_KEY',   'q1`u#>0~N.$T0So5V2dKkrHP,CHuo5][MCN0N95YX_rJLR]?YvkBn1Ol4Ta<L4j6' );
define( 'LOGGED_IN_KEY',     '?jau:sWf#%I0yt9Fxo[HK~M}?ewEos,J/Xv7&T+qAW+~_rdZI49$(6 Wri~_L]K7' );
define( 'NONCE_KEY',         'eS!y!>^FW3y{k@3J;]kE&+MGil:DLszy+Q8J!j_?d0zkuV9Iz7_|q6EGm~_m~$lX' );
define( 'AUTH_SALT',         '#?&2%Pz|r5W;)$Ta$R^ywEqXg5kc~p-f/~P,MY)sNF`$t*;G3~pyRT;DaWE&3~()' );
define( 'SECURE_AUTH_SALT',  '8M+1SvMZ[#Oa!c?#$sH]`@J:*IO[I`EvZ?m(o6Vt@n4:M&IX+Rjd!$Q</k>lX>O~' );
define( 'LOGGED_IN_SALT',    '9%.=8$_K8LWrl(Sit[&Gu^;GA(Vz1{ )E9Q];@4IXf_%%QG/(!0*kI`bPHVbj|IW' );
define( 'NONCE_SALT',        'Oe`L1@](U%1ST`lae43JObvIqNi;ox )>92,Sq4-P; fKTFZTWAjzWgQ2?#KfR9l' );
define( 'WP_CACHE_KEY_SALT', '<s*?kLy]!j&][rpXw1aZ!b$$mF`aM6 K3*Qr5ts|U:k:;KQ7pydOPYYzj>|dy6QO' );


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
