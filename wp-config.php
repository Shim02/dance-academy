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
define( 'DB_NAME', 'academy' );

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
define( 'AUTH_KEY',         '5Ue)%&|a#TLsCiA:UFFcDscQN_6NhA.A!8<>ES(nCArn(-cns|^V{H8a7dBYfiPW' );
define( 'SECURE_AUTH_KEY',  'ay_[s}Q&hIr._L69Zo~6V+lXL^9jI}d>w{ VxY${xO+f(H{8w01t|:?Q>|M-PN`E' );
define( 'LOGGED_IN_KEY',    '~*mx:K1#6B7wH@-Cl+XCSLR iUJ}s3Vh{5t?^AifGET`-Sde(3L!._tG$fz`-H}w' );
define( 'NONCE_KEY',        'bt$$WZnH;#>s_g.uaj_90,JajCvB.&v`1nNqP(*}2J$i2~G:.b%f/`*_Qm2bpH*J' );
define( 'AUTH_SALT',        'BE5gP?3>%L1]Hg]%[-T/@K_h=d&D]weFe`6Y*a>#CR&0T!VdmZDF$um,f1./_tZb' );
define( 'SECURE_AUTH_SALT', '9GgiJF&LV$Xat(&[7b9n2hA!MV~k~j0|~Cib.S`!W*BZ N57Qj/,@$^jpNJJi:12' );
define( 'LOGGED_IN_SALT',   ')<R%nW-@j@?T@-Dj=Ai=@mM![^}*QVNDo$7U4gdFD;vphGkk8>7%-fN35PW7wH=,' );
define( 'NONCE_SALT',       '[gm9OPTT{B-k2Q.?g-=~wj7/fdP. X 87QtX3ek56MuJR#1NZ+4?THKwjjuy:~WK' );

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
