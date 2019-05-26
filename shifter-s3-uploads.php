<?php
/**
 * Helper plugin for S3 Uploads
 *
 * This is a helper plugin for S3 Uploads to add support for Shifter sites. Shifter
 * auto-generates a new wp-config.php file during each startup, making it difficult
 * to store S3 Uploads config in. Instead, we can store them in a ENV file.
 *
 * @link    https://www.getshifter.io
 * @since   1.0.0
 * @package Shifter
 *
 * @wordpress-plugin
 * Plugin Name:       Shifter S3 Uploads
 * Plugin URI:        https://github.com/getshifter/shifter-s3-uploads
 * Description:       Helper plugin for Shifter sites using S3 Uploads
 * Version:           1.0.0
 * Author:            DigitalCube
 * Author URI:        https://www.getshifter.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shifter-s3-uploads
 * Domain Path:       /languages
 */


// Option 1.
define( 'S3_UPLOADS_BUCKET', getenv( 'SHIFTER_S3_UPLOADS_BUCKET' ) ); // define( 'S3_UPLOADS_BUCKET', 'my-bucket/my-folder' );
define( 'S3_UPLOADS_KEY', getenv( 'SHIFTER_S3_UPLOADS_KEY' ) );
define( 'S3_UPLOADS_SECRET', getenv( 'SHIFTER_S3_UPLOADS_SECRET' ) );
define( 'S3_UPLOADS_REGION', getenv( 'SHIFTER_S3_UPLOADS_REGION' ) );
define( 'S3_UPLOADS_BUCKET_URL', getenv( 'SHIFTER_S3_UPLOADS_BUCKET_URL' ) );

// Option 2.
define( 'S3_UPLOADS_REGION', getenv( 'SHIFTER_S3_UPLOADS_REGION' ) );
define( 'S3_UPLOADS_BUCKET', getenv( 'SHIFTER_S3_UPLOADS_BUCKET' ) ); // define( 'S3_UPLOADS_BUCKET', 'my-bucket/my-folder' );
define( 'S3_UPLOADS_USE_INSTANCE_PROFILE', getenv( 'SHIFTER_S3_UPLOADS_USE_INSTANCE_PROFILE' ) );
define( 'S3_UPLOADS_BUCKET_URL', getenv( 'SHIFTER_S3_UPLOADS_BUCKET_URL' ) );
