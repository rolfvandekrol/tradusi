<?php
/**
 * @package Tradusi
 * @version 0.10
 */
/*
Plugin Name: Tradusi
Plugin URI: http://wordpress.org/extend/plugins/tradusi/
Description: This is a plugin that provides multilanguage from a developers standpoint. We don't want point and click. We want version control and work in teams.
Author: Sebastiaan de Geus
Version: 0.10
Author URI: https://github.com/sebastiaandegeus
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

function s( $identifier, $context ){
	$context_strings = tradusi_get_context_array();
  
  return $context_strings[$identifier][LANGUAGE_CODE];
}

function se( $identifier, $context ){
	$context_strings = tradusi_get_context_array();
  
  echo $context_strings[$identifier][LANGUAGE_CODE];
}

function tradusi_get_context_array(){
	$context_strings = file_get_contents( ABSPATH . 'tradusi/strings/context.json');

	return json_decode( $context_strings, true );
}