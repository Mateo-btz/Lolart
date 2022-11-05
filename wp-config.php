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
define( 'DB_NAME', 'lolart' );

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
define( 'AUTH_KEY',         'bHJ]]dDH> PP[Qb!(X8.T{:L6MhS=I&|t?16 6%Rl<@$xcnBT:Dm]nrYG%cd6eN ' );
define( 'SECURE_AUTH_KEY',  '/>Def}pPrv9[,C8.o@ub?Qp%5>|(>@0ypw^e,*K@anPl6|=f2kQHTmz@K?DP*}rl' );
define( 'LOGGED_IN_KEY',    'fH/ofsOI(CJO}lh*Rzwxy[?i#K{{miq0W0tZKLT?Z[usP9q7c{%@liUOuT4IfUR]' );
define( 'NONCE_KEY',        'Oa6T-hCt)Qhdd{|q*)EL9=/=Ap?{I-KW,z`VZ|{Or|%LC[<R?aXR5!TnKVtb[E32' );
define( 'AUTH_SALT',        '3w+iXo5CZ&;9%<#ytpZ15DVQVvmTrY80V[$z--e0*:/ Y5-w*gP^GDoz]8k,Yp 2' );
define( 'SECURE_AUTH_SALT', 'o[C~oiXVNBEyb!tn8]_zb(EeXT-vvP@Na77X]7Fa?^wG[r?pb}r~k2Was@~dqqx}' );
define( 'LOGGED_IN_SALT',   '5F3uyajo*g<.UMtx07(!6PoO$mmHSt7kR6#IN,YvA$].n.!]U`5:Qdb}Y:ucym0;' );
define( 'NONCE_SALT',       'g:~czWW8ADYBnKlN0P=1%SVDh{@,Tn6?3VXJgIBmx*g4wDNMy<#Pf>1,zPr`p<4*' );

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
