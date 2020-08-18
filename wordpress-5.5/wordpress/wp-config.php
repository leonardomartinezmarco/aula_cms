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
define( 'AUTH_KEY',         'q~7$+,Xaz#+.C7#D?XNU>xatMW>Gs|kTCTL$_)%W[*)T}#VZF9KMmHi;CFc<^mLM' );
define( 'SECURE_AUTH_KEY',  '>K^<46JmhfjJhtz`nJ>G|`4HC.tg Vrs(<e`D`63s|of*(|R$hP2tsu::W2Om4/k' );
define( 'LOGGED_IN_KEY',    '}g*znEc,7e`iw2(vFEG }, ZB4j_b?=.&xZ13LVc3x:FC5Dzh#!j&lptJ47D+g$G' );
define( 'NONCE_KEY',        'MLKt>pBP-r90;2. 8>MA?L6Of}+;E^#U^i/(#G/:=sOLPT=gP$vIAn6q9}c15M$n' );
define( 'AUTH_SALT',        '~oDruRGm;&Ql%)szv?3!:o*g=zU|?~.SfDF`Lov8> 8Cse}MYQeDOOM7_YcQ$R+c' );
define( 'SECURE_AUTH_SALT', '`DoC@%9ULfd8wreygh>v@w43:pCyK}T2M&s5Z13J=3XLsBmf!X:)0:/o}5U]ZLU{' );
define( 'LOGGED_IN_SALT',   '+sP_(}_7O4d03T?(b?CZ%?/oYg!n;xx0d:<wpP%DOw3FiV2E>VNWgi+TyCTTXn#.' );
define( 'NONCE_SALT',       '4R{6?V)Oe3bGFXM4!7 NIsUywK Ds1>5Dr!eUt_6Fl=~o{sVz-i~0fE98R;iK(+/' );

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
