<?php
/**
 * Plugin Name: rj-wp-removelogo
 * Author: Reynald Jay Cueto
 * Author URI: http://www.myminipin.com
 * Description: Removes logo at login page. Pointless plugin if you ask me. But why stop there?
 * It would be better of to study to line and just paste it on your theme or do your own style. Your choice. 
 */

add_action('login_enqueue_scripts',create_function('','echo "<style>.login h1 a{background:none}</style>";'));