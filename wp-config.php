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
define( 'DB_NAME', 'pmlm_shop' );

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
define( 'AUTH_KEY',         ']z6ClTf8KCQ=,]p%W&S=ZF{K-A+S>n%#@XVcpG`it*sz~wW~CJmB/pSTIG35gjB:' );
define( 'SECURE_AUTH_KEY',  'w%?iJd]U!])GmtA(^qdpU>ec9mrMNT.>9LB}Qd890|u!<tBeTrz,p_gU!0(#=~_G' );
define( 'LOGGED_IN_KEY',    '}*g:)3,gnuAdTBW]$Ufk9,C*$;Rec#^72*6/t1MFz>>JCk?eG+vbQM%Lqjy8AfRo' );
define( 'NONCE_KEY',        'n%7T!:g2H,#CQ:1-xThyr`]`>G&+RR+bF%?U5EVog(1vo%%#JhVjGO-xbfV0pFjz' );
define( 'AUTH_SALT',        '`HNjP61W/V)*Otsj|d/t/R{%X(]Ga=|!4*&;8Z+p&8nqkb)u%T<*Q@Di.xw5)qJX' );
define( 'SECURE_AUTH_SALT', '`>4j=%U1wO{.,1SbJMGc7=F)tuj%~;{%lv9jEu[,*VQ16XLdUU1qdnm}y+rB4Xur' );
define( 'LOGGED_IN_SALT',   'GL3VHOY8R^n><yM]Z&Nk8!j Gfc uH2T|{`I8ho%ZclYW6Cj3_$/H3o.ToNUiL/U' );
define( 'NONCE_SALT',       '-EigSt.Xt!u| |plYRrRn[B6{X1rp/YX<>>#Ngx?q4VMSwr2G#zt3s:2g{yVsoW)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pmlm_';

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
