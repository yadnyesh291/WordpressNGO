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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '[Gm0kBsS@BncfCv|,28_MR9hV[&-+[35r/B>q}x+z-U4trECFiH6|Y-}y#j^d-Kb' );
define( 'SECURE_AUTH_KEY',  '3:Q_xXun 0=Ntz@*S]L&<_rg<t(3x9+$SQl4*z:&iT$r$IhqM7e{K4w^z5$u~-~N' );
define( 'LOGGED_IN_KEY',    'v7hpYj+-2P%&,k&xNfGrq(q3{SjPqg,Wz3<(A%`y=K*_1bu8_G!7p}wkmiUyXQ!I' );
define( 'NONCE_KEY',        'qt8$LE/pf~j<dHaB(7nEsEwYHb!Ad=bN*DDaGpDZ#LwEm<xl|:Epcc,DXT|/uqO7' );
define( 'AUTH_SALT',        '5tZNJN!)D{dQmP_M]ve*6>:GU2yC[}2T H@%9Z5;2}|&aeKp7wRmDJfAv,4l<_WH' );
define( 'SECURE_AUTH_SALT', 'jygo|E9#Yp?s&dw~w7IX&M6ml5tH TC+Y_ Q[}-WJe[*EUD_04bYIcvdR((QZlwp' );
define( 'LOGGED_IN_SALT',   'Vy)4o)o)[iyZaVoJ@jbKM>nc^&j?P(2;PRR[b;1:fD$.c$AseYap9M#ufIQ!,6lZ' );
define( 'NONCE_SALT',       '?1l9!|>^HN-)_#7B9z+dfny<QtC?`dw&6^/@.~r`V@-mp[w*T+3iW9+f._#KEhAt' );

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
