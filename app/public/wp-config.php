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
define('AUTH_KEY',         'oVQoD4FiM5Yhto7bDbWAqOzwaJGa9Tne3CC8d0IXC0qqYdMaNEF5SoDFksdaGD/pvr8rSWGTiCFO7P+K3iDbwg==');
define('SECURE_AUTH_KEY',  'uhJekZdbRLak+nD+l0qr+x8xUljMBe2Bh9B3pic+OTodEnG8pT/zuBJWoENFJrlma9iZE5SNXOfpHbJywkiuXw==');
define('LOGGED_IN_KEY',    'GSqNUjrUPHZcV1hFjRFLjDk5h1H4yqEHfysU4NDeVEJVKS77lxPKsyfZNLN/1L/qh/PPVuxmUa6kfNManmNoPA==');
define('NONCE_KEY',        'sM+BF03ceKDR3LGPzJ1gj8H2MlTPaKn6iT0LE+O1jLmpkK95ifCRGKvB5H2IwChawqKLDMAxe6/QydGnkSX+vw==');
define('AUTH_SALT',        'APyF9LE0IfFgUPQnan3gKb/JUYBDH20s6L3USwTGfaflyzn5iwLxMAfGYvWn6CuGJ3yjHTp2RXtyZm/bIhnWOg==');
define('SECURE_AUTH_SALT', 'aaG3l9Iycg4CZugIjvxTM8pm/KJ1LJSLkIp4kRBsrSxTbKdL5r1g4gPS2X+pwFa/P5me2BmxJoEE4++LF1wnvA==');
define('LOGGED_IN_SALT',   'Hri3Yjp53gm4yxI2el0kh8U9BvRMoRnp7O2hErZKMPPXW+CHk/EJ8cbQxG4q4H7CPWP/KdLUwrLAc/uMbzJqrg==');
define('NONCE_SALT',       '0yTuWKlY3qNtHhr2cKp7s0z13m3zCDqzPftyqR7g2gTdOogw5SrdwtlAIDBSrqV3RN3B1t2Ns3q+NZQVRHVRSw==');

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
