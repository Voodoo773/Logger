<?php
class Logger {

	static protected $log = [];

	private function __construct() {}

	public static function add($message) {
	    
	    if (!is_object($message)) {
	        return static::$log[] = $message;
	    }

	    return static::$log[] = self::dismount($message);
	}
	
	public static function get() {
	    
		return self::$log;
	}
	
	protected static function dismount($object) {
	    $reflectionClass = new ReflectionClass(get_class($object));
	    
	    $array = array();
	    
	    foreach ($reflectionClass->getProperties() as $property) {
	        $property->setAccessible(true);
	        $array[$property->getName()] = $property->getValue($object);
	        $property->setAccessible(false);
	    
	    }
	    
	    return $array;
	}

}
