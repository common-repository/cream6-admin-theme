<?php
/*
Plugin Name: Cream6 Admin Theme
Plugin URI: http://simonebeling.se
Description: A user-friendly admin theme. Responsive as far as CSS can manage on the core.
Author: Simon Ebeling
Version: 0.1
Author URI: http://simonebeling.se
*/

/*
 * The Cream6 admin theme is a user-firendly theme for the admin section in Wordpress.
 * 
 * Copyright (C) 2013  Simon Ebeling
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */


/**
 * Adding custom admin css
 *
 */
add_action('admin_head', 'custom_admin_css');
function custom_admin_css() {
	echo "<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>";
	echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('c6_admin.css', __FILE__). '">';
}