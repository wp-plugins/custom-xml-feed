<?php
/*
Plugin Name: Custom XML Feed
Plugin URI: http://javiercorre.com/
Description: This plugin creates a custom xml feed, designed to work with the emerald full iPhone app. The feed generated can work with special readers like a specific mobile app or your own reader, you may modify the feed-template.php to fit your needs.
Version: 1.0
Author: Javier Correa
Author URI: https://twitter.com/javiercorre
License: GPL2
*/

/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : yo@javiercorre.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*wordpress do all the work because of the "do_feed_" prefix */

function do_feed_myxml() {
	load_template( ABSPATH . '/wp-content/plugins/custom-xml-feed/feed-template.php' );
}


add_action( 'do_feed_myxml', 'do_feed_myxml', 10, 1 );

