<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'azalee');

/** MySQL database username */
define('DB_USER', 'shanta');

/** MySQL database password */
define('DB_PASSWORD', 'HrvgNnx6');

/** MySQL hostname */
define('DB_HOST', 'tunnel.pagodabox.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#qLLd~ms0B=_LlE:(!`E![&nwm-(Bx3HkLliWy-+p+k|.B=|.$veJc]+3R4VzA6t');
define('SECURE_AUTH_KEY',  '6]h7w+:E7+;!zK:KHZO<RF}V&@|$N3(!Ql$1M=_[Su)t<jAp3+M15-ar&aV.nb;-');
define('LOGGED_IN_KEY',    '-i7.EN;KBU!=a7m|]qX^*7Oa|!%T>2H~HbX/m&*tOiK?- ~RAWnP`Ymy7pK.X8L%');
define('NONCE_KEY',        'd4k#MQepd6Z2UAUdPkY5u,Zza|vN?j|b%lu3IAQ_+S4/-@YJH@Vm :D)/d-)WYpi');
define('AUTH_SALT',        'f=3|3I?MW5z-&O$$qB<KaL{sI+!VZUEid:|dB-|Z/!$7!(nT-lw+mmeMED{46PO+');
define('SECURE_AUTH_SALT', '|ut@)jXCgv#1Mwn.YOYTs8_fX>/k Au~H<=9`p)Q]A;H^0FQ54t*>`bov]|if{&1');
define('LOGGED_IN_SALT',   'p3D;o/r&_O@]n Ta2]E>rF&k7*6U=A=&C[vgAA4:`a)n7E};>S8zx$fZx_{Dwe-O');
define('NONCE_SALT',       '5 3 F@_~6j=U8HH*LF8du$)+&byo]f)CKM:dB/$P5k_*I/f,B1}|ii~#t&/AVS[2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
