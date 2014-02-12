<?php

spl_autoload_register(
    function($class){
        $class = str_replace('\\', '/', trim($class, '\\'));
        if($m = strpos($class, 'Model/') !== false){
            require_once  o::app('model') . substr($class, $p + 1) . '.php';
            return true;
        } else return false;
    }
);