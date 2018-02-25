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
define('DB_NAME', 'pruebawordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|3]q($6L)f.lw7H{Hrg>bP_`0ZE6Lw`,Sgzt*{~*H-2VcNG>r(0{4t<%R^@r6!19');
define('SECURE_AUTH_KEY',  ' a=WoV+ :B)f:S[[7mu.#{6 @2e#j6:GIt,HGNBV-05rc9X3]J#2-;{b[k|D_.Ob');
define('LOGGED_IN_KEY',    'HtyxR?7i*iJ 100*TuJh$ Z{5lFg8=2e&~fo|OVl%k XYM|Art({|WKMk4-Gj#I+');
define('NONCE_KEY',        'VIGH~e*E[BsOZo]Gx@7PLG3b_nf=4y)/E]OTMi3uHXDn-i5Q@wOq]Id7PABct=gK');
define('AUTH_SALT',        'n9;`3)lNI=dd4g8B|wRYUOgqkf?V}:}}/q.Vz4`yS,KeTbt}S.UiJnh!|kF%-ki#');
define('SECURE_AUTH_SALT', '00)^M1!J9dqRnea|:q9amhh?g|3L!v;3^1m(v+=}3`_R~gQk&=b).jG~*Q-Ek$8.');
define('LOGGED_IN_SALT',   'K{#R`z``tu=RW0L7U2[-6J%p1zH1/[MffO!]83HKtr^~#<v7!J(P=8aS$P7#X8;T');
define('NONCE_SALT',       'bXrwIK&nl?qKYC8cuF-[pqW4Jfb/Hf`GVk9{.<9E,-ld8to3]vMTY6B:1hje_M+;');

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
