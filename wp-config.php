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
define( 'DB_NAME', 'nhom3_CMS_NH22' );

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
define( 'AUTH_KEY',         ' AXRG&@JJ$s,;SmRU+@mCqw!Q>nyc)J5)6WJ<>m>>@G%@$0uY6@8v&cVL|d;y[)2' );
define( 'SECURE_AUTH_KEY',  'fVW>^?2KpkwPv^)z`]XGR:IMD%uy[F[ZHuN#QOuo3?+l*aV&WH-VAnlKm,tU<peo' );
define( 'LOGGED_IN_KEY',    '4G~gdtWP<]NU015yY)pAfEH-;9rOtB|^gcQ*^]w_r3V?I7GSE+9XP%:^?S2*@ oC' );
define( 'NONCE_KEY',        'X_g,rkr,tE>SUlvoP-},QQ|!@#GJ36rTyym7K-yl#U{bF9W]h366}Cz/>M6!o<,k' );
define( 'AUTH_SALT',        'hjO{og!^#J{0;mjmf~k~CQMkysPd25[7$:f*Na5(Y)TE.=hlAepl[vk@w[+MJN{0' );
define( 'SECURE_AUTH_SALT', 'S_{o3D+]-Ilvh7AWA%jcCAfi7083ebpH7<r,BM^ZzFOG}_|Yo;BG(3<!kNPoDF%N' );
define( 'LOGGED_IN_SALT',   'd]P+h1Y*?5BS<HBkD4=!y*F}KilR.rB/ gYfZP~Vwmjr2|gn?G%bR+-^_=LP%,)x' );
define( 'NONCE_SALT',       'Ch#/{oh/{^1VzWsuqd.K=+J3t+yW>Cxhgi4Z/{dpWJ!wMGtBK/lrp/5JL&p&B$I@' );

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
