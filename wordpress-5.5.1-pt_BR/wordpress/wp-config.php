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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '#hT_qU*ZceMqw,{5KnMXB%Hj`tJKDb2|lCg 57VJtfSU<!c~dQLM2m3F2.Hl+-SN' );
define( 'SECURE_AUTH_KEY',  'IAMB`,tnB~+C;69;[{f@q{;]y31Gag~$#)hX1@>}[AdE3KYUE]rb@tZ#Vk_-$^Lm' );
define( 'LOGGED_IN_KEY',    'Lg;QhW/~4IGx`@.dS)I?s~GHnV|hnV>8:j_3%/E|?=/8Ss|*p`w+=kHs6vr~a{e$' );
define( 'NONCE_KEY',        '}w ,&>;I8R|NwB#Z#7q||lVi>Yd(h^:~Nw)VP,pt(Z~d)G9vp&t kzRVN5AlrCe_' );
define( 'AUTH_SALT',        '*DD@q2y?8m)vjMNHS,Tp,XcADMh%WdadTYIta/7)!Z+n<Fj(Z1r1|X~1txcN>QPz' );
define( 'SECURE_AUTH_SALT', '1;xhN9F&/6)B=LCkU3vg/FSvY7g+J~y3h18pew.#Um@tf[{yiCQhEel|RJ7|lNql' );
define( 'LOGGED_IN_SALT',   'A&YnKn_%?Vp$/:-YRy,:xr:`(}k(]3P kg,Mjlso-<|nKbM@fX7@dy+TbLO,Xn%*' );
define( 'NONCE_SALT',       '%2Uhc=fbM,.u=}tnT0K}%:4a3XkkF}@G_jH[3N8xwz/p .xC(d#q;}PfLa)Lj#^L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'em_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
