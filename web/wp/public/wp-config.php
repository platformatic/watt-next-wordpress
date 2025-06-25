<?php

$_parent_protocol = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? $_SERVER['REQUEST_SCHEME'] ?? (isset($_SERVER['HTTPS']) ? 'https' : 'http');
$_parent_host = $_SERVER['HTTP_X_FORWARDED_HOST'] ?? $_SERVER['HTTP_HOST'];

define('WP_HOME', $_parent_protocol . '://' . $_parent_host . '/wp');
define('WP_SITEURL', $_parent_protocol . '://' . $_parent_host . '/wp');
$_SERVER['HTTP_HOST'] = $_parent_protocol . '://' . $_parent_host;

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
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'userpassword' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'kBU].A|T-_|9mOS.q={t(7ie>))B[][U|VA]5:`2ln2*YX:syN)lO27fk?KT&eL]' );
define( 'SECURE_AUTH_KEY',  ' AEqbg;S56i+t1-TB=<Si&.`TVO[:_fsVkiZbcSZ9}x`LtW-}<N(Cgz (Bau?Zzc' );
define( 'LOGGED_IN_KEY',    '8w/;tmO%DUxs&<]+>d`ZPB4ogxOKbl1T8G?iX3=EJ)W){Ts=Z[~!>_)M~K.or/hC' );
define( 'NONCE_KEY',        'y|73X|(!J)S$%N16?z,Q+Ut2%8Oleh$y2M_s8[^?rs(5f_ Po:te`vkoZ}cDtAO*' );
define( 'AUTH_SALT',        'hqeZjV)k,`Z`&xcys*kI8V#(mm~~@)~K7>-05f)C6:FI<= ?`lP<p4=UWC/<bwxv' );
define( 'SECURE_AUTH_SALT', '$jnKn=#QN9$NamUhpeg*|y{eBG<mYDuJ*T&sg)gP@HN8LO_$.LD:;!}D<3Jj,gxX' );
define( 'LOGGED_IN_SALT',   '4I*vVbkTU0+J*Tdk=6]rY6m v#2r%N_4r^>O,wxLq8%!=LHZA|5Urjb&tSIA2rNU' );
define( 'NONCE_SALT',       '1}Vg[`;7M=Cx&_F!T:dSaecsmZwfv!h=Au9)AtSn0I&]6ZS8o0d<#Z14h|,H^+aG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
