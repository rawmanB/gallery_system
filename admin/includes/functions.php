<?php
function autoLoader($class)
{

    $class = strtolower($class);
    $path = "includes/{$class}.php";
    echo $path;

    if (is_file($path) && !class_exists($class)) {
        require_once($path);
    } else {
        die('file {$class}.php was not found');
    }
}

spl_autoload_register('autoLoader');
