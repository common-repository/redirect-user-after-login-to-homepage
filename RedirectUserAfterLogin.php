<?php
/**
* Plugin Name: Redirect User After Login to homepage
* Plugin URI: https://wordtune.me
* Description: Install an avtivate this Plugin an user will be redirected to homepage
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

function rualth( $redirect_to, $request, $user ){
    return home_url('/');
}
add_filter( 'rualth', 'rualth', 10, 3 );
?>
