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
define( 'DB_NAME', 'wp-theme' );

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
define( 'AUTH_KEY',         'wWqh;,;/:B xLb^6h_[@g[,gv<#0mg7Ee~uzKW-EcA=v$Zw^=m1R0X.ae~m)fO$X' );
define( 'SECURE_AUTH_KEY',  'W{f]S Hld&xmL1S$4.0,f]0@#SE#}^:0mS}vk2H9hIfEd*>~p?__&Md(mSxnhK^4' );
define( 'LOGGED_IN_KEY',    'qvj H=%5A][SZDkXbh(b_1`>:i[OiYBAa(:H7OodhO$Udk;s>Dkudt~Cq ~xy4pv' );
define( 'NONCE_KEY',        'wRs;+#0USMUN$CNCf$J4(.|QBoR.?I5(!^VoLSile5Dvd!UGcCYQf~MeGa=Pmn9Z' );
define( 'AUTH_SALT',        '=mgXiF1S_ge|!&~jmPRIAGVrHK?o+0Zqx={sx{swvMd!-k13m cutrK.I=,4ZgbG' );
define( 'SECURE_AUTH_SALT', 'k0[pU;W?D6(P`J{Q,aU`#]?Tg,+K%xpBfi}oHad2-@5RTzK1oC1/(*e0#mV%.aIJ' );
define( 'LOGGED_IN_SALT',   '`}o83?v:+%/8zmt/2EB+vm1v^dyIf9^O[Ld`}qj%&+vlyXE{eML: HeXv.,uNp}M' );
define( 'NONCE_SALT',       'bS+b13}i*M?62Mjt>DV)WB9)k~z[:=P;_1ua,-%8[29h{B}$d2xqVfZ>!];7=O:I' );

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
