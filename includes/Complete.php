<?php
namespace Workshop;

class Complete {

	public function __construct() {
		// construct.
	}

	public static function run() {
		echo self::text();
	}

	public static function text() {
		return '<h2>We are done!</h2>';
	}
}
