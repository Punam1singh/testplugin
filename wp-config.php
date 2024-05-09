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
define( 'DB_NAME', 'task12' );

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
define( 'AUTH_KEY',         '$+aQz0-:tCD~-DXvq_/l$9@`*]QCMK.Q_P22j0~ZEXAUZxS|cHFj?:BD}dJFFMU$' );
define( 'SECURE_AUTH_KEY',  '-1U>ac4bX+.G9HU=?#^GzT%4+izIDI`O`Oze&or[w0Xe^*Bp5}n@edldOc/3XRnq' );
define( 'LOGGED_IN_KEY',    's72it+*8uwAjH8STr^=It[+%D^_zGWE%mq3Z1O$GVHW?lt0CHg-o;P ((WZ7`.:.' );
define( 'NONCE_KEY',        'z)%vl#UGxg`l$OsYBndt?FjDHlZKhn7pPJ#y0p/t*R_H{r3=.XK2X5qeABykghL7' );
define( 'AUTH_SALT',        '4S<cDu:y?]PE(!qw(2M6+yLzlIiD,o>0|jdD$ DKC$Z}tW`<SCk7WB.ah)MS!1y8' );
define( 'SECURE_AUTH_SALT', 'yaqylKJUZ<uU|Io^wYqd _T_9@iCAg{DOMUBQUw-(&=<|<]$XDQ[<2dU<,h.=4.k' );
define( 'LOGGED_IN_SALT',   '7wty;.xS6*U),jyWF$@t=@71!Wyj(3Ppaga;s7 sj^*i.+?,f8^HCqT8x`.p^;>V' );
define( 'NONCE_SALT',       '4Srcm}wX;LYD7P<,L_0EuiH|&o3,m,pR]1ud1xE[W*_nzW+KZL?m,#e=:>dyUxd}' );

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
