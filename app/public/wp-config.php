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
define('AUTH_KEY',         'DJmuRm04ll6tMBqdXOTgewQ+Tv3PXp9ydWj4Qr+8QFKRJHrL/3aHsQJCt4Eh+QR4KjavscWG50mnAlIcKlUsbA==');
define('SECURE_AUTH_KEY',  'sFMAz/s9iVxJ/HF8riHSKKOzWGvnd9n5wH3f395ldaSFfpdYVRqNnMRHrEmehzr31W/pgZCOIKKmCEpHRnAzEA==');
define('LOGGED_IN_KEY',    'QmWnDlmTU/gcKXLohbcuBCzaWYPaiQL8JHpZuCHVWMvos9fRHWFbYKPNkBko8zDG5NX8qTJowem7If9ILkR7Iw==');
define('NONCE_KEY',        '5iXOQF5zMzQFH97cHoFmjhFo1iJIIaPm36RxbbR6mzhr00oLbBxLYVqueNE1UJUKayJS7Uiv8jS4DLm7H8l33w==');
define('AUTH_SALT',        'HbHPtRPjob8fukihcxnkXtgrT96CdEF700LqIeW9oh5W6IUf1NgDPQ89MRbpds2BOjCZ48+sOXR28KIPsdu2EQ==');
define('SECURE_AUTH_SALT', 'UV21FsXBst2KIicqBbCjfp6/5mamlP8YKmfAzBL2LqWvOXQO+KkSmVaW/5ipjblBq+3bHMl/eLwva8dsiml2zg==');
define('LOGGED_IN_SALT',   'YuGn4NuZEKexjteiGqYvvdgWn2INDPFFUQOkNXXc23RkVW2RKKUnAhf4R2TAoaecjeawM2VsgT768xiDmT4Cog==');
define('NONCE_SALT',       'UBrpGCZGoqBJNwXC5YB4LPnm9PhXNpgqxxO67JOjo6nC7H5FMv7jammQwH6p9Fg6XEvbXW0inBGfwxKEiPGnNw==');

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
