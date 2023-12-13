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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chuyendecmsfinal' );

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
define( 'AUTH_KEY',         'C:f=kZ`&h=Oa&)N1%4Vt/b#5jn.!]45XvT`iJBqZnnHPM|Zp/MCa2O:ahka1<Th,' );
define( 'SECURE_AUTH_KEY',  '2=8pk9=o#nOU.?Y;Z~yR%d$`^3N.Lfvw_)Nq-M= kD=p3[q!n-{G*7yBA8;~4;u;' );
define( 'LOGGED_IN_KEY',    'S>yU#gqqc#Wn;_ott :meyzw_f5MBrymQ;VZnU3kwt(84-{VCj[Uxfg.H0FQ+;HO' );
define( 'NONCE_KEY',        'oBE`]{UV]4h:L3lb2p;`|@4^5fSP|t//nb w?x^YiIZ>#HikM0eF}R{f;w0gI(mn' );
define( 'AUTH_SALT',        'r[lu`rIr?VtuLr.)zZ)i#^$s?<_[U2znF|8bxI&By>@}Wd=._z2(yfa<)7<W>WLG' );
define( 'SECURE_AUTH_SALT', 'Q>U+a%d(nF9h#/wBZo{n/Tm.#=5YJwR@43%aNeR:g(5w:g+IrSqgD<iw*Ib[Ou$)' );
define( 'LOGGED_IN_SALT',   'o;=$*HvS?!l<4l^-9u1xTK=<@a]6Qc;[|olG4uB8Um+5F,l{na 0nq+^/@P[SC@t' );
define( 'NONCE_SALT',       'cmIXZI!Q(ck:c1H6.cs@7`4Lv/,8%h#!L#UM)$g:O>4@3lZs1SwE/p?h*N>G}xf7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

define('WP_MAIL_FROM', 'hoaphd27.df@gmail.com');
define('WP_MAIL_FROM_NAME', 'Duc Hoa');
define('WP_MAIL_SMTP', 'smtp.example.com');
define('WP_MAIL_SMTP_PORT', 465);
define('WP_MAIL_SMTP_ENCRYPTION', 'ssl');
define('WP_MAIL_SMTP_AUTH', true);
define('WP_MAIL_SMTP_USER', 'hoaphd27.df@gmail.com');
define('WP_MAIL_SMTP_PASSWORD', 'oarkuyuyjhvdpnot');
define('WP_MAIL_SMTP_DEBUG', 0);
define('WP_MAIL_SMTP_AUTO_TLS', false);
define('WP_MAIL_SMTP_TIMEOUT', 5);
define('WP_MAIL_SMTP_CHARSET', 'utf-8');
