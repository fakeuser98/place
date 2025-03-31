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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'place' );

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


define('WP_MEMORY_LIMIT', '512M');

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
define( 'AUTH_KEY',         'LXc{&7bXZf~.JXxO[|/02xXptC!$V;DFc6V3cUs}bkAI$W}Ct(!#(Xw`erC>tf<,' );
define( 'SECURE_AUTH_KEY',  'G>2n#t[WZH}?s,v~vF*|rInR5 On7j/(C^!F8Cd;prOBj}!dY@1E>Y)sat9{(wuD' );
define( 'LOGGED_IN_KEY',    '*PMB|V%U@J]qpfR!C5Yf dq^Y(ESFq$@4r x*9&c]o]*8x:2=AiW}<)t]-*l$Xm{' );
define( 'NONCE_KEY',        '%_kD<X}fJ`X*x&B=L:R|*suuX:0m}{X/%yHeac([z2QD1Et$MLOSZuJQ1>TYWKA,' );
define( 'AUTH_SALT',        'oOX*l&Q,Lt;nd=t w@{2I)Wr2wcTMEg$4jNc~I:K/we[CQMN%25|yr %U<#hk5|*' );
define( 'SECURE_AUTH_SALT', 'N%Wf*h{4h4{.zPc!n?9N5B{oPB.m,!X_!t|<GVM[6sAV7{wk!ZPa/=(%S#M{W1W,' );
define( 'LOGGED_IN_SALT',   'Fhw=w2g/ve_cHduz8%+I2#PV3`[=+l ;)#.*i hgqVrgGtW0X%B3:1B1@dr$R~y5' );
define( 'NONCE_SALT',       '`xw{WH^$B!`E09;?xX#7lN|E{:$GdZ2v$buNbwcL,d*=$-P0@VNsr8rr7OaOnwu;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
