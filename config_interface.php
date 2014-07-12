<?php

namespace Config;

interface Config_Interface {
	function has($key);
	function get($key, $default_value = '');
}