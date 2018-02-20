<?php
/*
Plugin Name: Gitlab Plugin Updater
Plugin URI: https://www.arnoutpullen.nl/
Description: Update plugin from gitlab repository
Version:  1
Author: Arnout Pullen
Author URI: https://www.arnoutpullen.nl/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( is_admin() ) {
    include_once( 'updater.php' );
    $path = plugin_dir_path( __FILE__ ) . 'index.php';
    $repository = 'REPOSITORY';
    $token = 'API_TOKEN';
    new GitlabPluginUpdater( $path, $repository, $token );
}
