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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'v`#qF&GTElx93Th/5CYo%Z{:S2ST-Z^P{^?upFbehGQdTvDP>fo$DG9UI9Wm6HXi');
define('SECURE_AUTH_KEY',  'B1.1m*&Y1Or}h0tt~I)q4Y)3[m[M5rj:$%$$PriURF7QNA]CY[.`U(2Q55+29tw`');
define('LOGGED_IN_KEY',    '=fQm7SG@~LD}5cESASPP[+Bs!Vb:*~HBE#p:>)2NmX%=.u*ASI=my:fjpktPi%c[');
define('NONCE_KEY',        ').Hk)b>%oT0fGa9:JoICbab=k1IaQR{YpRh49`5w]En$`}^8KO#)f5/:x_(u/.oI');
define('AUTH_SALT',        '3jX<Mq+}q4XVPj,h*#;#{;1iYLD9td}51Tt}%51|z?aXu3<-LcSI|d,-p0VWVt|>');
define('SECURE_AUTH_SALT', 'nc^%}O>j+*)j4eH|d@[?fqfb)eF0[MJ8<>_Erw[8R}}Xo<|mRS;o2WdgT^iN|ZL9');
define('LOGGED_IN_SALT',   'K(W9~ }I{5~Y$sE{<:70{l[]O!O :`>M(73nEA*U&&/2Q&H;; BC69f|oH8#y{^g');
define('NONCE_SALT',       '-C?Y59gBp?VJiRuEtXC3|]4]$hi|a?#k1tY5a1J_d</)9Lk_g)[_ L#3$ FC|;is');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
