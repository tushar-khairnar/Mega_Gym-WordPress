<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tech_solution' );

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
define( 'AUTH_KEY',         '6obp1|mI?v3YN[f}61?6&-em`6Z%PIoCY[mPdY{3NXgz $diNLQ @;,%k=Wj-VB(' );
define( 'SECURE_AUTH_KEY',  'tq]C=/-=YyD$YglPYeWpsRw]<B.*[^S/w.,?YRI0M7Z3E6nFpfeCU]s.r=Ifr]=k' );
define( 'LOGGED_IN_KEY',    '`2Sh4+~0_X`G<{PI}|.}P8[LS1vwvut2gkUUMz#y_Cflz9``FEoiXPYvT.H_%#X<' );
define( 'NONCE_KEY',        ')2=N~;~_p$V8-}NJDT+gJW{Q5[drNZirJl?!}(*FW#3IZZ7!-<)GE/<(fV0#T~5C' );
define( 'AUTH_SALT',        '+Q.|IE&+.s;m#/_NBbir`K.}?Hc0xdKuP~^Swc<WDW0%fFVirTg S-)%T%g`#415' );
define( 'SECURE_AUTH_SALT', ')TtnRU<p<5 {AXXwF[XCkn#*nk/a6f,q-zpwtb8U0iQ^J=T<R50LX#6@&U{YSp..' );
define( 'LOGGED_IN_SALT',   '>n|0c9Arisud}s9|Wr)hwlA7y{.:&}.7rYXMPL6*0.Cur]Yx8_=mc|U&?WW[Td^a' );
define( 'NONCE_SALT',       'gGn^*.gj%xgW,YFl1BY[UYYZBS2RsF=D$#Jx+(qg5Kc#i`Tg(MWRsh}td`Jh-4F6' );

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
