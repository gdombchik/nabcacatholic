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
define('DB_NAME', 'nabca_wp1');

/** MySQL database username */
define('DB_USER', 'nabca_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Y#XRcnGTN#13~]8');

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
define('AUTH_KEY',         'TMjzeM2qfh2BD0LFyCM0tIhtQG9NTY0wxhEgliFSsDP8bXcREVydWgP1fepfsWZW');
define('SECURE_AUTH_KEY',  'tGQtX6Yne7EaErwZJoG3eE3wqm0l2S5dpQG2gYXntbLgef7AQznmYHfz66z4TKmF');
define('LOGGED_IN_KEY',    'KngvHfbdka2Km8lbdSTPiQjgAeE0Rh3dKc6wxS6z9XaPTXMGKXpd0vArjERNKqg5');
define('NONCE_KEY',        '2otCe1xtjZWAjN8QlmpkPs5Gb6QGeecW2yTxt3TKt4f27cTfHmY4gNDwWKkHYMfz');
define('AUTH_SALT',        'jRBbarXy8GD2IuWwONBrjqqkHDVcpa4RdFqMv5EtIENUmjU5m5QjChYZRJw2OKzF');
define('SECURE_AUTH_SALT', 'bRhEeZRZHqKhE0gniG4XDT4X5npLjgFVxoZusr0XNqDKKwpaI59t3svcMf3FWa1Y');
define('LOGGED_IN_SALT',   'n93Qopsqrfsw6PnjNn0KHAE513a3ohBssmxKYVC0Yu0dMCVn8hkTbVN4H20X5od2');
define('NONCE_SALT',       'DOfXH14zVwCblJmtFIuMzdr10EdekBRxyLhH7Abe5iFUuSEfPEA2nSCFA6QMlrAz');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
