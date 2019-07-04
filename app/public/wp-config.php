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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'tMsvzW6+FiwYuCYTgDBiPk08KDnF6eGk+AwrbvtjJmdVbG3kdZsuZ0Wi3Kzm/nKucPnAiRgt7pHxXGkccovnEw==');
define('SECURE_AUTH_KEY',  'gG6jtorVwo81KzkagrscZTPOri4scto9VPYS8D16tqIqi5Oxh4Fg+r1nh2ABu6OkOQ4AM45NKkicSNRw0w7aoA==');
define('LOGGED_IN_KEY',    '6Z5OBxXNB5XKWvZAEYFT5xRgTAU/tCXV0NAwS1VEa3LqSeehsq0qXYiwzPQPVzRu0xCwXZYeMN4nBNliqFEWSw==');
define('NONCE_KEY',        'FMQtIZzkunZE1hnsLsu6QW19U/kcYO5kWBRzUrIhXUSPavmu+0oe75UsP2wuU1mF+f06ov4Zyk/sVtAg9XlqgA==');
define('AUTH_SALT',        'y6LDX8Ju4SuUXCPNXQIsfuLveZ4aUPntKN/YolkjNVXaWpeQrGRFceIHnGbSLyKkSwgFkhjUrXWVerJIdbkvjQ==');
define('SECURE_AUTH_SALT', '/SfJUIB0qF/xFYX7BCc8Or3B7StQoMyqYjLaAAM62TAcHTo1p58yFqxHY6vFobMifYxLKrwIgUrGJKSgYIV7bw==');
define('LOGGED_IN_SALT',   'rfIEB+xTQYnHbMWhdWc8cna1ieIGBMzBkknqm+f8h9NDL0ktUCYFTOxhOi9738kx6G6ENDIqx52xVCIdvf3ptA==');
define('NONCE_SALT',       'WX2iSDA8EAyHM/QSMRWgd/MIWLdpViT2YpnNeZTxraI3U0b478wqffwg1hOMpleN1buIrI9u0f/pLg1Cs3Qfdw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
