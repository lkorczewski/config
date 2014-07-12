<?php

namespace Config;

abstract class Config implements Config_Interface {
	
	protected $parameters = [];
	
	function __construct(array $parameters){
		$this->parameters = $parameters;
	}
	
	function has($key){
		return isset($this->parameters[$key]);
	}
	
	function get($key, $default_value = ''){
		if(isset($this->parameters[$key])){
			return $this->parameters[$key];
		} else {
			return $default_value;
		}
	}
	
}
