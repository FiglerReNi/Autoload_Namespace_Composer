<?php


class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = 'classes/' .$class. '.php';
            if (file_exists($file)) {
                include $file;
            }else die("This file name {$class}.classes was not found!");
        });
    }
}