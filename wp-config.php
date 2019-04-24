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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'howtodo' );

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
define( 'AUTH_KEY',         'ThMmc@x-u7o)vV7!yxTO$kON>%H8c!?)BQ/J(GjKZSrEk>=bG<7:tMi<ZTyMx38T' );
define( 'SECURE_AUTH_KEY',  'K>6M)v<81BjOwxA7Q;7wg+.wXo uLnqJc`Y)/ub}i[]Sd)EFCAw>lP{!>K5C32D7' );
define( 'LOGGED_IN_KEY',    '$3I_c%w#O}I+C+Vt&PP;N0to08r5=:tNi7s)=qCHW8c3^lxht(Yn<eE^:|#c^s&|' );
define( 'NONCE_KEY',        '%I1VJ$nc?L</XyV-qZN#$~]8FZkc.)9V)Tq /=o0FkWAaJH2O*O`Lre1-5jH+R4t' );
define( 'AUTH_SALT',        'vOOsy>/lo,kTqa0u:+de3j@rF}wGP9O+T_pIEndk#~a_>@p#YpFtfO`K 0brr|<9' );
define( 'SECURE_AUTH_SALT', 'UK#:C@thQg<=c_=Sy_NX3(0=sRDx?*-4q{7g)@BI#lCLKkW]Ux4Z_rB-=`_vU$~U' );
define( 'LOGGED_IN_SALT',   'S0YR:S(h)?V61/s.Ke/!|TKzLh23$%]IL^vz|R!V9GREVimi7jmBR/|s_s6/0/ED' );
define( 'NONCE_SALT',       '6H[aM_F,&|<sZ43%^[ZEY=~GP6;RH*Ei5@g~,iR+uRI4^|1@ WkbY49LT12q+w#*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
