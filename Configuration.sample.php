<?php
/**
 *   Mendeley API Client
 *
 *   Copyright (C) 2010  Jakob Stoeck
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License along
 *   with this program; if not, write to the Free Software Foundation, Inc.,
 *   51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 */

class Configuration {
	const DEBUG = 0;
	const CONSUMER_TYPE = 'default';

	public static function getPathToOauth() {
		$pathToOauth = $_SERVER['DOCUMENT_ROOT'] . '/sites/all/libraries/oauth/OAuth.php'; // change the path to your OAuth library installation from http://code.google.com/p/oauth/

		if(file_exists($pathToOauth)) {
			return $pathToOauth;
		} else {
			throw new Exception(sprintf('OAuth library not found at: %s. Please install it or change the path in mendeleyapi/config.php.', $pathToOauth));
		}
	}

	public static function getConsumer() {
		$consumer['default'] = array(
			'key' => 'CHANGE_ME',
			'secret' => 'CHANGE_ME'
		);

		return array('key' => $consumer[self::CONSUMER_TYPE]['key'], 'secret' => $consumer[self::CONSUMER_TYPE]['secret']);
	}
}
