<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'trh41045' );

/** MySQL database username */
define( 'DB_USER', 'trh41045' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin32!' );

/** MySQL hostname */
define( 'DB_HOST', 'cl1-sql12' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fwf3yBS5qrZEjPVZPpEYBdPHzyTrawPGpThdLCQwmYcFrIqojENVQ2QtrecobWn9');
define('SECURE_AUTH_KEY',  '5fMh2Ae5RlxbEwde5GmNNNetsqQEcKnkh7rJe4Nxk2pSoVPvqRB907fHAh4hqpgV');
define('LOGGED_IN_KEY',    'kblHQSvlYBguz6ZAOQsvMkoUWwaM8llOJ6ry6Ivglde2EbV3REGTwrWwRskRKESE');
define('NONCE_KEY',        'yOn3TFSPMqrpSZj4gemkabONzUwwAUcJMPHOsQERro2LyqlCPlA9jKQ1cmzD9r9P');
define('AUTH_SALT',        'lzSNpP0HsFk4w9DGAasnQucTfULI8d5t6VK20LaUCHr5CAAMi4l975C1XZeXTw1A');
define('SECURE_AUTH_SALT', '2wa99W06CDBFjbak8tUCmSiHep7Txpot6ufxX5ejoMNlqTeJXq00bTE88nZBNqIS');
define('LOGGED_IN_SALT',   'f26ZR2l9sCtTs4jKWWbEw3Fzjsh0vUeAhOFuITTAvQIegyTr8qEvJhfbDKaodZKl');
define('NONCE_SALT',       'orJXSDLxwH1lNtK4yXZoDgaVrwYh472n9tw8y2hyVH4WkbuY9pJTXBTaYrAsqxGT');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kkcv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
