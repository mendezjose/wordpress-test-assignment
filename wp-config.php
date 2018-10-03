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
define('DB_NAME', 'wpcodeline');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'q[T$E>4n$Sf&|DsSOT]PSdnka]rgS(rFnna 0k7,pv2[F*QW]Aa9q4Nd!pFGw.ee');
define('SECURE_AUTH_KEY',  '~H]*dc6++#>Y/Pk9CK$~E/(K].(Gt;:-d18Yv.{YG^= D3wB1ZI FJda&Y%uxnqU');
define('LOGGED_IN_KEY',    '|ZO%#XFMqDZtO y]OEYYY8KRDAjp(c;V?o4rTFaD<at?@N}`{AKr~8:p*wC}!8rT');
define('NONCE_KEY',        ',3E7ZRB[]9bmS`nc~[CS4%X,q)*W|Mn)[[_dC,?^>R:R{`U;Puq~h vLe&=QjV6B');
define('AUTH_SALT',        'mHfc|9<!A`>+yt$(d]:sDBP/*l6-,^y> [.1X/6rCp=p%SygFNj[kj6aF%Ara`{R');
define('SECURE_AUTH_SALT', '08%4[[{gVWM97k)b1{^tI2S(QlC/Ev}*9C;/=z|,0UuRO [wSNb,1>mug^loly(B');
define('LOGGED_IN_SALT',   '0n/A!HrqAb.#8_J5d#i 6nL5h:ts4d4@j2V&182xVqQ/tSA+Qdna9,6&NCw/FJH@');
define('NONCE_SALT',       '|%$s[9~*mn;#d*BEI|,|(H#/v[D5e~.LPj|k,ye?NTc>@Zg*Vq u]Sdtv}G!_EE]');

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
