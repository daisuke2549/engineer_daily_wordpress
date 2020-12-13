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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JEjVioC6IBBPiQtNj2Lh3h0zu8sDX6hCLDSSiH91Q9VgNv6EfnN5YOwXAoF4RnwZ3CC7VldFgMe9czn4GSnV8g==');
define('SECURE_AUTH_KEY',  'Md6VqBrwc5qtLwSWvjrk6VkvRYdyta2KPLxPrUl03F9lpiBNXatREMjoPyHeZkJc+FVsFq1WXBie/PsOoUxlPw==');
define('LOGGED_IN_KEY',    'vG6AcucDmZ7o4CKpveF5JKSms6aPM0XbeWSq8eDcNls5noJfVt8mD5vylmyp+200hAxrP5gt6XtmARrT/gMpFA==');
define('NONCE_KEY',        'w5VnRSDUTcCtcK+fw2kIREwh3Sczh/Hhi+NpmSxO9FA6v4SmUQ88uugCHFhLXHb+CFf04vo3iv4X0OnQ5ODuWw==');
define('AUTH_SALT',        'mhh3FOBBG6eQGEoIhIUd5hIGQhiACncMElzH7F0PTu9i7udf8MpuJw8GvTt4g8luBmUTfZCpkCwBlriJdf5UBg==');
define('SECURE_AUTH_SALT', 'OBji1LA7ywRYTqsPuGFK01HZTZlSuf5e7qcbbClbAum5Xe3EnrybjAjo0s3tDJOUYGnRZd2y9sIwnyXAMKL1sw==');
define('LOGGED_IN_SALT',   'xzh3yruZott9txhI/GjdvzkE++Dn2PRAZyf1HSx/RCSrlxT650Y48n3fs6Od0eosUuhoP3gP9+2hrwoRFduWmg==');
define('NONCE_SALT',       'pUPwJ77mTsrU9IwMT3ZFVNs8lk0SZD5dnMr1+putIu9I00qdljpm2xX3ggxk2ncQHAwBYZg6T4x0vb0GBFwyqQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
