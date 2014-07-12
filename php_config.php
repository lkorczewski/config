<?php

namespace MVC;

class Php_Config_Factory {
	
	static function create(){
		return new self;
	}
	
	function construct($file, $variable = 'config'){
		require $file;
		return new Config($$variable);
	}
	
}