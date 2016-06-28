<?php

class Tribe__Notices {
	/**
	 * Notices to be displayed in the admin
	 * @var array
	 */
	protected $notices = array();

	/**
	 * Define an admin notice
	 *
	 * @param string $key
	 * @param string $notice
	 *
	 * @return bool
	 */
	public static function set_notice( $key, $notice ) {
		self::instance()->notices[ $key ] = $notice;

		return true;
	}

	/**
	 * Check to see if an admin notice exists
	 *
	 * @param string $key
	 *
	 * @return bool
	 */
	public static function is_notice( $key ) {
		return ! empty( self::instance()->notices[ $key ] ) ? true : false;
	}

	/**
	 * Remove an admin notice
	 *
	 * @param string $key
	 *
	 * @return bool
	 */
	public static function remove_notice( $key ) {
		if ( self::is_notice( $key ) ) {
			unset( self::instance()->notices[ $key ] );

			return true;
		} else {
			return false;
		}
	}

	/**
	 * Get the admin notices
	 *
	 * @return array
	 */
	public static function get() {
		return self::instance()->notices;
	}

	/**
	 * Static Singleton Factory Method
	 *
	 * @return Tribe__Notices
	 */
	public static function instance() {
		static $instance;

		if ( ! $instance ) {
			$class_name = __CLASS__;
			$instance = new $class_name;
		}

		return $instance;
	}
}
