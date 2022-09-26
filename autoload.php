<?php

    function __autoload($class_name){
        if(file_exists('src/App/Ficha/' . $class_name). '.php')
        {
            require_once 'src/App/Ficha/' . $class_name . '.php';
        }
    }