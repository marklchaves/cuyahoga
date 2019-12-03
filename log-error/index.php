<?php 

/*
Plugin Name: Log Error
Plugin URI: https://caughtmyeye.dev
Description: Write messages to the PHP debug log.
Version: 1.0
Author: mark l chaves
Author URI: https://caughtmyeye.dev
*/

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}