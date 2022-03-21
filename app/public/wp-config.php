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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         '0jv8Puoi1W2rC1EJli1FjC2X6uqUH7YCpvqeZNhvpT5QuqnAHN7F7KOw/nLM6fDHlp/6oURhzyGUFqTylQoQUQ==');
define('SECURE_AUTH_KEY',  'sCp2xqZ6dH7lD4dXxnnxwuK3iw6gHu9+Gxu7xxUIojkvyDGBFoyB+2k4n56KhzxaRZbeQ6VVrGolowtoA1Hd3A==');
define('LOGGED_IN_KEY',    '7KDcl4KypHm4a+B3IYTNfueNKV2fTSS7Z+mGQayUZjDNO+vG6YATtWZirzFFgasHmGvyb6QAyBy8ivRicodOKQ==');
define('NONCE_KEY',        'VAG60gDxnQBJyGk6rCWEDub/P5DH5rKokn+cmK8sTaH6ZG0gCusJRmw7QCfo+2uCbwSRXJuc/odKO5FvO6wdmw==');
define('AUTH_SALT',        'mdoDvGVXRIU8vrY+ukr6b7gwKAd2FIaNPq9ZL1zQIWLhm0QcAPslJkHBljgDyhjYxoLIrThYscaolfnrrykq+Q==');
define('SECURE_AUTH_SALT', 'Q3/Xc/hAzNUW2xrAGPBJuC8pyc8/hYOnFNvNb8wLGXaoj4IvquUPYj4srwNdXKb0eeU+NTVAck/2cS9TgMw5XQ==');
define('LOGGED_IN_SALT',   'kgRf5PYANOSAuVWFl4ieLB4CazPLu7v4NjMYIlBCoYVNqEO6TuNHTKSxULKhjtGOpS/S2tiGReYZqQG21Sd9pw==');
define('NONCE_SALT',       'eA1kCTpV2JiUzCZWg6mAI7nL1LCDtPHs9nGXKG08ojS224NAO20muQjM7e8/hU8rbwc6oddnETJOy19zQ3mZrA==');

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
