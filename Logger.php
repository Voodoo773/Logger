<?php
class Logger {

	protected $log;

	private function __construct() {}

	public static function add($message) {
		$this->$log[] = $message;
	}

	public static function get() {
		return $this->log;
	}

}