<?php
// This will work when the classes files are inside the main directory --- not inside another '/classes' folder
spl_autoload_register('myAutoLoader');

    function myAutoLoader($className)
    {
        $path = 'classes/';
        $extension = ".class.php";
        $fullPath = $path . $className . $extension;

        if(!file_exists($fullPath))
        {
            return false;
        }

        include_once $fullPath;
    }