<?php
class Logger {

	static protected $log = [];

	private function __construct() {}

	public static function add($message) {
	    static::$log[] = $message;
	}

	public static function get() {
		return self::$log;
	}

}