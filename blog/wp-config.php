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
define('DB_NAME', 'womoz');

/** MySQL database username */
define('DB_USER', 'womoz');

/** MySQL database password */
define('DB_PASSWORD', 'shigcuIp5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '=kwChun* vrxU4L+>cf2:Elgj.Vy(>kHQ<m7piDKy?)^|~eI:(i(=)0k-t!9q0>s');
define('SECURE_AUTH_KEY',  'o;{%|;-,P>W]afUlU1d=+TPP%1+E_TnL|bFJt:k?^?9N8C[28U<E>TnGO4zW03%R');
define('LOGGED_IN_KEY',    '#T/kV5f0/fyx(MQ1kQ+h&b[z*d=hE46|B?SMsP=>n@c:UiP=z]?,4TuNYC/-cNtB');
define('NONCE_KEY',        '2^uE~e5&H-(l+MV.]bU;Z?l#|4mp:wQNL~9?DiQJAO4qpuk@bSmGTP(n1O`~eQ?|');
define('AUTH_SALT',        'zef6{ryZvG4^zf{m)ucQv9|H334U%+G^3!79{2E2<&e_zw +wFHoD>pj-*@VSX^4');
define('SECURE_AUTH_SALT', 'OJd[x75+tsJ!Q;kj/l,5L}v/,  +K`#ur_)fZ+oN-$FMV-1<%7L$tp0]N|`W)D)n');
define('LOGGED_IN_SALT',   'Vzhs}YWL}vWv&9V^|hASNE?_8b|l@+vs=W8b`/`L=6[D++Nwk>nTTgBCyC73MQgZ');
define('NONCE_SALT',       'ofxgQ-?8$73^G|-9X*[e-|s:vN(B2Hu0iS52s0SIh#XMjss4nW=|Q(suZ^/dMiff');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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

