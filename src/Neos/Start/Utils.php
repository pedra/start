<?php

namespace Neos\Start;

class Utils {

	//Insert a autoLoader class extras.
	//TODO: create for MODULES, PLUGUINS, ETC . .  .
	function autoload($type = 'model'){
		spl_autoload_register(
		    function($class){
		        $class = str_replace('\\', '/', trim($class, '\\'));
		        if($m = strpos($class, 'Model/') !== false){
		            require_once  o::app('model') . substr($class, $p + 1) . '.php';
		            return true;
		        } else return false;
		    }
		);
		return $this;
	}

	//Include helpers functions
	function includeHelpers(){
		include __DIR__.'/Helpers/functions.php';
		return $this;
	}

}