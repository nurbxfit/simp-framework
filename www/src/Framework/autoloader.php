<?php
/**
 * Define auto loader to load all class on their namespace
 */

 spl_autoload_register(function($class){
    $root = dirname(__DIR__);
    $file = $root . '/' . str_replace('\\','/',$class) . '.php';

    // echo $file;

    if(is_readable($file)){
        require $file;
    }else{
        throw new Exception("Class file for {$class} not found: {$file}");
    }
 });