<?php
/*
Plugin Name: Styles: TwentyFifteen
Plugin URI: http://stylesplugin.com
Description: Add Customize options to the <a href="http://wordpress.org/extend/themes/twentyfifteen" target="_blank">TwentyFifteen theme</a> using the <a href="http://wordpress.org/extend/plugins/styles/" target="_blank">Styles plugin</a>.
Version: 1.1
Author: Dimitris Bakalidis
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Require: Styles 1.0.7
Styles Class: Styles_Child_Theme
*/

if ( !class_exists( 'Styles_Child_Notices' ) ) {
    include dirname( __FILE__ ) . '/classes/styles-child-notices/styles-child-notices.php';
}
