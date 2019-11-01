<?php
/**
 * Helper plugin for S3 Uploads
 *
 * This is a helper plugin for S3 Uploads to add support for Shifter sites. Shifter
 * auto-generates a new wp-config.php file during each startup, making it difficult
 * to store S3 Uploads config in. Instead, we can store them in a ENV file.
 *
 * @link    https://www.getshifter.io
 * @since   0.1.0
 * @package Shifter
 *
 * @wordpress-plugin
 * Plugin Name:       Shifter S3 Uploads
 * Plugin URI:        https://github.com/getshifter/shifter-s3-uploads
 * Description:       Helper plugin for Shifter sites using S3 Uploads
 * Version:           1.1.0
 * Author:            DigitalCube
 * Author URI:        https://www.getshifter.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shifter-s3-uploads
 * Domain Path:       /languages
 */

if ( getenv( 'SHIFTER_S3_UPLOADS' ) ) {
  define( 'S3_UPLOADS_BUCKET', getenv( 'SHIFTER_S3_UPLOADS_BUCKET' ) );
  define( 'S3_UPLOADS_KEY', getenv( 'SHIFTER_S3_UPLOADS_KEY' ) );
  define( 'S3_UPLOADS_SECRET', getenv( 'SHIFTER_S3_UPLOADS_SECRET' ) );
  define( 'S3_UPLOADS_REGION', getenv( 'SHIFTER_S3_UPLOADS_REGION' ) );
  define( 'S3_UPLOADS_BUCKET_URL', getenv( 'SHIFTER_S3_UPLOADS_BUCKET_URL' ) );
  define( 'S3_UPLOADS_OBJECT_ACL', 'private' );

  if ( getenv( 'SHIFTER_S3_UPLOADS_TOKEN' ) != 'NONE' ) {
    // https://github.com/humanmade/S3-Uploads#temporary-session-tokens
    // Filter S3 Uploads params.
    add_filter( 's3_uploads_s3_client_params', function ( $params ) {
      $params['credentials']['token'] = getenv( 'SHIFTER_S3_UPLOADS_TOKEN');
      return $params;
    } );
  };
} else {
  define( 'S3_UPLOADS_AUTOENABLE', false );
}
;
